<!DOCTYPE html>
<html>

<head>
  <title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">hotel website </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="activities.php">activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="branches.php">branches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="restaurant.php">restaurant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="room.php">rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">contact us</a>
          </li>


        </ul>

      </div>
    </div>
  </nav>
  <div class="jumbotron">
    <h1>We are Luxurious Hotels</h1>
    <p>HERE IS A LIST OF OUR ACTIVITIES</p>
  </div>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">activities</h2>
    </div>
    <div id="de" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#de" data-slide-to="0" class="active"></li>
        <li data-target="#de" data-slide-to="1"></li>
        <li data-target="#de" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/cc15.jpg" alt="SWIMMING" width="1100" height="500">
          <div class="carousel-caption">
            <h3>swimming</h3>
            <p>Have a nice swim</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/cc16.jpg" alt="POOL TABLE" width="1100" height="500">
          <div class="carousel-caption">
            <h3>pool table</h3>
            <p>lets play some shots</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/cc17.jpg" alt="GOLF" width="1100" height="500">
          <div class="carousel-caption">
            <h2><b>golf</b></h2>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#de" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#de" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center">Created By: <br /> IU1941220002 <br /> IU1941220094
      <br />we have created this hotel web application using bootstrap,css,html,php,mysql
    </p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>