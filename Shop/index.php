<?php
   require "includes/common.php";

if (isset($_SESSION['email'])) 
{  
   header('location: homepage.php'); 
} 

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

<?php include "includes/header.php";
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
				        <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                    
                </div>
          </div> 
          
		</div>

		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN </div>
                <div class="panel-body">
                    <img src="image/2.jpg" alt="White Dial Brown Watch " >
                	
				        <p>White Dial Brown Leather Strap Watch NL1585SL07<br>Rs.1,995.00</p>
				        <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                   
                </div>
          </div> 
          
		</div>

		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN</div>
                <div class="panel-body">
                    <img src="image/3.jpg" alt="Octane White Dial">
                	
				        <p>Octane White Dial Stainless Steel Strap Watch NL90086KM02 Rs.8,995.00</p>
				        <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                    
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
				        <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                  
                </div>
          </div> 
          
		</div>
		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN</div>
                <div class="panel-body">
                    <img src="image/5.jpg" alt="TITAN Edge ">
                	
				        <p>TITAN Edge Brown Dial Brown Leather Strap Watch NL1595WL03<br>Rs.11,495.00</p>
				        <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                  
                </div>
          </div> 
          
		</div>
		<div class="col-md-4 col-sm-6">
			
		  <div class="panel panel-default">
              <div class="panel-heading">TITAN</div>
                <div class="panel-body">
                    <img src="image/6.jpg" alt="Voyager from Maritime">
                	
				        <p>Voyager from Maritime - Multifunction Watch with Sea wave pattern on Sea Green dial NM1829QL01<br>Rs.9,295.00</p>
				        <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                   
                </div>
          </div> 

		</div>
	</div>
</div>
</div>



</body>

<?php include "includes/footer.php";
?>

</html>