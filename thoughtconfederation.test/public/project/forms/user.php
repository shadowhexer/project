<?php
    require 'connect.php';

    $stmt = $db->prepare("SELECT * FROM account.users WHERE user_id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();

        // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    header('Content-Type: text/html; charset=utf-8'); // This peace of shit is what took me 4 days to find out.
?>