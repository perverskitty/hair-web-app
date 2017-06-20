<!DOCTYPE html>
<html lang="en">
  
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <!-- My custom CSS -->
    <link rel="stylesheet" href="styles.css">
    
  </head>
  
  <body>
    
    <!-- Bootstrap navbar -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Hair Salon App</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Option 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Option 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Option 3</a>
          </li>
        </ul>
    
        <div class="form-inline"> 
          
          <?php if (isset($_SESSION['id'])) { ?>
          
            <a class="btn btn-outline-success" href="?function=signout">Sign out</a>
          
          <?php } else { ?>

            <button class="btn btn-outline-success" data-toggle="modal" data-target="#myModal">Sign in</button>
          
          <?php } ?>
          
        </div>
        
      </div>
      
    </nav>