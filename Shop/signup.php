<?php
   require 'includes/common.php';

   include "includes/modal.php";

   if (isset($_SESSION['email'])) 
{   
header('location: homepage.php'); 
} 

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | E-Store.com</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="css/style.css">

        <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" user-scaleable=no>

</head>

<body>

   <?php include "includes/header.php";
?>

<!----NAV BAR ends---------->

   

    <div class="container content">
        <div class="row">
            <div class="col-md-8">
               <img src="image/sign-img1.jpg" class="signup_img">
            </div>

            <div class="col-md-4">

                <h2>SIGN UP</h2>

                    <form method="POST" action="signup_script.php">

                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                        </div>

                        <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                           <?php
              		  if(isset($_GET["m1"])){
             		    echo $_GET['m1'];
          		        }
          		  ?>       
                        </div>

                        <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control" pattern=".{6,}"  required>
                        </div>

                        <div class="form-group">
                                <input type="text" name="contact" id="contact" placeholder="Contact" maxlength="10" size="10" class="form-control"  required>
                           
	     		  <?php
              			  if(isset($_GET["m2"])){
             			  echo $_GET['m2'];
            			     }
            			?>

	    
                        </div>

                        <div class="form-group">
                                <input  type="text" name="city" id="city" placeholder="City" class="form-control">
                        </div>

                        <div class="form-group">
                                <input  type="text" name="address" id="address"class="form-control"  placeholder="Address"  >
                        </div>

                        <div class="form-group" align="right">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  

                        <div align="right">
                                  Already have an account ?<a data-toggle="modal" data-target="#login_modal" href="#login_modal"> Login</a>
                        </div>

                </form>
        </div>
    </div>
    </div>
    <br>
    <br>

      
    </body>

 
<?php include "includes/footer.php";
?>

</html>
