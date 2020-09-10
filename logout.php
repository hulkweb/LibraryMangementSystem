<?php 
session_start();
unset($_SESSION['sid']);
session_destroy();
echo "<script>window.open('index.php')</script>";

 ?>