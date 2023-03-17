<?php
require 'connect.php';
session_start();

if (isset($_POST['add_client'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cin = $_POST['cin'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $code_postal = $_POST['postal'];
    $Type = $_POST['type'];

    $sql = "INSERT INTO `client` (	
        `First_Name`,
        `Last_Name`,	
        `Email`,	
        `Phone`,	
        `CIN`,
        `Country`,	
        `City`,	
        `Address`,	
        `Password`,	
        `Code_Postal`,	
        `Account_Type`) VALUES ('$fname',
        '$lname',	
        '$email',	
        '$phone',
        '$cin',
        '$country',	
        '$city',	
        '$address',	
        '$password',	
        '$code_postal',	
        '$Type')";
    $statement = $conn->query($sql);
    header("Location:index.php");
}

if (isset($_POST['login_into_account'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];
    //retrieve info from database
    $statment = $conn->query("SELECT Password FROM `client` WHERE Email = '$email'");
    $user = $statment->fetch();
    echo $user['Password'];
    // print_r($user);
    //compare email and password 
    if (password_verify($password, $user['Password'])) {
        $_SESSION['email'] = $email;
        print_r($_SESSION);
        // Succefully logged in

    } else {
        echo "error";
    }
}
if (isset($_SESSION['email'])) {
    header('Location:profile.php');
}

?>