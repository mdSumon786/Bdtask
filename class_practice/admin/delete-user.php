<?php  
    include "config.php";
    if($_SESSION["user_role"]=='0'){
        header('Refresh: 0.01; URL = post.php');
    }
    $userid = $_GET['id'];
    $sql = "DELETE FROM user WHERE user_id = '{$userid}'";

    if(mysqli_query($conn,$sql)){
        header('Refresh: 0.01; URL = users.php');
    }else{
        echo "Sorry your data not delete";
    }
    mysqli_close($conn);
?>