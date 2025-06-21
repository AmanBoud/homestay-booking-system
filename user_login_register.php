<?php
session_start();
include "database.php";


// Register user

if(isset($_POST["register_user"])){   
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $adhar=$_POST["adhar"];
    $password=$_POST["password"];
    $re_password=$_POST["re_password"];
    if($password == $re_password){
        $register_query="INSERT INTO user (name,email,phone,adhar,password) 
        VALUES('$name','$email','$phone','$adhar','$password')";
        $run_register_query=mysqli_query($conn,$register_query);
        if($run_register_query){
            $msg="Registerd successfully !";
            $_SESSION["message"]=$msg;
            header("location:login.php");
            exit(0);
        }
        else{
            $msg="Failed to register !";
            $_SESSION["message"]=$msg;
            header("location:register.php");
            exit(0);
        }
    }
    else{
        $msg="Passwords do not match !";
        $_SESSION["message"]=$msg;
        header("location:register.php");
        exit(0);
    }
}


// Login user

if(isset($_POST["login_user"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $login_query="SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1";
    $run_login_query=mysqli_query($conn,$login_query);

    if(mysqli_num_rows($run_login_query) > 0 ){
        foreach ($run_login_query as $row) {
            $user_id = $row["id"];
            $user_name = $row["name"];
            $user_email = $row["email"];
            $user_phone = $row["phone"];
            $user_adhar = $row["adhar"];
        }

        $_SESSION["auth"] = true;
        $_SESSION["auth_user"] =[
            "user_id" => $user_id,
            "user_name" => $user_name,
            "user_email" => $user_email,
            "user_phone" => $user_phone,
            "user_adhar" => $user_adhar,
        ];

        $_SESSION["message"] = "Logged in successfully !";
        header("location: index.php");
        exit(0);
    }
    else{
        $msg="User not found !";
        $_SESSION["message"]=$msg;
        header("location:login.php");
        exit(0);
    }

}

?>