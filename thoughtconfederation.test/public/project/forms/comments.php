<?php
    session_id();
    session_start();
    require 'connect.php';

    // Comment count
    $count = "SELECT COUNT(*) AS num_comments FROM account.comment c JOIN LATERAL (SELECT post_id FROM account.post) p ON c.post_id = p.post_id";
    $stmtCount = $db->prepare($count);
    $stmtCount->execute();
    $numComments = $stmtCount->fetch(PDO::FETCH_ASSOC)['num_comments'];

    // Comment Query
    $say = "SELECT u.user_id, u.display_name, u.email, c.blog_comment, c.date_comment FROM account.users u JOIN (SELECT * FROM account.comment) c ON u.user_id = c.user_id JOIN LATERAL (SELECT post_id FROM account.post) p ON c.post_id = p.post_id ORDER BY c.date_comment DESC";

    $stmt = $db->prepare($say);
    
    $stmt->execute();

    // Initialize an empty array to store the results
    $response = array();

    // Fetch all the results as an associative array
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Append each row to the response array
        $hashed = $row['email'];

        $response[] = array(
            'comments' => $row['blog_comment'],
            'name' => $row['display_name'],
            'id' => $row['user_id'],
            'avatar' => md5($hashed),
            'date_comment' => $row['date_comment'],
        );
    }

    $numOfComments = array('count' => $numComments);

    $json = json_encode($response + $numOfComments, JSON_PRETTY_PRINT); // To arrange JSON's data

    if ($json === false) 
    {
        // Avoid echo of empty string (which is invalid JSON), and
        // JSONify the error message instead:
        $json = json_encode(["jsonError" => json_last_error_msg()]);
        if ($json === false)
        {
            // This should not happen, but we go all the way now:
            $json = '{"jsonError":"unknown"}';
        }
        // Set HTTP response status code to: 500 - Internal Server Error
        http_response_code(500);
    }
    $db = null;
    echo $json;
    exit();
?>