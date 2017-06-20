<?php

  // connection to my database
  $link = mysqli_connect("localhost", "root", "", "hairdb");

  // check for a connection error
  if (mysqli_connect_errno()) {
    
    // print connection error and exit
    print_r(mysqli_connect_error());
    exit();
  
  }

?>