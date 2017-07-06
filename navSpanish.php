
<?php session_start(); ?>
<?php require_once("functions.php"); ?>




 <!-- Navigation -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.gritter.css" rel="stylesheet">

    <!-- mycss -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/electronics.css" rel="stylesheet">

 
 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexSpanish.php">La Mitad Del Mundo</a>
            </div>
  
            <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

            <li class=""><a href="indexSpanish.php">Inicio</a></li>
            
          	 	<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Comprar Online<span class="caret"></span></a>
					
				</li>	



				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Sobre Nosotros<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Microsoft Surface</a></li>
						<li><a href="#">Samsung Galaxy</a></li>
						<li><a href="#">Apple iPad</a></li>
        			</ul>
				</li>




				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="ContactUs.php">Contacto<span class="caret"></span></a>
				</li>




				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Galeria<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="chargers.php">Chargers</a></li>
						<li><a href="phonecase.php">Phone Cases</a></li>
						<li><a href="headphone.php">Headphones</a></li>
    				</ul>
				</li>
            
             <li class="dropdown">
				<a href="index.php">English<span class="caret"></span></a>
					
				</li>



        <?php                if (loggedin() ) {

        ?>

               


                 <li>
                
                    <a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a>
                    
                </li>  
 


               






<?php     }    else {      ?> 


            
                 <li>
                
                    <a href="login.php"><span class="glyphicon glyphicon-user"></span>login</a>
                    
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
