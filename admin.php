<?php require_once("functions.php"); ?>
	<?php include("nav.php"); ?>


<html>
<head>
<title>Account - Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

	$sql = "SELECT count(id) as total from users";
	$sql2 = "SELECT count(id) as total from images";
	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);
	$values2 = $result2->fetch_assoc();
	$values = $result->fetch_assoc();
$num_rows = $values['total'];
$num_rows2 = $values2['total']
	

?>
	
	

	<?php

		if(!loggedIn() || getUser_value(role) != "Admin"){
			header("location: index.php");



		} 


	?>
	<br><br><br>

	<h3 align="center">Welcome to Admin Panel</h3>

	<h4>Total numbers of users = <?php echo $num_rows; ?> </h4>
	<h4>Total numbers of Products = <?php echo $num_rows2; ?> </h4>

	

	

	 <table border="1" align="center">
   <tr>
    <th>users</th>
    <th>products</th>
   </tr>
   <tr>
    <td><a href="viewusers.php">View User Informtion</a> </td>
    <td><a href="productindex.php">View Product Information</a></td>
   </tr>
   <tr>
    <td><a href="add_user.php">Add User </a></td>
    <td><a href="add_products.php">Add Products </a></td>
   </tr>
  </table>



<!--  -->




</body>
</html>