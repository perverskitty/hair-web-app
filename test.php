<?php

// connection to my database
  $link = mysqli_connect("127.0.0.1", "perverskitty", "", "hair_db", 3306);

  // check for a connection error
  if (mysqli_connect_errno()) {
    
    // print connection error and exit
    print_r(mysqli_connect_error());
    exit();
  
  } else {
      echo "<p>Connection to database established";
  }
  
  
  $query = "SELECT 
                  clients.id,
                  CONCAT(clients.first_name, ' ', clients.last_name) AS name,
                  clients.gender,
                  clients.email,
                  CONCAT(hairdressers.first_name, ' ', hairdressers.last_name) AS hairdresser,
                  clients.created_at AS created,
                  clients.changed_at AS changed
                FROM clients
                LEFT JOIN hairdressers
                ON clients.hairdresser_id = hairdressers.id";
    
    $result = mysqli_query($link, $query);
    
    
  
 


?>

