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



	 

<div class="container content">
    <div class="row">
        <div class="col-xs-10 col-md-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours|  7 days a week | 365 days a year Live Technical Support</h3>
          <div>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
      </div>
        <div class="col-xs-2 col-md-2">
         <img src="image/contact.png" alt="contact us" >
        </div>
    </div>
    <br>
    

<div class="row">
    <div class="col-xs-12 col-md-8 con_form">
       
            <h2>CONTACT US</h2>
	           

                <form method="POST" action="contact_script.php">
				    
                    <label>Name:</label>
                    <div class="form-group">
   				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
				     <label>Email:</label>
                    <div class="form-group">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>

				     <label>Message:</label>
                    <div class="form-group">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        
    </div>
	    		
        <div class="col-xs-12 col-md-4 con_info">
           <h2>Company Information:</h2>
	               <address>
				    <p>500 Lorem Ipsum Dolar Sit,</p>
				    <p>22-56-3-5 Sit Amet, Lorem,</p>
				    <p>USA</p>
				    <p>Phone:(00) 222 555 3333</p>
				    <p>Fax:(000) 222 55 33 6</p>
				    <p>Email: info@estore.com</p>
				    <p>Follow Us On:Facebook,Twitter</p>
	               </address>
	                           
            
        </div>
    </div>
</div>


</body>


<?php include "includes/footer.php";
?>

</html>