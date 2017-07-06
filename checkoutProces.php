<?php session_start(); ?>
<?php

if (isset($_POST['submit'])) {
    
	echo "Your Information";
		$firstname = $_POST['firstname'];
		$address = $_POST['address'];
		$zip = $_POST['zip'];
		$city = $_POST['city'];
		$email = $_POST['email'];





}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<table border="1px">

<th colspan="2">Shipping Info</th>

<tr>
	<td><b>Your Name:</b></td>
	<td> <?php echo $firstname ?></td>

</tr>
<tr>
	<td>Your address:</td>
	<td> <?php echo $address ?></td>

</tr>
<tr>
	<td>Your City:</td>
	<td> <?php echo $city ?></td>

</tr>
<tr>
	<td>Your Zip Code:</td>
	<td> <?php echo $zip ?></td>

</tr>
<tr>
	<td>Your Email:</td>
	<td> <?php echo $email ?></td>

</tr>

</table>
<br><br><br><br>

<?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  

                               	    ?> 

                               	    <table border="1px" align="center">
                               	    <th colspan="2"><b>Your Cart</b></th>
                               	    	

                               	    	<tr>
                               	    	<td><b>Product Name:</b></td>
                               	    	<td><?php echo $values["item_name"]; ?></td>
                               	    		

                               	    	</tr>
                               	    	<tr>
                               	    	<td><b>Quantity:</b></td>
                               	    	<td><?php echo $values["item_quantity"]; ?></b></td>
                               	    		

                               	    	</tr>
                               	    	<tr>
                               	    	<td><b>Price:</b></td>
                               	    	<td><?php echo $values["item_price"]; ?></td>
                               	    		

                               	    	</tr>
                               	    	<tr>
                               	    	<td><b>Item Total:</b></td>
                               	    	<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                               	    		

                               	    	</tr> <br><br>
                               	    	<?php    $total = $total + ($values["item_quantity"] * $values["item_price"]); ?>
                               	    	 <td align="right">$ <?php echo number_format($total, 2); ?></td> 




</table>

                               	    <?php  } }?>




</body>
</html>