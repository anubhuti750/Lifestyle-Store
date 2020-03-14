<?php
        $con=mysqli_connect("localhost","root","","ecommerce")or
            die(mysqli_error($con));
    
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>products page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="stylebt.css">
  </head>

<body>
    <?php
        include 'includes/Header.php';
    ?>
	
	
	<div class="container">
		<div class="jumbotron" style="margin-top:50px;">
			<h1>Welcome to our Lifestyle Store!</h1>
			<p>We have the best cameras,watches and shirts for you.No need to hunt around ,we have all in one place.</p>
		</div>
	</div>
	
<div class="container">	
		<div class="row">
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/1.jpg" class="img-responsive"  >
				<div class="caption">
				<h3>Cannon EOS</h3>
				<p>Price:Rs 36000</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/2.jpg" class="img-responsive">
				<div class="caption">
				<h3>Sony DSLR</h3>
				<p>Price:Rs 40000</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/3.jpg">
				<div class="caption">
				<h3>Sony DSLR</h3>
				<p>Price:Rs 50000</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/4.jpg">
				<div class="caption">
				<h3>Olympus DSLR</h3>
				<p>Price:Rs 80000</p>
				<a href="login.php"><botton type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/18.jpg">
				<div class="caption">
				<h3>Titan Model#301</h3>
				<p>Price:Rs 13000</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/19.jpg">
				<div class="caption">
				<h3>Titan Model #201</h3>
				<p>Price:Rs 3000</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/20.jpg">
				<div class="caption">
				<h3>HMT Milan</h3>
				<p>Price:Rs 8000</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/21.jpg">
				<div class="caption">
				<h3>Faber Luba #111</h3>
				<p>Price:Rs 18000</p>
				<a href="login.html"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/22.jpg">
				<div class="caption">
				<h3>H&W</h3>
				<p>Price:Rs 800</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/23.jpg">
				<div class="caption">
				<h3>Luis Phill</h3>
				<p>Price:Rs 1000</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/24.jpg">
				<div class="caption">
				<h3>John Zok</h3>
				<p>Price:Rs 1500</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail"><img src="images/25.jpg">
				<div class="caption">
				<h3>Jhalsani</h3>
				<p>Price:Rs 1300</p>
				<a href="login.php"><button type="button" class="btn btn-primary">Add to cart</button></a>
				</div>
				</div>
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