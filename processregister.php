<?php

// Print_r($_POST); //staff //patient
session_start();

//collecting Data

$errorcount = 0;

$first_name = $_POST['first_name'] != "" ? $_POST['first_name'] : $errorcount++;
$last_name = $_POST['last_name'] != "" ? $_POST['last_name'] : $errorcount++;
$email = $_POST['email'] != "" ? $_POST['email'] : $errorcount++;


if($errorcount > 0){
  //redirect back and display error
  header("Location: register.php");
  $_SESSION ["error"] = "You have" . $errorcount . " errors In your Form Submission";
}else{
  //proceed to datbase
  $userObject = [
    'id' =>1,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'password' => $password,
    'gender' => $gender,
    'designation' => $designation,
    'department' => $department
];

//check if user already exist


//save in file
file_put_contents("db/users/". $email . ".json", json_encode($userObject));
    $_SESSION["message"] = "Registration Successful, you can now login " . $first_name;
    header("Location: login.php");
}

$password = $_POST['password'] != "" ? $_POST['password'] : $errorcount++;
$gender = $_POST['gender'] != "" ? $_POST['gender'] : $errorcount++;
$designation = $_POST['designation'] != "" ? $_POST['designation'] : $errorcount++;
$department = $_POST['department'] != "" ? $_POST['department'] : $errorcount++;


$_SESSION ['first_name'] = $first_name;
$_SESSION ['last_name'] = $last_name;
$_SESSION ['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION ['gender'] = $gender;
$_SESSION ['designation'] = $designation;
$_SESSION ['department'] = $department;

//verifying the data, Validation



//saving the data to db



//return


 ?>
