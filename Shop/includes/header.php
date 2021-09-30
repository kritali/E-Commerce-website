<?php 
	include "common.php";
	include "includes/modal.php";
?>

<nav class="navbar navbar-default navbar-fixed-top">
	 	<div class="container">
	 	    <div class="navbar-header">
	 	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	 	    		<span class="icon-bar"></span>
	 	    		<span class="icon-bar"></span>
	 	    		<span class="icon-bar"></span>	 	    		
	 	    	</button>
			<?php 
				if(isset($_SESSION['email']))
					{  
                        $maill=$_SESSION['email'];
				        $query = "SELECT name FROM users WHERE email='$maill'";
 					    $maill_fetch = mysqli_query($con, $query)or die($mysqli_error($con));
  					    $mail_name= mysqli_fetch_array($maill_fetch);
					?>
			<a href="index.php" class="navbar-brand"><?php echo "Hello,".$mail_name['name']; ?></a>  <?php }

				else{   ?>


	 	    	<a href="index.php" class="navbar-brand">E-Store</a>   <?php }  ?>

	 	    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    	<ul class="nav navbar-nav navbar-right">
                             
                          <?php                 
		              if (isset($_SESSION['email'])) {                     
		       	    ?> 
                            <li><a href = "cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>                    
                            <li><a href = "settings.php"><span class="	glyphicon glyphicon-cog"></span> Settings</a></li>                     
                             <li><a href = "logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

                            <?php 

                              }  
                                else{
                              ?>

		    		<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		    		<li><a data-toggle="modal" data-target="#login_modal" href="#login_modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    		<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
		    		<li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>

                              <?php } ?>

		    	</ul>
		    </div>
	 	</div>
	 </nav>

<!----NAV BAR ends-
$mail_name['name'] ----->