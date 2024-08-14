<?php
session_start();
error_reporting(0);
include('assets/config.php');
if (strlen($_SESSION['id'] == 0)) {
  header('location:logout.php');
} else {
?>

  <!doctype html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/rollsroyce.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>

  <body style=" background: url(assets/images/logorr.jpg) ;">

    <nav>
      <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="#">Ecarparts.lk</a></div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name">Ecarparts.lk</span>
            <i class='bx bx-x'></i>
          </div>
          <ul class="links">
            <li><a href="home1.php">HOME</a></li>
            <li>
              <a href="#">Brands</a>
              <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
              <ul class="htmlCss-sub-menu sub-menu">
                <li><a href="#">Ferrari</a></li>
                <li><a href="#">Rolls Royce</a></li>
                <li><a href="#">Audi</a></li>
                <li><a href="#">BMW</a></li>
                <li><a href="#">MB</a></li>

              </ul>
            </li>

            <li><a href="mycart.php">MyCart</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="search-box">
          <i class='bx bx-search'></i>
          <div class="input-box">
            <input type="text" placeholder="Search...">
          </div>
        </div>
      </div>
    </nav>
    <div class="slideshow">
      <!-- Slideshow container -->
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/wra.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/images/wra1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/images/wra2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </div><br><br><br>
    <h1 style="text-align: center; font-weight: 800;">Rolls Royce</h1>
    <p class="Pr" style="text-align: center;">Welcome to the Rolls Royce World</p>
    <br><br><br>
    <div class="productlist">
      <div class="product">
        <div class="folder">
          <img class="img1" src="assets/images/wra.jpg">
          <h1> Wraith</h1>
          <h2>British luxury car model</h2>
          <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="wraith.html">Read more....</a></p>
        </div>
        <div class="folder">
          <img class="img1" src="assets/images/wra1.jpg">
          <h1>Cullinan</h1>
          <h2>British luxury car model</h2>
          <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="Culli.html">Read more....</a></p>
        </div>
        <div class="folder">
          <img class="img1" src="assets/images/wra2.jpg">
          <h1>Ghost</h1>
          <h2>British luxury car model</h2>
          <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="gost.html">Read more....</a></p>
        </div>
        <div class="folder">
          <img class="img1" src="assets/images/wra3.jpg">
          <h1>Dawn</h1>
          <h2>British luxury car model</h2>
          <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="dawn.html">Read more....</a></p>
        </div>
        <div class="folder">
          <img class="img1" src="assets/images/wra.jpg">
          <h1>Phantom</h1>
          <h2>British luxury car model</h2>
          <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="phantom.html">Read more....</a></p>
        </div>
        <div class="folder">
          <img class="img1" src="assets/images/wra.jpg">
          <h1>Cullinan</h1>
          <h2>British luxury car model</h2>
          <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="Culli.html">Read more....</a></p>
        </div>
      </div>
    </div>
    <!--Footer-->
    <div class="footerv">
      <div class="footercontent">
        <h3>Ecarparts.lk Private Limited Company</h3>
        <p>We give the option to you </p>
        <ul class="social">
          <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>


        </ul>
      </div>
      <div class="footerbottom">
        <p>&copy;2023|Copy right By <span>Ecarparts.lk</span> </p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>

  </html>
<?php } ?>