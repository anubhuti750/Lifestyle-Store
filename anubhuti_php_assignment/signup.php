<?php
        $con=mysqli_connect("localhost","root","","ecommerce")or
            die(mysqli_error($con));
    
    session_start();

?>
<?php

   if(isset($_SESSION['email']))
   {
       header('location:products.php');
}
?>

<html>
<head>
<title>signup page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="stylebt.css">
<style>
	.row_style
	{margin-top:10px;}
	
	.row
	{margin-top:30px;}
</style>
</head>
<body>

<?php
    require 'Header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-xs-4"></div>
		<div class="col-xs-4">
			<h1>SIGN UP</h1>
			<form method="post" action="signup_script.php">
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="number" name="contact" class="form-control" placeholder="contact" min="10 max="10">
				</div>
				<div class="form-group">
					<select class="form-control">
						<option>city</option>
						<option>Bhilai</option>
						<option>bilaspur</option>
						<option>Raipur</option>
						<option>Ranjanandgaon</option>
						<option>Nagpur</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="address" placeholder="Address">
				</div>
				<input type="submit" value="submit" class="btn btn-primary">
				
			</form>
			
		</div>
	</div>
</div>
	
<?php
    require 'includes/footer.php';
?>
</body>
</html>



