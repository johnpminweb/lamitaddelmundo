

<!DOCTYPE html>
<html lang="en">

<head>


<?php include("nav.php") ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Samsung Galaxy S7</title>

   

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
	       	<div class="col-md-6">
	           	<h4>Samsung - Galaxy S7 32GB</h4>
	           	<img src="images/galaxyS7.jpg" alt="samsung7" /> 
	           	<div class="caption">
					<div class="col-md-3" style="padding: 20px">
					  	<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
		      		</div>
			  		<input type="hidden" name="product-id" value="2" p-name="Samsung - Galaxy S7 32GB" p-price="749.99" p-img="images/galaxyS7.jpg"> 
				</div>  
	       	</div>
	    </div>

		<div class="col-md-6">
   			<h4>Features</h4>
        	<p>Model: SPHG93032GLD SKU: 4895100</p>
            <ul>
               	<li>Networks- 2G GSM - GSM900, DCS1800</li>
                <li>3G UMTS/WCDMA - B1(2100), B8(900)</li>
                <li>Battery - 300mAh / OS - Tizen / Network - 3G, Wi-Fi / Sensor - Acceleration, HRM, UV, Altimeter</li>
                <li>Compatible mode - Samsung Galaxy Smartphone with RAM 1GB+, Android 4.3+, Bluetooth 4.0+ S3, S4, S5, Note2, Note3, Note4, etc</li>
                <li>Display - 50.9mm Curved S AMOLED 360 x 480 / CPU - 1.0GHz Dual Core / Memory - 512MB RAM, 4GB / Audio - Codec MP3 ,AAC,AAC+,eAAC+ / Format MP3, M4A, WMA, AAC, OGG</li>
			</ul>
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