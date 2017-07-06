<!DOCTYPE html>
<html lang="en">

<head>

<?php include("nav.php") ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Samsung 55 Inch TV</title>

</head>

<body>

   
	<div class="container">
	    <div class="row">
	        <div class="col-lg-12">
	            <div class="blackFriday">
	                <h1>Featured Offers</h1>
	            </div>
	        </div>
	    </div><!--firstcolumn-->
	    <div class="row">
	    <div class="col-lg-7">
	        <h4>Samsung - 55" Class - (54.6" Diag.) - LED - 2160p - Smart - 4K Ultra HD TV - with High Dynamic Range - Silver</h4>
	        <p><b>Model:</b> UN55KS8000FXZA  <b>SKU:</b> 5034800</p>
	        <img src="images/tv.jpg" alt="tv" /><br >
	        <div class="caption">
				<div class="col-md-3" style="padding: 20px">
					<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
			    </div>
				<input type="hidden" name="product-id" value="17" p-name="Samsung - 55 Class" p-price="549.99" p-img="images/tv.jpg"> 
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
            	<li>Samsung TM1680A remote control</li>
            	<li>Samsung UN55KS8000F</li>
            	<li>Stand</li>
            	<li>Video cable</li>
       		</ul>
    	</div>
    
		<div class="col-lg-6">
	        <h5>Product Features</h5>
	        <hr />
	        <h6>54.6" screen (measured diagonally from corner to corner) </h6>
	        <p>Large enough to provide an immersive experience for everyone in the room.</p>
	        <h6> Built-in Wi-Fi Smart TV means a huge world of entertainment</h6>
	        <p>Stream movies, music and more using Smart Hub, and surf your favorite websites with the included Web browser. S Recommendation finds the movies and TV shows you'll enjoy most.</p>
	        <h6> 2160p resolution for breathtaking HD images</h6>
	        <p>Watch 4K movies and TV shows at 4x the resolution of Full HD, and upscale your current HD content to gorgeous, Ultra HD-level picture quality.</p>
	        <h6>High dynamic range (HDR) creates a more realistic picture </h6>
	        <p>HDR technology expands the contrast and color range of the existing pixels on your TV to reveal a better, brighter, more colorful image. The picture quality is noticeably more natural.</p>
	        <h6>Motion Rate 240 </h6>
	        <p>Enjoy great motion clarity during fast-action moments.</p>
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