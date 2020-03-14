
<?php
     $con=mysqli_connect("localhost","root","","ecommerce")or
            die(mysqli_error($con));
    
    session_start();

?>
<html>
<head>
<title>login page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="stylebt.css">
<style>
	.row_style
	{margin-top:10px;}
</style>
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
				<li><span class="glyphicon glyphicon-user"><a href="signup.php">Sign-up </a></span></li>
				<li></li>
				<li><span class="glyphicon glyphicon-log-in"><a href="login.php">Login</a></span></li>
			</ul>
		</div>
		</div>
	</div>

	<div class="container">
		<div class="row row_style">
			<div class="panel panel-default">
				<div class="panel-heading">
					Login form
				</div>
				<div class="panel-body">
					 <p class=text-warning">Login to make a purchase</p>
					 <form method="post" action="login_submit.php">
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="email" class="form-control" name="email" placeholder="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z0-9]{2,3}$">
							
							<label for="password">Password</label> 
							<input type="password" class="form-control" name="password" placeholder="password" required="true" pattern=".{6,}">
						</div>
                                             <a href="products.php"  class="btn btn-primary">Login</a>
					 </form>
				</div>
				<div class="panel-footer">
					Don't have an account?<a href="signup.php">Register</a>
				</div>
			</div>
		</div>
	</div>
	<?php
            include("includes/footer.php");
        ?>
	
</body>
