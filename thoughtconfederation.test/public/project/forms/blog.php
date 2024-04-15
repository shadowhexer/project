<?php
    session_id();
    session_start();
    require 'connect.php';
    
    // Post query
    $posts = "SELECT p.blog_count, u.user_id, u.display_name, p.post_id, p.title_image, p.image_caption, p.post_title, p.blog_post, p.date_post FROM account.users u JOIN (SELECT COUNT(*) AS blog_count, post_id, title_image, image_caption, post_title, user_id, blog_post, date_post FROM account.post GROUP BY post_id, blog_post, date_post) p ON u.user_id = p.user_id";

    $postQuery = $db->prepare($posts);
    $postQuery->execute();
    $posts = $postQuery->fetchAll(PDO::FETCH_ASSOC);

    foreach($posts as $post)
    {
        $postID = $post['post_id'];
        
        // Comment count
        $count = "SELECT COUNT(*) AS num_comments, post_id FROM account.comment WHERE post_id = :postID GROUP BY post_id";

        $stmtCount = $db->prepare($count);
        $stmtCount->bindParam(':postID', $postID, PDO::PARAM_STR);
        $stmtCount->execute();
        $numComments = $stmtCount->fetch(PDO::FETCH_ASSOC)['num_comments'];
        $numOfComments = array('count' => $numComments);
    
        $postDisplay = array(
            'post_id' => $postID,
            'image' => $post['title_image'],
            'post_title' => $post['post_title'],
            'date_post' => $post['date_post'],
            'username' => $post['display_name'],
            'blog_count' =>$post['blog_count']
        );
    }

    /*
        $json = json_encode($postDisplay + $numOfComments, JSON_PRETTY_PRINT); // To arrange JSON's data

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
    */

    header('Content-Type: text/html; charset=utf-8;');
?>