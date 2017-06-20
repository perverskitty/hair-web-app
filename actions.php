<?php

  include("functions.php");


  // action for 'sign in'
  if ($_GET['action'] == "signin") {
    
    // validate email and password
    $error = "";
    
    if (!$_POST['email']) {
      
      $error = "An email address is required";
      
    } else if (!$_POST['password']) {
      
      $error = "A password is required";
      
    } else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
      
      $error = "Please enter a valid email address";
      
    }
    
    if ($error != "") {
      
      echo $error;
      exit();
      
    }
    
    // perform 'sign in'
    if ($_POST['signinActive'] == "1") { 
    
    
      
    }
    
    
  }
  

?>