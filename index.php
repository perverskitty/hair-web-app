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
    }
    
  } else {
    
    include("views/home.php");
    
  }


  include("views/footer.php");

?>