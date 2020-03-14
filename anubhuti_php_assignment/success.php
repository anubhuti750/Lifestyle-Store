<?php
        $con=mysqli_connect("localhost","root","","ecommerce")or
            die(mysqli_error($con));
    
    session_start();


   if(isset($_SESSION['email']))
   {
       header('location:index.php');
}

$user_id=$_SESSION['user_id'];
$update_query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>success page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="stylebt.css">
 </head>
<body>
	<div class="container" style="margin-top:100px;">
		<div class="jumbotron">
			<p>Your order is confirmed.Thankyou for shopping with us.<a href="products.php">Click here</a> to purchase any other item.</p>
		</div>
	</div>
</body>