<?php include("nav.php") ;

	 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array; 
               $count ++;
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  







?>
<!DOCTYPE html>
<html>
<head>
	<title>Mitad Del Mundo</title>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  

</head>
<body>
  
<body>


 <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                <img src="images/LaMitadDelMundoEntrance.jpg" height="700" width="1280" alt="entrance"></div>
                <div class="carousel-caption">
                    <h2>“What we're doing here will send a giant ripple through the universe.” <br />
                     Steve Jobs</h2>
                </div>
            </div>
            <div class="item">
              <div class="fill">
                <img src="images/surfaceP4.jpg" alt="surface-4"></div>
                <div class="carousel-caption">
                    <h2>"If you cannot make it good, at least make it look good."<br />
                    Bill Gates</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                <img src="images/macPro13.jpg" alt="macComputer"></div>
                <div class="carousel-caption">
                    <h2>“Details matter, it's worth waiting to get it right.”<br /> 
                  Steve Jobs</h2>
                </div>
            </div>
            <div class="item">
              <div class="fill">
                <img src="images/iphone7.jpg" alt="surface-4"></div>
                <div class="carousel-caption">
                    <h2>"Software is agreat combination between artistry and engineering." <br />
                    Bill Gates</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" >
                <img src="images/sam1edge.jpg" alt="phone"></div>
                <div class="carousel-caption">
                    <h2>“HOME is where the heart is, but today, the PHONE is where the Heart is!!!”<br />Rachitha Cabral</h2>
                </div>
            </div>
            <div class="item">
              <div class="fill">
                <img src="images/newsurface.jpg" alt="surface-4"></div>
                <div class="carousel-caption">
                    <h2>"Consumer electronics is a challenging one"<br /> Kevin Rollins</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span></a>
</header>
<!-- Page Content -->


<h3>CART </h3>

<?php

	$sql = "SELECT * FROM images ORDER BY id ASC";
	$result = $conn->query($sql);


	if($result->num_rows > 0){


					while($row = $result->fetch_assoc()) {

?>
	<div class="col-sm-6 col-md-4">
	<form method="POST" action="index.php?action=add&id=<?php echo $row["id"]; ?>">

	<div style="border: 1px solid #333; background-color: #f1f1f1">
		<img src="<?php echo $row[""]; ?>" />
	<?php

echo '<img src="data:image/jpeg;base64,'.
      base64_encode($row['image']).
      '" width="290" height="290">'; // DECODE IMAGEEE


	 ?>
		<h4><b>Product Name: </b> <?php  echo $row["name"]; ?> </h4>
		<h4> <b>Product Price: </b><?php  echo $row["price"]; ?>  <b>$</b></h4>
		<h4> <b>Product Description: </b><?php  echo $row["description"]; ?>  </h4>
		<input type="text" name="quantity" value="1" />
		<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
		<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
		<input type="submit" name="add_to_cart" style="margin-top: 5px" class="btn btn-success" value="add to cart">
		<br><br><br>

</div>
	</form>

</div>


<?php  }}    ?>
              <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br /> 


	

<?php include("footer.php") ; ?>





    <div class="container">
	    <div class="row">
	            <!-- add to cart -->
	            <div class="cart-message">
	                <p>a product has been added to cart...</p>
	            </div>	 
	            <!-- end add to cart --> 
	
	            <!-- add to wish list -->
	            <div class="wish-message">
	                <p>a product has been added to wish list...</p>
	            </div>	 
	            <!-- end add to wish list -->           
    	</div>
    </div>



     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

	<script src="js/jquery.gritter.min.js"></script>
	<script src="js/jcart.js"></script>



    <!-- Script to Activate the Carousel -->
   		 <script>
		    $('.carousel').carousel({
		        interval: 5000 //changes the speed
		    })
   		 </script>

		<script>
		    $('a.btn').tooltip({
		        "placement" : "top"
		    });
		
		    /* === SHOW MESSAGES === */
		    $('.cart-message, .wish-message').css('display','none');
		    function showMessage(value) {
		        $.gritter.add({
		            title: ' Information',				            // (string | mandatory) the heading of the notification
		            text: $('.' + value + '-message p').text(),	    // (string | mandatory) the text inside the notification
		            time: 2000							            // (int | optional) the time you want it to be alive for before fading out (milliseconds)
		        });
		    }
		    /* === END SHOW MESSAGES === */
		</script>




</body>
</html>