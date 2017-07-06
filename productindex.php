<?php include("nav.php") ; ?>

<?php





	
$sql = "SELECT * FROM images  ";
$result = mysqli_query($conn,$sql);
?>




<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<br><br><br>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="add_products.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add Product</a></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td>ID</td>
<td>Product Name</td>
<td>Product Price</td>
<td>product Desc</td>

<td>Options</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["productName"]; ?></td>
<td><?php echo $row["productPrice"]; ?></td>
<td><?php echo $row["productDescription"]; ?></td>



<td><a href="edit_user.php?id=<?php echo $row["id"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_products.php?id=<?php echo $row["id"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
</body></html>