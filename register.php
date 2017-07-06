<html>
<head>
<title>Create Account - Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<?php require_once("functions.php"); ?>
	<?php include("nav.php"); ?>

	<?php

		if(loggedIn()){
			header("location: account.php");
		}

	?>

	<h3>Create A New Account</h3>

	<form method="POST">

	<?php

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$username = $_POST["username"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm_password"];

			if(empty($username) || empty($password) || empty($confirm_password)){

				$error = "Fields Were Empty.";

			} else {

				$sql = "INSERT INTO users VALUES('', '$username', '$password', 'User')";

				if($conn->query($sql) === TRUE){

					$error = "User Created";
				} else {

					$error = "Error in creating Account. Please Contact Admin About THis.";

				}

			}

			echo "<p>$error</p>";

		}

	?>

		Username : <br/>
		<input type="text" name="username" />
		<br/><br/>

		Password : <br/>
		<input type="password" name="password" />
		<br/><br/>

		Confirm Password : <br/>
		<input type="password" name="confirm_password" />
		<br/><br/>

		<input type="submit" value="Create Account " />
	</form>

</body>
</html>