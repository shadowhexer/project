<?php

    session_start ();

    if (!$_SESSION['username']) {
        header('Location: index.php'); // Redirect to Login
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<style type="text/css">
	</style>
</head>
<body>

    <h1><?php echo 'Welcome ' . $_SESSION['username']; ?></h1>

    <a href="logout.php">Logout</a>

</body>
</html>