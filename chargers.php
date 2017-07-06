<!DOCTYPE html>
<html lang="en">

<head>


<?php include("nav.php") ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HP Laptop Computers</title>

  
</head>

<body>
  

<main>
	<div class="container" style="padding-top: 50px">
	    <div class="row">
	        <div class="col-lg-12">
	            <div class="blackFriday">
                <h1>Overview</h1>
            </div>
        </div>
    </div><!--firstcolumn-->
    <div class="row">
    	<div class="col-lg-7">
        	<h4>Targus - USB Type-C Universal Charger - Black</h4>
        	<p><b>Model:</b> APA93US  <b>SKU:</b> 5009600</p>
        	<img src="images/chargers.jpg" alt="chargers" /><br />
        	<div class="caption">
				<div class="col-md-3">
					<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
		      	</div>
			  	<input type="hidden" name="product-id" value="12" p-name="USB Type-C Universal Charger" p-price="49.99" p-img="images/chargers.jpg"> 
			</div>
    	</div>
	</div>

	<div class="row">
        <div class="col-lg-12">
            <div class="blackFriday">
                <h1>Featured Offers</h1>
            </div>
        </div>

	<div class="row">
    	<div class="col-lg-6">
        	<h5> What's Included</h5><hr />
 	        <ul>
	            <li> urBeats Earbud Headphones</li>
	            <li>In-line remote and microphone</li>
	            <li> 4 pairs of ear tip fittings, storage pouch</li>
	            <li> Owner's manual</li>
       		</ul>
    	</div>
    	
		<div class="col-lg-6">
	        <h5>Product Features</h5>
	        <hr />
	        <h6> User-friendly USB Type-C connector</h6>
	        <p>Charges and powers Apple MacBook, Google Chromebook Pixel and other compatible laptops.</p>
	        <h6>Slim and portable</h6>
	        <p>Use it as a smart alternative to bulky power bricks when you travel or commute, or as a spare charger for home or office.</p>
	        <h6>Fold-away prongs and integrated cable</h6>
	        <p>It’s easy to slip in your bag and easy to use.</p>
	        <h6>Integrated cable clip</h6>
	        <p>For easy cable management.</p>
	        <h6>45 Watt charger</h6>
	        <p>Supports 5V, 12V, and 20V devices up to 3 Amps.</p>
	        <h6>Built-in surge protector</h6>
	        <p>Safeguards your device.</p>
		</div>
	</div>
</main>

<footer>
    <div class="footer">
        <footer>
            <p>Copyright &copy; MN-Electronics 2016</p>
    	</footer>
    </div>

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
</footer>

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
