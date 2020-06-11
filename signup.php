<?php
require 'connect.php';
$name=$_POST['name'];
  if (empty($_POST["name"])) {
    header('location:signuppage.php?email_error=Name is required');
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      header('location:signuppage.php?email_error=Enter valid name');
    }
  }
$email=$_POST['email'];
$regex_email="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
if (empty($_POST["email"])) {
    header('location:signuppage.php?email_error=Email is required');
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match($regex_email,$email)) {
      header('location:signuppage.php?email_error=Enter valid email');
    }
  }

$password=$_POST['password'];
if (empty($_POST["password"])) {
    header('location:signuppage.php?password_error=Password is required');
  } else {
    $password = test_input($_POST["password"]);
if (strlen($password)<6){
  header('location:signuppage.php?password_error=Enter valid password');
  }
}

$phone_number=$_POST['phone_number'];
  if (empty($_POST["phone_number"])) {
header('location:signuppage.php?phone_number_error=Phone_number is required');
  }
  else{
    $phone_number=test_input($_POST["password"]);
    if(strlen($phone_number)<10){
      header('location:signuppage.php?phone_number_error=Enter valid phone_number');
    }
  }
$name=mysqli_real_escape_string($con,$name);
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
$phone_number=mysqli_real_escape_string($con,$phone_number);
$user_registration_query="insert into signup(name,email,password,phone_number) values('$name','$email','$password','$phone_number')";
$user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
?>
    