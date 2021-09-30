


<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3>LOGIN
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h3>
      </div>
      <div class="modal-body">
      	<div>Don't have an account?<a href="signup.php"> Register</a></div><br>

      	<form method="POST" action="login_submit.php"> 
          	<div class="form-group">
             <input type="text" name="email" id="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
             <input type="Password" name="password" id="password" placeholder="Password" class="form-control">
            </div>

		 <div><b class="red">
	      	<?php
             if(isset($_GET["error"])){
                          echo $_GET['error'];
              }
                        ?>
           
              </b></div>
              <br>  
   		<button type="submit" class="button btn btn-primary" value="registration_submit">Login</button>
      	</form><br>


      	
      	<div><a href="#">Forgot Password?</a></div>       
      </div>
     </div>
  </div>
</div>