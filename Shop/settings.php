<?php
   require 'includes/common.php';


if (!isset($_SESSION['email']))
 {
    header('location: index.php');
}
?>
<!DOCTYPE html>

<head>
    <title>Settings | Life Style Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

      <link rel="stylesheet" type="text/css" href="css/style.css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" user-scaleable=no>
</head>
<body>

<?php include 'includes/header.php'; ?>

	
	<div class="container casebox">
		<div class=" col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
		
    	<h3>Change Password</h3>
       	<form method="POST" action="settings_scriptt.php">
	      <div class="form-group">
	           <input type="password" name="old_password" id="old_password" pattern=".{6,}" placeholder="old password" class="form-control" required>
	      </div>
	      <div class="form-group">
	      	<input type="password" name="new_password" id="new_password" pattern=".{6,}" placeholder="new password" class="form-control" required>
	      </div>
	      <div class="form-group">
	      	<input type="password" name="re-new_password" id="re-new_password"pattern=".{6,}" placeholder="Re-type new Password" class="form-control" required>
	      </div> 

	      <div><b class="red">
	      	<?php
             if(isset($_GET["error"])){
                          echo $_GET['error'];
              }
                        ?>
           
              </b></div>
              <br>  

              <button type="submit" class="btn btn-primary">Change</button>  
	      </form>
	  </div>

	</div>

<?php include("includes/footer.php");
        ?>

	
</body></html>








