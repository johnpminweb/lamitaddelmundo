
<?php session_start(); ?>
<?php require_once("functions.php"); ?>




 <!-- Navigation -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.gritter.css" rel="stylesheet">

    <!-- mycss -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/electronics.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>

 
 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="font: 200 100px/1.3 'Arizonia', Helvetica, san-serif; margin-bottom: 55px;"><h1>La Mitad Del Mundo <br/> Bar & Restaurant</h1></a>
                
                
            </div>
            
            
  
            <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

            <li class=""><a href="index.php">Home</a></li>
            
            <li style="border-left: 1px #fff solid; height:30px; margin-top:10px; opacity: .5" > </li>
            
          	 	<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Order Online<span class="caret"></span></a>
					
				</li>	
                
            <li style="border-left: 1px #fff solid; height:30px; margin-top:10px; opacity: .5" > </li>

				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Microsoft Surface</a></li>
						<li><a href="#">Samsung Galaxy</a></li>
						<li><a href="#">Apple iPad</a></li>
        			</ul>
				</li>

                    <li style="border-left: 1px #fff solid; height:30px; margin-top:10px; opacity: .5" > </li>


				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="ContactUs.php">Contact Us<span class="caret"></span></a>
				</li>


                       <li style="border-left: 1px #fff solid; height:30px; margin-top:10px; opacity: .5" > </li>

				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="chargers.php">Chargers</a></li>
						<li><a href="phonecase.php">Phone Cases</a></li>
						<li><a href="headphone.php">Headphones</a></li>
    				</ul>
				</li>
            
                    <li style="border-left: 1px #fff solid; height:30px; margin-top:10px; opacity: .5" > </li>
            
            <li class="dropdown">
				<a href="indexSpanish.php">Español<span class="caret"></span></a>
					
				</li>



        <?php                if (loggedin() ) {

        ?>

               


                 <li>
                
                    <a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a>
                    
                </li>  
 


               






<?php     }    else {      ?> 


            
                 <li>
                
                    <a href="login.php"><span class="glyphicon glyphicon-user"></span>Login</a>
                    
                </li>  
                
                 <li>
                
                    <a href="register.php"><span class="glyphicon glyphicon-user"></span>Register</a>
                    
                </li>  
    
    
    



<?php   }  ?>

<?php  if(getUser_value("role") == "Admin"){ ?>



                 <li>
                
                    <a href="admin.php"><span class="glyphicon glyphicon-user"></span>Admin Panel</a>
                    
                </li>  

<?php 

    }
?>


   	
		</ul>
    
    <div id="navCart" class="pull-right">
      
    </div>
       
    <div class="btn-group">
        <a href="cart.php" class="btn btn-checkout"><i class="fa fa-check"></i> CART </a>
    </div>
</div>
</div>
</div>
</nav>
