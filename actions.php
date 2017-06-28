<?php

  include("functions.php");


  /* Sign in & Reset password
  -------------------------------------------------- */
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
      $query = "SELECT * FROM hairdressers WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
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
  


  /* Sign up
  -------------------------------------------------- */
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
      $query = "INSERT INTO hairdressers (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
      
      if (mysqli_query($link, $query)) {
        
        // set session id to new user's id
        $_SESSION['id'] = mysqli_insert_id($link);
        
        // store user's password as a md5 hash
        $query = "UPDATE hairdressers SET password = '".md5(md5($_SESSION['id']).$_POST['password'])."' WHERE id = ".$_SESSION['id']." LIMIT 1";
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
  
  
  /* Add new client
  -------------------------------------------------- */
  if ($_GET['action'] == "addclient") {
    
    // input validation
    $error = "";
    
    if (!$_POST['firstname']) {
      
      $error = "A first name is required";
      
    } else if (!$_POST['lastname']) {
      
      $error = "A last name is required";
      
    } else if ($_POST['gender'] == 'undefined') {
      
      $error = "A gender is required";
    
    } else if (!$_POST['tel']) {
      
      $error = "A mobile phone number is required";
        
    } else if (!$_POST['email']) {
      
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
    $query = "SELECT * FROM clients WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
    $result = mysqli_query($link, $query);
    
    if (mysqli_num_rows($result) > 0) {
      
      // notify if email already exists
      $error = "That email address is already taken";
      
    } else {
      
      // need some code here to handle $_POST['hairdresser'] = '0'
      
      // add a new client to the database
      $query = "INSERT INTO clients (
                first_name,
                last_name,
                email,
                password,
                tel,
                gender,
                hairdresser_id,
                created_at,
                changed_at)
                VALUES ('"
                .mysqli_real_escape_string($link, $_POST['firstname'])."', '"
                .mysqli_real_escape_string($link, $_POST['lastname'])."', '"
                .mysqli_real_escape_string($link, $_POST['email'])."', '"
                .mysqli_real_escape_string($link, $_POST['password'])."', '"
                .mysqli_real_escape_string($link, $_POST['tel'])."', '"
                .mysqli_real_escape_string($link, $_POST['gender'])."', '"
                .mysqli_real_escape_string($link, $_POST['hairdresser'])."', null, null)";
      
      if (mysqli_query($link, $query)) {
        
        // store new client's password as a md5 hash
        $query = "UPDATE clients 
                  SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password']).
                  "' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";
        mysqli_query($link, $query);
        
        // add client success
        echo 1;
        
      } else {
        
        // add client fail
        $error = "Couldn't add new client - please try again later";
        
      }
      
    }
    
    if ($error != "") {
      
      echo $error;
      exit();
      
    }
    
  }
  
  
  /* Add new hairdresser
  -------------------------------------------------- */
  if ($_GET['action'] == "addhairdresser") { 
    
    // input validation
    $error = "";
    
    if (!$_POST['firstname']) {
      
      $error = "A first name is required";
      
    } else if (!$_POST['lastname']) {
      
      $error = "A last name is required";
      
    } else if ($_POST['gender'] == 'undefined') {
      
      $error = "A gender is required";
    
    } else if (!$_POST['tel']) {
      
      $error = "A mobile phone number is required";
      
    } else if ($_POST['stafftype'] == 'undefined') {
      
      $error = "A staff type is required";  
        
    } else if (!$_POST['email']) {
      
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
    $query = "SELECT * FROM hairdressers WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
    $result = mysqli_query($link, $query);
    
    if (mysqli_num_rows($result) > 0) {
      
      // notify if email already exists
      $error = "That email address is already taken";
      
    } else {
      
      // insert new hairdresser into database
      $query = "INSERT INTO hairdressers (
                first_name,
                last_name,
                email,
                password,
                tel,
                gender,
                staff_type,
                created_at,
                changed_at)
                VALUES ('"
                .mysqli_real_escape_string($link, $_POST['firstname'])."', '"
                .mysqli_real_escape_string($link, $_POST['lastname'])."', '"
                .mysqli_real_escape_string($link, $_POST['email'])."', '"
                .mysqli_real_escape_string($link, $_POST['password'])."', '"
                .mysqli_real_escape_string($link, $_POST['tel'])."', '"
                .mysqli_real_escape_string($link, $_POST['gender'])."', '"
                .mysqli_real_escape_string($link, $_POST['stafftype'])."', null, null)";
      
      if (mysqli_query($link, $query)) {
        
        // store new hairdresser's password as md5 hash
        $query = "UPDATE hairdressers 
                  SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password']).
                  "' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";
        mysqli_query($link, $query);
        
        // add hairdresser success
        echo 1;
        
      } else {
        
        // add hairdresser fail
        $error = "Couldn't add new hairdresser - please try again later";
        
      }
      
    }
    
    if ($error != "") {
      
      echo $error;
      exit();
      
    }
    
  }
    
  

  /* Book appointment
  -------------------------------------------------- */
  if ($_GET['action'] == "bookappointment") {
   
    // input validation
    $error = "";
    
    if (!$_POST['client']) {
      
      $error = "A client is required";
      
    } else if (!$_POST['service']) {
      
      $error = "A service is required";
      
    } else if (!$_POST['hairdresser']) {
      
      $error = "A hairdresser is required";
    
    } else if (!$_POST['date']) {
      
      $error = "A date is required";
      
    } else if (!$_POST['time']) {
      
      $error = "A time is required";  
        
    } 
    
    if ($error != "") {
      
      echo $error;
      exit();
      
    }
    
    // check salon opening times
    $query = "SELECT *
              FROM salons
              WHERE DAYOFWEEK('"
                .mysqli_real_escape_string($link, $_POST['date'])."') = day_of_week AND '"
                .mysqli_real_escape_string($link, $_POST['time'])."' >= open_time AND '"
                .mysqli_real_escape_string($link, $_POST['time'])."' < close_time";
    $result = mysqli_query($link, $query);
    
    if (!mysqli_num_rows($result)) {
      
      // salon closed
      $error = "Salon closed - please try another date and time";
      
    } else {
      
      // salon open
      // print_r('Good news, salon is open');
      
      // get service duration in hh:mm:ss 
      $serviceQuery = "SELECT duration
                        FROM services
                        WHERE id ="
                        .mysqli_real_escape_string($link, $_POST['service'])." LIMIT 1";
      $serviceQueryResult = mysqli_query($link, $serviceQuery); 
      $service = mysqli_fetch_assoc($serviceQueryResult);
      
      // get endtime from service duration
      $time1 = $_POST['time'];
      $time2 = $service['duration'];
      $secs = strtotime($time2) - strtotime("00:00:00");
      $endtime = date("H:i:s", strtotime($time1) + $secs);
      
      // check hairdresser schedule availability
      $scheduleQuery = "SELECT * 
                FROM schedules
                WHERE hairdresser_id =" 
                .mysqli_real_escape_string($link, $_POST['hairdresser'])." AND DAYOFWEEK('"
                .mysqli_real_escape_string($link, $_POST['date'])."') = day_of_week AND '"
                .mysqli_real_escape_string($link, $_POST['time'])."' >= start_time AND '"
                .mysqli_real_escape_string($link, $endtime)."' <= end_time LIMIT 1";
      $scheduleQueryResult = mysqli_query($link, $scheduleQuery);
      
      if (!mysqli_num_rows($scheduleQueryResult)) {
        
        // insufficient time or hairdresser unavailable
        $error = "Insufficient time or hairdresser unavailable - please select another date and time";
        
      } else {
        
        // hairdresser available existing appointments notwithstanding
        // print_r('Hairdresser available!');
        
        // check availability with existing appointments
        $appointmentQuery = "SELECT * 
                              FROM appointments
                              WHERE appt_date = '"
                              .mysqli_real_escape_string($link, $_POST['date'])."' AND hairdresser_id = "
                              .mysqli_real_escape_string($link, $_POST['hairdresser'])." AND '"
                              .mysqli_real_escape_string($link, $_POST['time'])."' >= start_time AND '"
                              .mysqli_real_escape_string($link, $endtime)."' <= end_time LIMIT 1";
        $appointmentQueryResult = mysqli_query($link, $appointmentQuery);
        
        if (mysqli_num_rows($appointmentQueryResult) > 0) {
          
          $appointment = mysqli_fetch_assoc($appointmentQueryResult);
          
          if ($_POST['client'] == $appointment['client_id']) {
            
            // an appointment for the client with hairdresser at date/time already exists
            $error = "The appointment already exists";
            
          } else {
            
            // an appointment clash
            $error = "Appointment clash - please select another date and time";
            
          }
          
        } else {
          
          // book appointment
          //print_r('all ok - go ahead and book appointment'); 
          
          // insert new appointment into database
          $insertQuery = "INSERT INTO appointments (
                    appt_date,
                    start_time,
                    end_time,
                    client_id,
                    hairdresser_id,
                    service_id)
                    VALUES ('"
                    .mysqli_real_escape_string($link, $_POST['date'])."', '"
                    .mysqli_real_escape_string($link, $_POST['time'])."', '"
                    .mysqli_real_escape_string($link, $endtime)."', '"
                    .mysqli_real_escape_string($link, $_POST['client'])."', '"
                    .mysqli_real_escape_string($link, $_POST['hairdresser'])."', '"
                    .mysqli_real_escape_string($link, $_POST['service'])."')";
      
          if (mysqli_query($link, $insertQuery)) {
        
            // book appointment success
            echo 1;
        
          } else {
        
            // book appointment fail
            $error = "Couldn't book appointment - please try again later";
        
          }
          
        } 
        
      }
      
    }
    
    if ($error != "") {
      
      echo $error;
      exit();
      
    }
    
  }



?>