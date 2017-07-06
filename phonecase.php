<!DOCTYPE html>
<html lang="en">

<head>


<?php include("nav.php") ?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>S-View Flip Cover for Samsung Galaxy S 5</title>

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
	    <div class="col-lg-7">
	        <h4>Samsung - S-View Flip Cover for Samsung Galaxy S 5 Cell Phones - Black</h4>
	        <p><b>model: SAM S-VIEW, BLACK GS5  SKU: 5301158</b></p>
	        <img src="images/cases.jpg" alt="phonecase" />
	        <div class="caption">
				<div class="col-md-6" style="padding: 20px">
					<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
			    </div>
				<input type="hidden" name="product-id" value="10" p-name="S-View Flip Cover for Samsung Galaxy S" p-price="49.99" p-img="images/cases.jpg"> 
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
            	<li> Owner's manual</li>
            	<li>Samsung S-View Flip Cover</li>
        	</ul>
    	</div>
    
		<div class="col-lg-6">
	        <h5>Product Features</h5>
	        <hr />
	        <h6> Compatible with Samsung Galaxy S 5 cell phones</h6>
	        <p>For a proper fit. The back of the cover snaps on, replacing your phone's standard battery cover for minimized bulk.</p>
	        <h6>Polyurethane and polycarbonate materials</h6>
	        <p>Provide durable protection against damage to help keep your phone safe on the go. Back-cover rubber sealant maintains your phone's water-resistant properties</p>
	        <h6>Folio design</h6>
	        <p>Safeguards your device's screen when not in use and easily flips open for full screen access.</p>
	        <h6>S-View display window</h6>
	        <p>Offers instant access to your phone's critical features, allowing you to view date, time, walking mate and weather information and accept or reject incoming calls by simply swiping between menus.</p>
	        <h6>S-View interface</h6>
	        <p>Provides shortcuts, including quick access to your device's camera, so you can easily snap photos using the S-View window as your viewfinder without having to open the cover.</p>
	        <h6>Notification menu</h6>
	        <p>Shows recent phone activity, such as missed calls and MMS/SMS.</p>
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