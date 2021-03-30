<?php
    $host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $database = "Nyigisha_db";
    $con = new mysqli($host,$db_user,$db_password,$database) or die(mysqli_connect_error($con));
?>