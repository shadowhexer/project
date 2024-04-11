<?php

	$user = "postgres"; 
	$pass = "masterkey"; 

	$db = new PDO('pgsql:dbname=php host=localhost', $user, $pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>