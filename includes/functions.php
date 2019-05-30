<?php
// Function to check if an invoice user is logged in
function sessionCheck(){
  // Starting a session
  session_start();
  // Checking if a session variable with the unique id for the user is set
  if(!isset($_SESSION["user_id"])){
    // If the session variable is not present we are sending the user back to the login screen
    header('Location: login.php');
  }
}
// Similar to the sessionCheck function but used only for the login screen
function loginCheck(){
  // Starting a session
  session_start();
  // Checking if a session variable with the unique id for the user is set
  if(isset($_SESSION["user_id"])){
    // If the session variable is present we are sending the user to the index file
    header('Location: index.php');
  }
}
?>
