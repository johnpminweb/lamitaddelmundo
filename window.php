<?php include("nav.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Windows Laptop Computers</title>

 
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
			<h4>Samsung - Notebook 7 Spin 2-in-1 15.6" Laptop - Intel Core i7 - 12GB Memory - NVIDIA GeForce 940MX - 1TB Hard Drive - Platinum silver</h4>
			<p><b>Model:</b>NP740U5L-Y02US   SKU: 5339101</p>
			<img src="images/samsung-notebook-7laptop.jpg" alt="note7laptop" />
    		</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12"
				<p>Satisfy your entertainment needs with this Samsung Notebook 7 Spin laptop. Watch HD movies and play 3-D games in video HDR mode for detail and texture that enhance your viewing experience. The NVIDIA GeForce 940MX graphics of this 15.6-inch Notebook 7 Spin laptop makes gaming and streaming movies more efficient without compromise.</p>
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
