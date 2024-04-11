<?php

    include 'connection.php';

    session_start();

    // PHP CODE TO INSERT DATA

    if ($db) {

        $a = 'kpanase'; // USERNAME
        $b = 'password'; // PASSWORD

        $stmt = $db->prepare("SELECT * FROM students WHERE username = :a AND password_ = MD5(:b)");
        $stmt->bindParam(':a', $a);
        $stmt->bindParam(':b', $b);
        $stmt->execute();

        $datas = [];

        while($row = $stmt->fetchAll()){
            
            $datas = $row;

        }

        $_SESSION['username'] = $datas[0]['username'];

        echo json_encode($datas);
    
    }

    header('Location: main.php');

?>