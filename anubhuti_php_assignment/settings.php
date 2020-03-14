
<?php
        $con=mysqli_connect("localhost","root","","ecommerce")or
            die(mysqli_error($con));
    
    session_start();

    
     if(isset($_SESSION['email']))
   {
       header('location:index.php');
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>settings page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="stylebt.css">
 </head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class"container">
		<div class="navbar-header">
		<button type="button" class="navbar-toogle" data-toogle="collapse" data-target="#mybar">

			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="index.php" class="navbar-brand">Lifestyle Store</a>
		</div>
		<div>
			<ul class="nav navbar-nav navbar-right">
				<li><span class="glyphicon glyphicon-shopping-cart"><a href="Cart.php">Cart</a></span></li>
				<li><span class="glyphicon glyphicon-user"><a href="settings.php">Settings</a></span></li>
				<li><span class="glyphicon glyphicon-log-out"><a href="logout.php">Logout</a></span></li>
			</ul>
		</div>
		</div>
	</div>
<div class="container" style="margin-top:30px;">
	<div class="row">
		<div class="col-xs-4"></div>
		<div class="col-xs-4">
			<h1>Change Password</h1>
			<form method="post" action="settings_script.php">
				<div class="form-group">
					<input type="text" class="form-control" name="old_password" placeholder="Old Password">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="new_password" placeholder="New Password">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="re_type_new_password" placeholder="Re-type New Password">
				</div>
				<button type="button" class="btn btn-primary">Change</button>
				
			</form>
		</div>
	</div>
</div>	
	
<div class="navbar navbar-fixed-bottom"> 	
<footer>
		<div class="container">
			Copyright @ Lifestyle Store. All Rights Reserved | Contact us: +91 90000 00000
		</div>
</footer>
</div>
</body>
</html>