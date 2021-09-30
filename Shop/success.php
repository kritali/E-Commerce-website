<?php

require("includes/common.php");


if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>

<head>
    <title>Success | Life Style Store</title>
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

<div class="content">


        <div class="container-fluid ">
            <div class="col-md-12 casebox">
                <div class="jumbotron">

                      <h3 align="center">THANK YOU FOR ORDERING FROM E-STORE . THE ORDER SHALL BE DELIVERED TO YOU SHORTLY.</h3><hr>
                    <p align="center">Order some more electronic items <a href="homepage.php">here.</a></p>
                </div>
            </div>
        </div>
</div>


        <?php include("includes/footer.php");
        ?>
    </body>
</html>