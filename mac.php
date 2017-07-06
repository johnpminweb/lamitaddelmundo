<!DOCTYPE html>
<html lang="en">


<head>

<?php include("nav.php") ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apple Macbook Pro</title>


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
	        	<h4>Apple - MacBook Pro® with Touch Bar - 15" Display</h4>
				<p><b>  SKU:</b>  4260600</p>
				<img src="images/maclaptop.jpg" alt="phonecase" />
				<div class="caption">
					<div class="col-md-3">
					  	<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
		      		</div>
			  		<input type="hidden" name="product-id" value="4" p-name="Apple Macbook Pro" p-price="2549.99" p-img="images/maclaptop.jpg"> 
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
		        <h5> What's Included</h5>
		        <hr />
		         <ul>
		            <li>Titanium Internet Security - 3-Device - 6 Months Subscription - Android/iOS - Mac/Windows [Download]</li>
		            <p>Software to protect up to three devices - any combination of PCs, Macs and Android, iOS and Windows tablets and mobile phones that defends against viruses, malware, phishing attacks and other online threats. Includes identity protection and parental controls.
		            BestBuy.com account required. Download instructions are usually e-mailed within 30 min.</p>
		
		
		            <li>87W USB-C Power Adapter</li>
		            <li>MacBook Pro® with Touch Bar (Latest Model) - 15" Display - Intel Core i7 - 8 GB Memory - 512GB Flash Storage</li>
		            <li>USB-C Charge Cable (2 m)</li>
		       </ul>
		    </div>
	    
		<div class="col-lg-6">
		        <h5>Product Features</h5>
		        <hr />
		        <h6>Touch Bar </h6>
		        <h6>Touch ID</h6>
		        <h6>Brilliant Retina display</h6>
		        <h6>Quad-core Intel Core i7</h6>
		        <h6>Radeon Pro 455 Graphics</h6>
		        <h6>Ultrafast SSD</h6>
		        <h6>Four Thunderbolt 3 ports</h6>
		        <h6>Up to 10 hours of battery life²</h6>
		        <h6>802.11ac Wi-Fi</h6>
		        <h6>Force Touch trackpad</h6>
		        <h6>Available in space gray and silver</h6>
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
	<script src="js/localstorage-jcart.js"></script>

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
