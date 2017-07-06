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
	    	<div class="col-lg-12" style="align: center">
	        	<h4>HP - Spectre x360 2-in-1 15.6" 4K Ultra HD Touch-Screen Laptop</h4>
				<p><b>  SKU:</b>  4864800</p>
				<img src="images/SPECTRE.jpg" alt="phonecase" />
				<div class="caption">
					<div class="col-md-3">
					  	<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
		      		</div>
			  		<input type="hidden" name="product-id" value="5" p-name="HP Laptop Computer" p-price="1549.99" p-img="images/SPECTRE.jpg"> 
				</div>
	    	</div>
	    </div>
        
	<!--5column-->
	<div class="row">
        <div class="col-lg-12">
            <div class="blackFriday">
                <h1>Overview</h1>
            </div>
        </div>
  	</div>
	<div class="row">
	  	<div class="col-lg-6">
	    	<h5>What's Included</h5><hr />
	        <ul>
				<li>Spectre x360 2-in-1 15.6" 4K Ultra HD Touch-Screen Laptop - Intel Core i7 - 16GB Memory - 256GB Solid State Drive</li>
				<li>3-cell lithium-ion polymer battery</li>
				<li>HTC Desire 626 4G LTE with 8GB Memory Cell Phone (Unlocked)</li>
				<li>AC adapter</li>
				<li>Owner's manual</li>
     		</ul>
	    </div>
	    
		<div class="col-lg-6">
		        <h5>Product Features</h5>
		        <hr />
		        <h6> Windows 10 operating system</h6>
		        <p>Windows 10 brings back the Start Menu from Windows 7 and introduces new features, like the Edge Web browser that lets you markup Web pages on your screen.</p>
		        <h6>15.6" 4K Ultra HD touch screen for hands-on control</h6>
		        <p>3840 x 2160 resolution boasts impressive color and clarity. IPS technology for wide viewing angles. Energy-efficient WLED backlight.</p>
		        <h6>6th Gen Intel® Core™ i7-6500U mobile processor</h6>
		        <p>Ultra-low-voltage platform. Dual-core, four-way processing provides maximum high-efficiency power to go. Intel Turbo Boost Technology delivers dynamic extra power when you need it.</p>
		        <h6>16GB system memory for intense multitasking and gaming</h6>
		        <p>Reams of high-bandwidth LPDDR3 RAM to smoothly run your graphics-heavy PC games and video-editing applications, as well as numerous programs and browser tabs all at once.</p>
		        <h6>256GB solid state drive (SSD)</h6>
		        <p>While offering less storage space than a hard drive, a flash-based SSD has no moving parts, resulting in faster start-up times and data access, no noise, and reduced heat production and power draw on the battery.</p>
		        <h6>360° flip-and-fold design</h6>
		        <p>Allows versatile use as a tablet or laptop, as well as easy hands-free viewing.</p>
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
