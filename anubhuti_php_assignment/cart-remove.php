<?php
    require 'common.php';
    ?>
<?php
    $_SESSION['user_id']=$user_id;
    $_SESSION['id']=mysqli_insert_id($con);
    $_SESSION['item_id']=$item_id;
    
    $delete_query="DELETE FROM users_items WHERE usere_id='$user_id'";
    $deleted_query="DELET FROM users_items WHERE item_id='$item_id'";
    
    $delete_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    
    echo "item has been removed";
    
    header('location:cart.php');
?>