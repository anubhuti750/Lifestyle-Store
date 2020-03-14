
<?php
        $con=mysqli_connect("localhost","root","","ecommerce")or
            die(mysqli_error($con));
    
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>cart page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="stylebt.css">
 </head>

<body>
        <?php
            require 'includes/Header.php';
        ?>
	
	<div class="container" style="margin-top:50px">
	<table class="table table-striped">
		<tr>
			<th>Item number</th>
			<th>Item Name</th>
			<th>Price</th>
			<th></th>
		</tr>
		<tr>
			
		</tr>
		
		
	</table>
	</div>
	

<?php
    require 'includes/footer.php';
?>
<?php
    $_SESSION['user-id']=mysqli_insert__id($con);
    $user_product="SELECT * FROM users_items up INNER JOIN items i ON i.pid=up.id WHERE up.user_id='101'";
    
    $row=mysqli_fetch_array($user_product);
    
    if(mysqli_num_rows==0)
        echo "Add items to the cart first!";
    else {
    while(user_id!=NULL)
    {
       $sum=$sum+$price['price'];
       $id['id']+1;
    }
    
    while(user_id!=NULL)
    {
        echo $row['pid']."  ";
        echo $row['name']."  ";
        echo $row['price']."  "."<a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>Remove</a>"."<br/>";
    }
?>

    <table>
    <tr>
			<td></td>
			<td>Total</td>
			<td>Rs 0/-</td>
			<td><a href="success.html"><button type="button" class="btn btn-primary">Confirm Order</button></a></td>
    </tr>
    </table>

</body>
</html>