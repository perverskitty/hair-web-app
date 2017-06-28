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
          <a class="nav-link" href="?page=newclient">Add new client</a>
          <a class="nav-link" href="?page=newhairdresser">Add new hairdresser</a>
          <a class="nav-link" href="?page=newappointment">Add an appointment</a>
          <a class="nav-link" href="?page=cancelappointment">Cancel an appointment</a>
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
        
      }
      
    }
    
  }
  
  
   // Display hairdressers function
  function displayHairdressers() {
    
    if (isset($_SESSION['id'])) {
      
      // access connection from inside this function
      global $link;
      
      if ($_SESSION['id'] > 0) {
        
        $query = "SELECT 
                  id,
                  CONCAT(first_name, ' ', last_name) AS name,
                  gender,
                  email,
                  tel,
                  staff_type AS position,
                  created_at AS created,
                  changed_at AS changed
                FROM hairdressers";
        $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) == 0) {
          
          echo "There are no hairdressers";
          
        } else {
          
          $hairdressersTable = "<table class='table table-hover'>
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Tel</th>
              <th>Position</th>
              <th>Created</th>
              <th>Changed</th>
            </tr>
          </thead>
          <tbody>";
          
          while ($row = mysqli_fetch_assoc($result)) {
            
            $hairdressersTable .= "<tr>
              <th scope='row'>".$row['id']."</th>
              <td>".$row['name']."</td>
              <td>".$row['gender']."</td>
              <td>".$row['email']."</td>
              <td>".$row['tel']."</td>
              <td>".$row['position']."</td>
              <td>".$row['created']."</td>
              <td>".$row['changed']."</td>
            </tr>";
        
          }
          
          $hairdressersTable .= "</tbody></table>";
          
          echo $hairdressersTable;
          
        }
        
      }
      
    }
    
  }
  
  
   // Display services function
  function displayServices() {
    
    if (isset($_SESSION['id'])) {
      
      // access connection from inside this function
      global $link;
      
      if ($_SESSION['id'] > 0) {
        
        $query = "SELECT 
                  id,
                  category,
                  title AS service,
                  duration,
                  price
                FROM services";
        $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) == 0) {
          
          echo "There are no services";
          
        } else {
          
          $servicesTable = "<table class='table table-hover'>
          <thead>
            <tr>
              <th>#</th>
              <th>Category</th>
              <th>Service</th>
              <th>Duration (mins)</th>
              <th>Price (£)</th>
            </tr>
          </thead>
          <tbody>";
          
          while ($row = mysqli_fetch_assoc($result)) {
            
            $servicesTable .= "<tr>
              <th scope='row'>".$row['id']."</th>
              <td>".$row['category']."</td>
              <td>".$row['service']."</td>
              <td>".$row['duration']."</td>
              <td>".$row['price']."</td>
            </tr>";
        
          }
          
          $servicesTable .= "</tbody></table>";
          
          echo $servicesTable;
          
        }
        
      }
      
    }
    
  }
  
  
   // Display appointments function
  function displayAppointments() {
    
    if (isset($_SESSION['id'])) {
      
      // access connection from inside this function
      global $link;
      
      if ($_SESSION['id'] > 0) {
        
        $query = "SELECT 
                  appointments.id AS id,
                  appt_date AS date,
                  appointments.start_time AS start,
                  appointments.end_time AS end,
                  CONCAT(clients.first_name, ' ', clients.last_name) AS client,
                  services.title AS service,
                  CONCAT(hairdressers.first_name, ' ', hairdressers.last_name) AS hairdresser
                FROM appointments
                INNER JOIN clients
                  ON appointments.client_id = clients.id
                INNER JOIN services
                  ON appointments.service_id = services.id
                INNER JOIN hairdressers
                  ON appointments.hairdresser_id = hairdressers.id
                WHERE
                  CONCAT(appt_date, ' ', appointments.end_time) >= NOW()
                ORDER BY
                  appt_date,
                  appointments.hairdresser_id, 
                  appointments.start_time";
        $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) == 0) {
          
          echo "There are no appointments";
          
        } else {
          
          $appointmentsTable = "<table class='table table-hover'>
          <thead>
            <tr>
              <th>Date</th>
              <th>Start</th>
              <th>End</th>
              <th>Hairdresser</th>
              <th>Client</th>
              <th>Service</th>
              <th>Appointment ID</th>
            </tr>
          </thead>
          <tbody>";
          
          while ($row = mysqli_fetch_assoc($result)) {
            
            $appointmentsTable .= "<tr>
              <th scope='row'>".$row['date']."</th>
              <td>".$row['start']."</td>
              <td>".$row['end']."</td>
              <td>".$row['hairdresser']."</td>
              <td>".$row['client']."</td>
              <td>".$row['service']."</td>
              <td>".$row['id']."</td>
            </tr>";
        
          }
          
          $appointmentsTable .= "</tbody></table>";
          
          echo $appointmentsTable;
          
        }
        
      }
      
    }
    
  }
  
  
   // Display schedules function
  function displaySchedules() {
    
    // access connection from inside this function
    global $link;
    
    if (isset($_SESSION['id'])) {
      
      if ($_SESSION['id'] > 0) {
        
        $query = "SELECT
                  CONCAT(hairdressers.first_name, ' ', hairdressers.last_name) AS hairdresser,
                  day_of_week AS day,
                  CONCAT(schedules.start_time, ' to ', schedules.end_time) AS shift
                FROM schedules
                INNER JOIN hairdressers
                  ON schedules.hairdresser_id = hairdressers.id
                ORDER BY
                  hairdressers.id,
                  day_of_week,
                  schedules.start_time";
        $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) == 0) {
          
          echo "There are no schedules";
          
        } else {
          
          $schedulesTable = "<table class='table table-hover'>
          <thead>
            <tr>
              <th>Hairdresser</th>
              <th>Day</th>
              <th>Working shift</th>
            </tr>
          </thead>
          <tbody>";
          
          while ($row = mysqli_fetch_assoc($result)) {
            
            $schedulesTable .= "<tr>
              <th scope='row'>".$row['hairdresser']."</th>
              <td>".$row['day']."</td>
              <td>".$row['shift']."</td>
            </tr>";
        
          }
          
          $schedulesTable .= "</tbody></table>";
          
          echo $schedulesTable;
          
        }
        
      }
      
    }
    
  }
  

?>