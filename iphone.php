


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
    	<div class="col-lg-7">
	        <h4>Apple - iPhone 7 Plus 128GB - Rose Gold</h4>
	        <p><b>Model:</b> MN4C2LL/A <b>SKU: 5580441</b></p>
	        <img src="images/iPhone-6S.jpg" alt="phonecase" />
	        <div class="caption">
				<div class="col-md-6" style="padding: 20px">
					<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
		      	</div>
			  		<input type="hidden" name="product-id" value="9" p-name="Apple - iPhone 7 Plus 128GB" p-price="949.99" p-img="images/iPhone-6S.jpg"> 
			</div>  
	    </div>
	</div>

	<div class="row">
        <div class="col-lg-12">
            <div class="blackFriday">
                <h1>Overview</h1>
            </div>
        </div>
	</div>
	
	<div class="row">
    	<div class="col-lg-6">
        	<h5> What's Included</h5>
			<hr />
		        <ul>
		            <li>Apple iPhone 7 Plus 128GB</li>
		            <li>EarPods with Lightning connector</li>
		            <li>Lightning to 3.5mm headphone jack adapter</li>
		            <li>Lightning to USB cable</li>
		            <li>USB power adapter</li>
		            <li>Documentation</li>
		       </ul>
    	</div>
    
		<div class="col-lg-6">
	        <h5>Product Features</h5>
	        <hr />
	        <h6>5.5-inch (diagonal) Retina HD display with 1920-by-1080 resolution and wide color </h6>
	        <h6>3D Touch</h6>
	        <h6>New 12MP cameras with optical zoom at 2x, digital zoom up to 10x, optical image stabilization, Quad-LED True Tone flash, and Live Photos </h6>
	        <h6>Splash, water, and dust resistant¹</h6>
	        <h6> A10 Fusion chip with integrated M10 motion coprocessor</h6>
	        <h6>4K video recording at 30 fps and slo-mo video recording for 1080p at 120 fps</h6>
	        <h6>7MP FaceTime HD camera with Retina Flash</h6>
	        <h6>Touch ID fingerprint sensor built into the new Home</h6>
	        <h6>LTE Advanced² up to 450 Mbps and 802.11a/b/g/n/ac Wi-Fi with MIMO</h6>
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