<!DOCTYPE html>
<html lang="en">

<head>


<?php include("nav.php") ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HTC Phone</title>

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
	    	<div class="col-lg-12" style="align: center">
	        	<h4>HTC Desire 626s with 8GB Memory Prepaid Cell Phone - White</h4>
				<p><b>  SKU:</b>  4353100</p>
				<img src="images/htc-one.jpg" alt="phonecase" />
				<div class="caption">
					<div class="col-md-3" style="padding: 20px">
					  	<a href="#" class="btn btn-success btn-product cart" role="button" title="add to cart"><i class="glyphicon glyphicon-shopping-cart"></i>Buy</a>
		      		</div>
			  		<input type="hidden" name="product-id" value="1" p-name="HTC Desire 626s 8GB" p-price="549.99" p-img="images/htc-one.jpg"> 
				</div>
	    	</div>
	    </div><!--5column-->
	 
		<div class="row">
	        <div class="col-lg-12">
	            <div class="blackFriday">
	               		<h1>Overview</h1>
	            </div>
	        </div>
		</div>

		<div class="row">
	  		<div class="col-lg-6">
	    		<h5> What's Included</h5><hr />
	        	<ul>
			        <li> Charger</li>
			        <li>HTC Desire 626s with 8GB Memory Cell Phone</li>
			        <li>Lithium-ion polymer battery</li>
			        <li>Owner's manual</li>
				</ul>
	   		</div> 
	   		
			<div class="col-lg-6">
			        <h5>Product Features</h5>
			        <hr />
			        <h6>Qualcomm processor</h6>
			        <p>1.1GHz processor and 1GB of RAM provide ideal performance for running home screens, flipping through menus, opening applications and other tasks.</p>
			        <h6>Android 5.1 Lollipop OS</h6>
			        <p>New colors and typography, new ways to control when and how you receive messages, and new security features, including Android Smart Lock which secures your phone by pairing it with a trusted smartwatch or other device</p>
			        <h6>5" TFT-LCD touch screen</h6>
			        <p>720p resolution for easy navigation and clear viewing of texts, images and videos.</p>
			        <h6>8.0MP rear-facing and 2.0MP front-facing cameras</h6>
			        <p>Enable snapshots of special moments and make it easy to take selfies.</p>
			        <h6>8GB internal memory</h6>
			        <p>Gives you ample storage space for contacts, music, photos and other content.</p>
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