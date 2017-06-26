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
          <a class="nav-link" href="?page=clients">View clients</a>
          <a class="nav-link" href="?page=hairdressers">View hairdressers</a>
          <a class="nav-link" href="?page=services">View services</a>
          <a class="nav-link" href="?page=appointments">View appointments</a>
          <a class="nav-link" href="?page=schedules">View schedules</a>
        </nav>';
        
      } 
        
    } else {
        
        echo '<nav class="nav flex-column">
          <a class="nav-link" href="#">News</a>
          <a class="nav-link" href="#">About us</a>
        </nav>';
      
    }
    
  }
  
  
  // Display clients function
  function displayClients() {
    
    if (isset($_SESSION['id'])) {
      
      // access connection from inside this function
      global $link;
      
      if ($_SESSION['id'] > 0) {
        
        $query = "SELECT 
                  clients.id,
                  CONCAT(clients.first_name, ' ', clients.last_name) AS name,
                  clients.gender,
                  clients.email,
                  clients.tel,
                  CONCAT(hairdressers.first_name, ' ', hairdressers.last_name) AS hairdresser,
                  clients.created_at AS created,
                  clients.changed_at AS changed
                FROM clients
                LEFT JOIN hairdressers
                ON clients.hairdresser_id = hairdressers.id";
        $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) == 0) {
          
          echo "There are no clients";
          
        } else {
          
          $clientsTable = "<table class='table table-hover'>
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Tel</th>
              <th>Hairdresser</th>
              <th>Created</th>
              <th>Changed</th>
            </tr>
          </thead>
          <tbody>";
          
          while ($row = mysqli_fetch_assoc($result)) {
            
            $clientsTable .= "<tr>
              <th scope='row'>".$row['id']."</th>
              <td>".$row['name']."</td>
              <td>".$row['gender']."</td>
              <td>".$row['email']."</td>
              <td>".$row['tel']."</td>
              <td>".$row['hairdresser']."</td>
              <td>".$row['created']."</td>
              <td>".$row['changed']."</td>
            </tr>";
        
          }
          
          $clientsTable .= "</tbody></table>";
          
          echo $clientsTable;
          
        }
        
        /*
        echo "
            <tr>
              <th scope='row'>1</th>
              <td>Ally Mucha</td>
              <td>female</td>
              <td>ally@client.com</td>
              <td>07540 555 666</td>
              <td>Peter Cheung</td>
              <td>2017-06-25 18:07:56</td>
              <td>2017-06-25 18:07:56</td>
            </tr>
            <tr>
              <th scope='row'>2</th>
              <td>Fee Day</td>
              <td>female</td>
              <td>fee@client.com</td>
              <td>07540 666 777</td>
              <td>Ren Calder</td>
              <td>2017-06-25 18:07:56</td>
              <td>2017-06-25 18:07:56</td>
            </tr>
            <tr>
              <<th scope='row'>3</th>
              <td>Sue Ochs</td>
              <td>female</td>
              <td>sue@client.com</td>
              <td>07540 777 888</td>
              <td>Lory Gill</td>
              <td>2017-06-25 18:07:56</td>
              <td>2017-06-25 18:07:56</td>
            </tr>
            <tr>
              <<th scope='row'>4</th>
              <td>Ben Thomas</td>
              <td>male</td>
              <td>ben@client.com</td>
              <td>07540 888 999</td>
              <td>None</td>
              <td>2017-06-25 18:07:56</td>
              <td>2017-06-25 18:07:56</td>
            </tr>
          </tbody>
        </table>";
        */
        
        
      }
      
    }
    
  }
  
  
   // Display hairdressers function
  function displayHairdressers() {
    
    if (isset($_SESSION['id'])) {
      
      if ($_SESSION['id'] > 0) {
        
        echo 'Displaying hairdressers content';
        
      }
      
    }
    
  }
  
  
   // Display services function
  function displayServices() {
    
    if (isset($_SESSION['id'])) {
      
      if ($_SESSION['id'] > 0) {
        
        echo 'Displaying services content';
        
      }
      
    }
    
  }
  
  
   // Display appointments function
  function displayAppointments() {
    
    if (isset($_SESSION['id'])) {
      
      if ($_SESSION['id'] > 0) {
        
        echo 'Displaying appointments content';
        
      }
      
    }
    
  }
  
  
   // Display schedules function
  function displaySchedules() {
    
    if (isset($_SESSION['id'])) {
      
      if ($_SESSION['id'] > 0) {
        
        echo 'Display schedules content';
        
      }
      
    }
    
  }
  

?>