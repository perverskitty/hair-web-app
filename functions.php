<?php

  // start a session
  session_start();

  // connection to my database
  $link = mysqli_connect("localhost", "root", "", "hairdb");

  // check for a connection error
  if (mysqli_connect_errno()) {
    
    // print connection error and exit
    print_r(mysqli_connect_error());
    exit();
  
  }

  // check 'function' exists in the GET array
  if ( isset($_GET['function']) ) {
  
    // logout function
    if ($_GET['function'] == "signout") {
    
      session_unset();
    
    }
  
  
  }


  

?>