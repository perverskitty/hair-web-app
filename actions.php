<?php

  include("functions.php");


  // Action for 'sign in'
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
      
      // check for user record with email match
      $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
      $result = mysqli_query($link, $query);
      
      // fetch associated user record
      $row = mysqli_fetch_assoc($result); 
        
      if ($row['password'] == md5(md5($row['id']).$_POST['password'])) {
        
        // password match - successful sign in
        echo 1;
          
      } else {
        
        // email address and/or password not found
        $error = "Could not find that email/password combination - please try again";
          
      }    
      
    }
    
    if ($error != "") {
      
      echo $error;
      exit();
      
    }
    
  }
  

  // Action for 'sign up'
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
        
        // store user's password as a md5 hash
        $query = "UPDATE users SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";
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