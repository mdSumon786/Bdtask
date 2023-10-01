
<?php 
include "config.php";
session_start();
session_unset();
session_destroy();

header('Refresh: 0.01; URL = Login.php');

?>