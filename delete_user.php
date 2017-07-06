<?php
require_once("connection.php");
$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
mysqli_query($conn,$sql);
header("Location:viewusers.php");

?>