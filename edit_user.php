<?php include("nav.php") ; ?>



<?php

$ID = $_GET['id'];
$username = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['role'];









$select_query  = "SELECT * FROM users WHERE id=" .$_GET['id']. "";
echo $select_query;

$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);


if(isset($_POST['submit'])) {



$sql = "UPDATE users set id = ".$ID." ,  username=".$username.",password=".$password.",role=".$role." , WHERE id=".$ID."";

    echo $sql;

	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";







?>



<?php




	# code...
}



	




//UPDATE `users` SET `id`=15 ,`username`=' dj',`password`='dj',`role`= 'Admin' WHERE id = 15



?>

<html>
<head>
<title>EDIT User</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<br><br><br><br><br><br><br><br>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="viewusers.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">

<tr class="tableheader">
<td colspan="2">Edit User</td>
</tr>

<tr>
<td><label>ID</label></td>
<td><input type="text" name="id" class="txtField" value="<?php echo $row['id']; ?>"></td>
</tr>

<tr>
<td><label>Username</label></td>
<td><input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>"></td>
</tr>

<tr>
<td><label>Password</label></td>
<td><input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>"></td>
</tr>

<tr>
<td><label>Role</label></td>
<td><input type="text" name="role" class="txtField" value="<?php echo $row['role']; ?>"></td>
</tr>



<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
<?php
if(count($_POST)>0) {
	echo "click";

}


?>



</body></html>

