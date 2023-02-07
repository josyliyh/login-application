<?php
//load login credential data
require_once("config.php"); 

//form field data will go into these
$username = "";
$password = "";


//an empty array
$errorMessages = array();


if( isset($_POST['username']) &&  
    isset($_POST['password']) ){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
   

    if( empty($username) ){
        //add a message to the errors array
        $errorMessages[] = "The username cannot be left blank.";
    }
 
    if( empty($password) ){
        //add a message to the errors array
        $errorMessages[] = "The password cannot be left blank.";
    }
       
} else {
    $errorMessages[] = "Please log in to access the content.";
}

if( count($errorMessages) == 0 ){
require("dbinfo.php");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if( mysqli_connect_errno() != 0 ){
        die("<p>Could not connect to DB: ".$mysqli->connect_error."</p>");	
    }

$query = "SELECT username, password FROM users WHERE username='$username';";
$result = $mysqli->query( $query );

$checkname = 0;
$checkpass = 0;

while( $oneRecord = $result->fetch_row() ){
    if ($username == $oneRecord[0] ){
        $checkname = 1;
  
        if ($password == $oneRecord[1]){
            $checkpass = 1;
            break;
        }
        
    }
 
}
$mysqli -> close();
if( $checkname != 1){
        $errorMessages[] = "The username was not in our database.";
}

if( $checkpass != 1){
        $errorMessages[] = "Sorry $username, that was an invalid password. Try again...";
}    
}

//begin a session
session_start();

//see if any errors were detected
if( count($errorMessages) > 0 ){
    //save errors in session
    $_SESSION['messages'] = $errorMessages;
    //forward user back to the login page
    header("location: index.php");
    die();
}else{
    //remember this user's name and style preference
    $_SESSION['username'] = $username;
   
    //timestamp to track how long user stays logged in
    $_SESSION['time-logged-in'] = time();
    //timestamp to track timeout durations
    $_SESSION['time-last-active'] = time();
    //forward user to the content page
    header("location: page01.php");
    die();
}

?>