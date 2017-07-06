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
                <h1>Featured Offers</h1>
            </div>
        </div>
    </div><!--firstcolumn-->
    <div class="row">
    	<div class="col-lg-6">
			<h4>Beats by Dr. Dre - urBeats Earbud Headphones - Red/Black</h4>
			<img src="images/headphone.jpg" alt="note7laptop" />
			<div class="caption">
				<div class="col-md-6" style="padding: 20px">
					<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
		      	</div>
			  	<input type="hidden" name="product-id" value="9" p-name="Beats by Dr. Dre" p-price="949.99" p-img="images/headphone.jpg"> 
			</div>  
    	</div>
	</div>

	<div class="row">
        <div class="col-lg-12">
            <div class="blackFriday">
                <h1>Overview</h1>
            </div>
        </div>

    <div class="row">
        <div class="col-lg-6">
	        <h5> What's Included</h5>
	        <hr />
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
	        <h6> Earbud design</h6>
	        <p>Directs sound into the ear for deep bass and extended frequency response.</p>
	        <h6>High-quality drivers</h6>
	        <p>Deliver thunderous bass, crisp highs and clear midrange tones.</p>
	        <h6>Sealed construction</h6>
	        <p>With multiple sets of ear tips ensures a precise fit to block out external noise.</p>
	        <h6>In-line remote and microphone</h6>
	        <p>Allows you to talk hands-free and control music with your compatible Apple® iPhone®, iPad® or iPod®. Also works with online voice and video chats on iPod touch and iPhone.</p>
	        <h6>Hard chrome earphone finishes</h6>
	        <p>Create a durable, stylish design.</p>
	        <h6>Precision-machined single-billet metal housing</h6>
	        <p>elps prevent vibrations and sonic artifacts.</p>
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