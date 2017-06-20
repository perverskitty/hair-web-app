<?php

  include("functions.php");


  // --SIGN IN / RESET PASSWORD ACTION--
  if ($_GET['action'] == "signin") {
    
    // validate email and password
    $error = "";
    
    if (!$_POST['email']) {
      
      $error = "An email address is required";
      
    } else if (!$_POST['password'] && $_POST['signinActive'] == "1") {
      
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
      
      // check for user record with email match
      $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
      $result = mysqli_query($link, $query);
      
      // fetch associated user record
      $row = mysqli_fetch_assoc($result); 
        
      if ($row['password'] == md5(md5($row['id']).$_POST['password'])) {
        
        // set session id to user id
        $_SESSION['id'] = $row['id'];
        
        // password match - successful sign in
        echo 1;
        
      } else {
        
        // email address and/or password not found
        $error = "Email and/or password not found - please try again";
          
      }    
      
    } else if ($_POST['signinActive'] == "0") {
      
      // perform 'send link to reset forgotten password'
      
      // code to be written here
      echo 0;
      
    }
    
    if ($error != "") {
      
      echo $error;
      exit();
      
    }
    
  }
  


  // --SIGN UP ACTION--
  if ($_GET['action'] == "signup") {
    
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
    
    // check whether email address already exists in database
    $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
    $result = mysqli_query($link, $query);
    
    if (mysqli_num_rows($result) > 0) {
      
      // notify if email already exists
      $error = "That email address is already taken";
      
    } else {
      
      // sign up new user
      $query = "INSERT INTO users (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
      
      if (mysqli_query($link, $query)) {
        
        // set session id to new user's id
        $_SESSION['id'] = mysqli_insert_id($link);
        
        // store user's password as a md5 hash
        $query = "UPDATE users SET password = '".md5(md5($_SESSION['id']).$_POST['password'])."' WHERE id = ".$_SESSION['id']." LIMIT 1";
        mysqli_query($link, $query);
        
        // sign up success
        echo 1;
        
      } else {
        
        // sign up fail
        $error = "Couldn't create user - please try again later";
        
      }
      
    }
    
    if ($error != "") {
      
      echo $error;
      exit();
      
    }
    
  }

?>