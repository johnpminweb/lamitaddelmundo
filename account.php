<html>
<head>
<title>Account - Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<?php require_once("functions.php"); ?>
	<?php include("nav.php"); ?>

	<?php

		if(!loggedIn()){
			header("location: login.php");
		}



	?>


	<br><br><br>

	<h3> <?php echo "Welcome Back"; ?></h3>
	<h3><?php echo getUser_value("username"); ?></h3>

</body>
</html>