<?php
    require 'connect.php';

    $posts = "SELECT u.user_id, u.display_name, u.biography, MD5(u.email) as email, p.post_id, p.title_image, p.image_caption, p.post_title, p.blog_post, p.date_post FROM account.users u JOIN (SELECT post_id, title_image, image_caption, post_title, user_id, blog_post, date_post FROM account.post GROUP BY post_id, blog_post, date_post) p ON u.user_id = p.user_id AND p.post_id = :id";

    $postQuery = $db->prepare($posts);
    $postQuery->bindParam(":id", $id, PDO::PARAM_STR);
    $postQuery->execute();
    $post = $postQuery->fetch(PDO::FETCH_ASSOC);

    // Category query
    $cat = "SELECT * FROM account.categories ca JOIN (SELECT post_id FROM account.post) p ON ca.post_id = p.post_id";
    $catQuery = $db->prepare($cat);
    $catQuery->execute();
    $category = $catQuery->fetch(PDO::FETCH_ASSOC);
    
    header('Content-Type: text/html; charset=utf-8'); // This peace of shit is what took me 4 days to find out.


    /*
    $postDisplay = array(
        'id1' => $post['post_id'],
        'image' => $post['title_image'],
        'caption' => $post['image_caption'],
        'post_title' => $post['post_title'],
        'blog_post' => $post['blog_post'],
        'date_post' => $post['date_post'],
        'username' => $post['display_name'],
        'id2' => $post['user_id'],
        'avatar' => md5($hash),
        'bio' => $post['biography']
    );
    $categories = array('categories' => $category['category'], 'url' => $category['category_url']);

    $json = json_encode($postDisplay + $categories, JSON_PRETTY_PRINT); // To arrange JSON's data

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
    } else {header('Content-Type: application/json; charset=utf-8'); }

    echo $json;
    //echo "/project/forms/post.php?post_id=$id";
    $db = null;
    //exit();
    header("Location: //thoughtconfederation.test/project/post.php");
    */
?>