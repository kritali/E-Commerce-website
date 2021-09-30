<?php
   require 'includes/common.php';

$name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $message = $_POST['message'];
  $message = mysqli_real_escape_string($con, $message);

$query = "INSERT INTO users_complaint(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));

 header('location: index.php');

?>