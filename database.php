<?php
//db connection

$host="localhost";
$name="root";
$password="";
$database="homestay-main";

$conn = mysqli_connect($host,$name,$password,$database) or die("Error connecting DB");

?>