<?php 
include "config.php";
if(empty($_FILES['logo']['name'])){
    $file_name=$_POST['old_image'];
}else{
    $errors=array();

    $file_name=$_FILES['logo']['name'];
    $file_size=$_FILES['logo']['size'];
    $file_tmp=$_FILES['logo']['tmp_name'];
    $file_type=$_FILES['logo']['type'];

    // $file_ext= end(explode('.',$file_name));

    // $extensions = array("jpeg","jpg","png");

    // if(in_array($file_ext,$extensions)===false){
    //  $errors[]="This extension file not allowed, please choose a JPG or PNG file.";
    // }
    if($file_size >2097152){
        $errros[]="File size must be 2mb or lower";
    }
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"images/".$file_name);
    }else{
        print_r($errors);
        die();
    }
}
echo $sql="UPDATE `setting` SET `webname`='{$_POST['website_name']}',`logo`='{$file_name}',`web_desc`='{$_POST['footer_desc']}'";
$result= mysqli_query($conn,$sql) or  die("Query Faild");
if($result){
    header('Refresh: 0.01; URL = settings.php');
}else{
    echo "Query failed";
}
?>