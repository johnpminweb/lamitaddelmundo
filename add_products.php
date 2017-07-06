<?php require_once("nav.php"); ?>



<html>
<head>
<title>Add New Product</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<br><br><br>
<form name="frmUser" method="post" action="" enctype="multipart/form-data">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="productindex.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Products</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New Product</td>
<?php   echo $sql; ?>
</tr>
<tr>
<td><label>ID</label></td>
<td><input type="text" name="id" class="txtField"></td>
</tr>
<tr>
<td><label>Product Name</label></td>
<td><input type="text" name="productName" class="txtField"></td>
</tr>
<tr>
<td><label>Product image</label></td>
<input name="MAX_FILE_SIZE" value="102400" type="hidden">
<td><input name="image" accept="image/jpeg" type="file"></td>
</tr>
<tr>
<td><label>price</label></td>
<td><input type="text" name="price" class="txtField"></td>
</tr>
<tr>
<td><label>Description</label></td>
<td><input type="text" name="description" class="txtField"></td>
</tr>



<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>





<?php
if(count($_POST)>0) {

	 if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) { 

	// Temporary file name stored on the server
        $tmpName  = $_FILES['image']['tmp_name'];  
        // Read the file 
        $fp      = fopen($tmpName, 'r');
        $data = fread($fp, filesize($tmpName));
        $data = addslashes($data);
        fclose($fp);
	
	

$sql = "INSERT INTO images (id , name , price , productDescription ,  image) VALUES ('" . $_POST["id"] . "','" . $_POST["productName"] . "','" . $_POST["price"] . "','" . $_POST["description"] . "', '$data')";


echo $sql;

$result = $conn->query($sql);
	
	


	//$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Product Added Successfully";
	}
}} 

?>