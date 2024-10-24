<?php
// variable declaration
$host="localhost:3306";
$user="root";
$pass="";
$db="voting";
// Database connection 
$con=mysqli_connect("$host","$user",$pass,"$db");
// checking if database is connected oor not
    if($con){
        // echo "connection successful";
    }else{
        echo "connection failed";
    }
?>