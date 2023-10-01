<?php 
include "config.php";
if($_SESSION["user_role"]=='0'){
    header('Refresh: 0.01; URL = post.php');
}
$cat_id = $_GET['id'];
$sql = "DELETE FROM category WHERE category_id = '{$cat_id}'";

if(mysqli_query($conn,$sql)){
    header('Refresh: 0.01; URL = category.php');
}else{
    echo "Sorry your data not delete";
}
mysqli_close($conn);

?>