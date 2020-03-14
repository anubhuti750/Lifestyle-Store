<?php
    require 'common.php';
?>
<?php
    
$user_id=$_GET['user_id'];
$item_id=$_SESSION['item_id'];
$_SESSION['id']=mysqli_insert_id($con);
$user_query="INSERT INTO users_items(user-id,item_id,status) VALUES('$user_id','$item_id','Added to cart')";
$user_submit=mysqli_query($con,$user_query) or die(mysqli_error($con));

   
       header('location:products.php');

?>