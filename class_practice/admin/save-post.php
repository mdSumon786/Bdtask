<?php 
include "config.php";
if(isset($_FILES['fileToUpload'])){
    $errors=array();


    $file_name=$_FILES['fileToUpload']['name'];
    $file_size=$_FILES['fileToUpload']['size'];
    $file_tmp=$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];

    // $file_ext= end(explode('.',$file_name));
    // $extensions = array("jpeg","jpg","png");

    // if(in_array($file_ext,$extensions)===false){
    //  $errors[]="This extension file not allowed, please choose a JPG or PNG file.";
    // }
    if($file_size >2097152){
        $errros[]="File size must be 2mb or lower";
    }
    $new_name= time()."-".basename($file_name);
    $target = "upload/".$new_name;
    $image_name=$new_name;
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,$target);
    }else{
        print_r($errors);
        die();
    }
}
session_start();
$title= mysqli_real_escape_string($conn,$_POST['post_title']);
$postdesc= mysqli_real_escape_string($conn,$_POST['postdesc']);
$category= mysqli_real_escape_string($conn,$_POST['category']);
$date= date("d M,Y");
$author = $_SESSION['user_id'];

$sql = "INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES('','{$title}','{$postdesc}','{$category}','{$date}','{$author}','{$image_name}');";
$sql.= "UPDATE `category` SET `post` = `post`+1 WHERE `category`.`category_id` ='{$category}'";
if(mysqli_multi_query($conn, $sql)){
    header('Refresh: 0.01; URL = post.php');
}else{
    echo "Quray failed";
}
?>