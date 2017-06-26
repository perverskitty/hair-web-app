<?php

  include("functions.php");

  include("views/header.php");


  if (isset($_GET['page'])) {
    
    if ($_GET['page'] == 'clients') {
      include("views/clients.php");
    } else if ($_GET['page'] == 'hairdressers') {
      include("views/hairdressers.php");
    } else if ($_GET['page'] == 'services') {
      include("views/services.php");
    } else if ($_GET['page'] == 'appointments') {
      include("views/appointments.php");
    } else if ($_GET['page'] == 'schedules') {
      include("views/schedules.php");
    } else if ($_GET['page'] == 'newclient') {
      include("views/newclient.php");
    } else if ($_GET['page'] == 'newhairdresser') {
      include("views/newhairdresser.php");
    } else if ($_GET['page'] == 'newappointment') {
      include("views/newappointment.php");
    } else if ($_GET['page'] == 'cancelappointment') {
      include("views/cancelappointment.php");
    }
    
  } else {
    
    include("views/home.php");
    
  }


  include("views/footer.php");

?>