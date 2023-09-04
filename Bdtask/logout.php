<?php 
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['password']);

    header('Refresh: 0.01; URL = login.php');

?>