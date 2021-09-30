<?php
   require 'includes/common.php';


?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<link rel="stylesheet" type="text/css" href="css/style.css">

        <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" user-scaleable=no>


	<title>E-store</title>

</head>
<body>

<?php   include 'includes/header.php';
	include 'includes/Check-if-added.php';
?>

<!-- container box--->

<div class="content">

<div  class="container-fluid">
  <div class="row text-center">
		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">FASTRACK REFLEX 2.0</div>
                <div class="panel-body">
                    <img src="image/1.jpg" alt="smart band">

           		        <p>smart band in military green with charcoal black accent<br>Rs.1,995.00</p>
           		        <?php

				if(!isset($_SESSION['email'])) 
				{ ?>
				<button type="submit" href="login.php"class="btn btn-primary btn-block">Buy Now</button>

				<?php
				}
				else
				{ 
					if(check_if_added_to_cart(1))
					{
						echo '<button type="submit" href="login.php" class="btn btn-primary btn-block" disabled>Add to cart</button>';   
					}
				    else
					{?>
						<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
					<?php
					} 

				}?>
                               
	
		     
                    
                </div>
           </div> 
          
		</div>

		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN </div>
                <div class="panel-body">
                    <img src="image/2.jpg" alt="White Dial ">
                	
				        <p>White Dial Brown Leather Strap Watch NL1585SL07<br>Rs.1,995.00</p>
				        <?php

				if(!isset($_SESSION['email'])) 
				{ ?>
				<button type="submit" href="login.php"class="btn btn-primary btn-block">Buy Now</button>

				<?php
				}
				else
				{ 
					if(check_if_added_to_cart(2))
					{
						echo '<button type="submit" href="login.php" class="btn btn-primary btn-block" disabled>Add to cart</button>';   
					}
				    else
					{?>
						<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
					<?php
					} 

				}?>
				
				                           
                </div>
          </div> 
      </div>
          
		

		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN</div>
                <div class="panel-body">
                    <img src="image/3.jpg" alt="Octane White">
                	
				        <p>Octane White Dial Stainless Steel Strap Watch NL90086KM02 Rs.8,995.00</p>
				        <?php

				if(!isset($_SESSION['email'])) 
				{ ?>
				<button type="submit" href="login.php"class="btn btn-primary btn-block">Buy Now</button>

				<?php
				}
				else
				{ 
					if(check_if_added_to_cart(3))
					{
						echo '<button type="submit" href="login.php" class="btn btn-primary btn-block" disabled>Add to cart</button>';   
					}
				    else
					{?>
						<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
					<?php
					} 

				}?>

				        
                    
                </div>
          </div> 
          
		</div>
		
				
	</div>

	<!--------------------------------next row----------------------------------------------->
	<div class="row text-center">
		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN</div>
                <div class="panel-body">
                    <img src="image/8.jpg" alt="Wrist Watch">
                	
				        <p>Wrist Watch<br>Rs.21,000.00</p>
				        <?php

				if(!isset($_SESSION['email'])) 
				{ ?>
				<button type="submit" href="login.php"class="btn btn-primary btn-block">Buy Now</button>

				<?php
				}
				else
				{ 
					if(check_if_added_to_cart(4))
					{
						echo '<button type="submit" href="login.php" class="btn btn-primary btn-block" disabled>Add to cart</button>';   
					}
				    else
					{?>
						<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
					<?php
					} 

				}?>

				
				       
                </div>
          </div> 
          
		</div>
		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN</div>
                <div class="panel-body">
                    <img src="image/5.jpg" alt="TITAN Edge ">
                	
				        <p>TITAN Edge Brown Dial Brown Leather Strap Watch NL1595WL03<br>Rs.11,495.00</p>
				        <?php

				if(!isset($_SESSION['email'])) 
				{ ?>
				<button type="submit" href="login.php"class="btn btn-primary btn-block">Buy Now</button>

				<?php
				}
				else
				{ 
					if(check_if_added_to_cart(5))
					{
						echo '<button type="submit" href="login.php" class="btn btn-primary btn-block" disabled>Add to cart</button>';   
					}
				    else
					{?>
						<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
					<?php
					} 

				}?>

				        
                  
                </div>
          </div> 
          
		</div>
		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN</div>
                <div class="panel-body">
                    <img src="image/6.jpg" alt="Voyager from Maritime">
                	
				        <p>Voyager from Maritime - Multifunction Watch with Sea wave pattern on Sea Green dial NM1829QL01<br>Rs.9,295.00</p>
				        <?php

				if(!isset($_SESSION['email'])) 
				{ ?>
				<button type="submit" href="login.php"class="btn btn-primary btn-block">Buy Now</button>

				<?php
				}
				else
				{ 
					if(check_if_added_to_cart(6))
					{
						echo '<button type="submit" href="login.php" class="btn btn-primary btn-block" disabled>Add to cart</button>';   
					}
				    else
					{?>
						<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
					<?php
					} 

				}?>


				
				        
                   
                </div>
          </div> 

		</div>
	</div>
</div>
</div>



</body>


</html>