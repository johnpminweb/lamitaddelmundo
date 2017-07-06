<?php require_once("nav.php"); ?>


<?php
if(count($_POST)>0) {
	
	

$sql = "INSERT INTO users (id , username , password , role) VALUES ('" . $_POST["id"] . "','" . $_POST["username"] . "','" . $_POST["password"] . "','" . $_POST["role"] . "')";




$result = $conn->query($sql);
	
	


	//$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<br><br><br>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="viewusers.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New User</td>
<?php   echo $sql; ?>
</tr>
<tr>
<td><label>ID</label></td>
<td><input type="text" name="id" class="txtField"></td>
</tr>
<tr>
<td><label>Username</label></td>
<td><input type="text" name="username" class="txtField"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="text" name="password" class="txtField"></td>
</tr>
<tr>
<td><label>Role</label></td>
<td><input type="text" name="role" class="txtField"></td>
</tr>



<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>