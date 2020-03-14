
<?php
    $con=mysqli_connect("localhost","root","","ecommerce")or
            die(mysqli_error($con));
    
    session_start();


?>
<!DOCTYPE html><title>index page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="stylebt.css">
  </head>
<html lang="en">
<head>
  

<body background="images/intro-bg_1.jpg">

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class"container">
		<div class="navbar-header">
		<button type="button" class="navbar-toogle" data-toogle="collapse" data-target="#mybar">

			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="index1.html" class="navbar-brand">Lifestyle Store</a>
		</div>
		<div>
			<ul class="nav navbar-nav navbar-right">
				<li><span class="glyphicon glyphicon-user"><a href="signup.php">Sign-up </a></span></li>
				<li></li>
				<li><span class="glyphicon glyphicon-log-in"><a href="login.php">Login</a></span></li>
			</ul>
		</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<div id="banner_image">
		<div class="container">
			<div id="banner_content">
				<h1>We sell lifestyle</h1>
				<p>Flat 40% Off</p>
				<a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<a href="products.php" class="thumbnail">
					<img src="images/6.jpg">
					<div class="caption">
						<h3>Cameras</h3>
						<p>Original cameras from best brands</p>
					</div>
				</a>
			</div>
			
			
			<div class="col-sm-4">
				<a href="products.php" class="thumbnail">
					<img src="images/10.jpg">
					<div class="caption">
						<h3>Watches</h3>
						<p>Original watches from best brands</p>
					</div>
				</a>
			</div>
			
			
			<div class="col-sm-4">
				<a href="products.php" class="thumbnail">
					<img src="images/13.jpg">
					<div class="caption">
						<h3>Shirts</h3>
						<p>Original shirts from best brands</p>
					</div>
				</a>
			</div>
		</div>
	</div>
	
<div class="navbar fixed-bottom">	
<footer class="page-footer">
		<div class="container">
			Copyright @ Lifestyle Store. All Rights Reserved | Contact us: +91 90000 00000
		</div>
</footer>
</div>

</body>
</html>
