<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <!--My CSS -->
  <link href="css/home.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- My JS -->
  <script src="js/myJavaScript.js"></script>
  <title>Rocky Rochester</title>

</head>

<body>

<div class="topBlock">
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a href="index.php">
      <img src="img/WebsiteName.png" width="300" class="d-inline-block align-top" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mascot.php">Mascot</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="meet jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Events</h1>
    <p class="lead">Find events around Rochester to listen to our music and have a fun time with your friends and family.</p>
  </div>
</div>

<div class="container">
  <div class = "event">
    <div class = "eventImg">
      <img src="img/img7.jpg" alt="Nature" style="width:50%;">
    </div>
    <div class="text-block">
      <div class="card" style="width: 10rem;">
        <div class="card-body">
          <h5 class="card-title">Opening Ceremony - Roc Film Studios Film Festival</h5>
          <h6 class="card-subtitle mb-2 text-muted">80 Culver Rd, Rochester, NY 14610</h6>
          <p class="card-text">9/1/20 6:30 PM</p>
          <a href="#" class="card-link">Rochester Film Studios</a> <!-- This can be taken out if there is no link associated with the event. -->
        </div>
      </div>
    </div>
  </div>

  <div class = "event">
    <div class = "eventImg">
      <img src="img/img5.jpg" alt="Nature" style="width:50%;">
    </div>
    <div class="text-block">
      <div class="card" style="width: 10rem;">
        <div class="card-body">
          <h5 class="card-title">Event</h5>
          <h6 class="card-subtitle mb-2 text-muted">address</h6>
          <p class="card-text">date and time</p>
          <a href="#" class="card-link">link to where the event might take place</a> <!-- This can be taken out if there is no link associated with the event. -->
        </div>
      </div>
    </div>
  </div>
</div> <!-- Container -->

<!-- Footer -->
<footer class="py-5">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; RockyRochester 2020</p>
  </div>
  <!-- /.container -->
</footer>

</body>