<html>
<head>


<?php require_once("functions.php"); ?>
	<?php include("nav.php"); ?>



	<?php

		if(loggedIn()){
			header("location: account.php");
		}

	?>


<title>Login - Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	

	

	<h3>Login Account</h3>


	<?php

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$username = $_POST["username"];
			$password = $_POST["password"];

			if(empty($username) || empty($password)){

				$error = "Fields Were Empty.";

			} else {

				$sql = "SELECT id FROM users WHERE username='$username' AND password='$password'";

				$result = $conn->query($sql);

				if($result->num_rows == 1){


					$row = $result->fetch_assoc();

					

					$user_id = $row['id'];
					$_SESSION['user_id'] = $user_id;

					$error = "You Can Login";


					header("location: account.php");

					

				} else {

					$error = "Username or Password Incorrect.";

				}

			}

			echo "<p>$error</p>";

		}

		?>

		
	<form method="POST">





		Username : <br/>
		<input type="text" name="username" />
		<br/><br/>

		Password : <br/>
		<input type="password" name="password" />
		<br/><br/>

		<input type="submit" value="Login" />
	</form>

</body>
</html>