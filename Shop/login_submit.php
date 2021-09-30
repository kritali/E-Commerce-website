<?php
  require "includes/common.php";
	include "includes/modal.php";

$email = mysqli_real_escape_string($con, $_POST['email']);

$password = mysqli_real_escape_string($con, ($_POST['password']));
$password = MD5($password);

$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);



// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = $_GET['error'];
  $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
  header('location: index.php?error=' . $error);




} else {

$query="SELECT * FROM users WHERE email='$email'" ;

$result=mysqli_query($con, $query) or die(mysqli_error($con));
 $row = mysqli_fetch_array($result);

  $_SESSION['email'] =  $row['email'];
  $_SESSION['user_id'] = $row['id'];

  header('location: homepage.php');

}
?>