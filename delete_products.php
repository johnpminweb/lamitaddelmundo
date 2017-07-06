<?php
require_once("connection.php");
$sql = "DELETE FROM images WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn,$sql);
header("Location:productindex.php");

?>