<?php

  // start a session
  session_start();

  // connection to my database
  $link = mysqli_connect("127.0.0.1", "perverskitty", "", "hair_db", 3306);

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

  // Display vertical nav-links function
  function displayNav() {
    
    if (isset($_SESSION['id'])) {
      
      if ($_SESSION['id'] > 0) {
        
        echo '<nav class="nav flex-column">
          <a class="nav-link" href="#">Add new client</a>
          <a class="nav-link" href="#">Add new hairdresser</a>
          <a class="nav-link" href="#">Book appointment</a>
          <a class="nav-link" href="#">Cancel appointment</a>
          <a class="nav-link" href="#">View clients</a>
          <a class="nav-link" href="#">View hairdressers</a>
          <a class="nav-link" href="#">View appointments</a>
          <a class="nav-link" href="#">View schedule</a>
          <a class="nav-link" href="#">Search</a>
        </nav>';
        
      } 
        
    } else {
        
        echo '<nav class="nav flex-column">
          <a class="nav-link" href="#">News</a>
          <a class="nav-link" href="#">About us</a>
        </nav>';
      
    }
    
  }
  

?>