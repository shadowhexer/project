<?php
    session_id();
    session_start();
    require 'connect.php';

    if(isset($_SESSION['url'])) 
        {$url = $_SESSION['url'];}
    else 
        {$url = "index.html";} // default page for 

    $id = bin2hex(random_bytes(10));
    //$title = $_POST['post_title'];
    //$title-image = $_POST['title_image'];
    $post = $_POST['getData'];
    $date_post = date('Y-M-d H:i:sa');
    $user = $_POST['user_id'];
    //caption = $_POST['image_caption'];

    $statement = "INSERT INTO account.post (post_id, blog_post, date_post, user_id) VALUES (:id, :title, :post, current_date, :user);";
    $stmt = $db->prepare($statement);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    //$stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':post', $post, PDO::PARAM_STR);
    $stmt->bindParam(':date_post', $date_post, PDO::PARAM_STR);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);

    $stmt->execute();
    header("Location: $url");
?>