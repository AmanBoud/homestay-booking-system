<?php
session_start();

if(!isset($_SESSION["auth"]))
{
    $_SESSION["message"]="Log in to visit website";
    header("location: login.php");
    exit(0);
}
?>