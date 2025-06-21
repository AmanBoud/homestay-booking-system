<?php 
include "authentication.php";
include "database.php";
// logout_user

if(isset($_POST["logout_user"])){
    unset($_SESSION["auth"]);
    unset($_SESSION["auth_user"]);
    $msg="Logged out successfully !";
    $_SESSION["message"]=$msg;
    header("location:login.php");
    exit(0);
}

// contact us form

if(isset($_POST["submit_contact"])){    
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];
    
    $contact_query="INSERT INTO contact (name,email,phone,message) 
    VALUES('$name','$email','$phone','$message')";
    $run_contact_query=mysqli_query($conn,$contact_query);

    if($run_contact_query){
        $msg="Your Message has been submitted !";
        $_SESSION["message"]=$msg;
        header("location:contact.php");
        exit(0);
    }
    else{
        $msg="Failed to submit !";
        $_SESSION["message"]=$msg;
        header("location:contact.php");
        exit(0);
    }
}   

//Update_profile

if(isset($_POST["Update_profile"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $adhar=$_POST["adhar"];
    $password=$_POST["password"];

    $Update_profile_query = "UPDATE user SET name='$name', email='$email', phone='$phone', adhar='$adhar', password='$password'";
    $run_Update_profile_query = mysqli_query($conn, $Update_profile_query);

    if($run_Update_profile_query){
        $msg="Your profile has been updated !";
        $_SESSION["message"]=$msg;
        header("location:index.php");
        exit(0);
    }
    else{
        $msg="Profile update failed !";
        $_SESSION["message"]=$msg;
        header("location:update_profile.php");
        exit(0);
    }
}



//book stay

if(isset($_POST["book_stay"])){
    $u_name=$_POST["u_name"];
    $room=$_POST["room"];
    $in=$_POST["in"];
    $out=$_POST["out"];
    $phone=$_POST["phone"];
    $adhar=$_POST["adhar"];
    $no_of_nights=$_POST["no_of_nights"];
    $f_price=$_POST["f_price"];
    $book_query="INSERT INTO booking (u_name,room_type,check_in,check_out,no_of_nights,final_price,phone,adhar) 
    VALUES('$u_name','$room','$in','$out','$no_of_nights','$f_price','$phone','$adhar')";
    $run_book_query=mysqli_query($conn,$book_query);

    if($run_book_query){
        $msg="Stay Bookked !";
        $_SESSION["message"]=$msg;
        header("location:index.php");
        exit(0);
    }
    else{
        $msg="Failed to Book !";
        $_SESSION["message"]=$msg;
        header("location:reservation.php");
        exit(0);
    }
}   































































// else{
//     $msg="Unknown error occured !";
//     $_SESSION["message"]=$msg;
//     header("location:contact.php");
//     exit(0);
// }