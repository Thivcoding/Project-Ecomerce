<?php
include("../model/db.php");
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['subbtn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    $email_validate_query = "SELECT uEmail FROM users WHERE uEmail = '$email' ";
    $email_validate_run = mysqli_query($conn, $email_validate_query);
    if (mysqli_num_rows($email_validate_run) > 0) {
        $_SESSION['msg'] = "The email is already exist.";
        header('location: ../register.php');
    } 
    $phone_validate_query = "SELECT uPhone FROM users WHERE uPhone = '$phone' ";
    $phone_validate_run = mysqli_query($conn, $phone_validate_query);
    if (mysqli_num_rows($phone_validate_run) > 0) {
        $_SESSION['msg'] = "The phone number is already exist.";
        header('location: ../register.php');
    }
    if ($password == $cpassword) {
        $query = "INSERT INTO users (uName, uEmail, uPhone, uPass) 
        VALUES ('$name', '$email', '$phone', '$password')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['msg'] = "User Registered Successfully";
            header('location: ../login.php');
        } else {
            $_SESSION['msg'] = "User Registration Failed";
            header('location: ../register.php');
        }
    } else {
        $_SESSION['msg'] = "Password Not Matched";
        header('location: ../register.php');
    }
}else if(isset($_POST['logBtn'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query_select = "SELECT  * FROM users WHERE uEmail = '$email' AND uPass = '$password' ";
    $query_select_run = mysqli_query($conn,$query_select);
    if(mysqli_num_rows($query_select_run)>0){
        $_SESSION['auth'] = true;
        $userdata = mysqli_fetch_array($query_select_run);
        $username = $userdata['uName'];
        $useremail = $userdata['uEmail'];
        $role_as = $userdata['role_as'];
        $_SESSION['auth-user']=[
            'name' => $username,
            'email' => $useremail
        ];
        $_SESSION['role_as']=$role_as;
        $_SESSION['msg']="Logged in successfully.";
        $_SESSION['msgType']="alert-success";
        header('location: ../index.php');
    }else{
        $_SESSION['msg']="Invalid Credential";
        $_SESSION['msgType']="alert-danger";
        header('location: ../login.php');
    }
}