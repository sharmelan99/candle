<?php 
    session_start();
    error_reporting(0);
    include('assets/config.php');
    if(strlen($_SESSION['id']==0)) {
    header('location:logout.php');
    } else{
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="assets/css/rollsroyce.css"/>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>  
</head>

<body style=" background: url(logorr.jpg) ;">

  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">Ecarparts.lk</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Ecarparts.lk</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="dashboard.php">HOME</a></li>
          <li>
            <a href="#">Brands</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="#">Ferrari</a></li>
              <li><a href="#">Rolls Royce</a></li>
              <li><a href="#">Audi</a></li>
              <li><a href="#">BMW</a></li>
              <li><a href="">MB</a></li>
         
            </ul>
          </li>
    
          <li><a href="cart.html">Cart</a></li>
          <li><a href="login.php">Login</a></li>
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
 <div class="slideshow-container">
 
 <!-- Full-width images with number and caption text -->
 <div class="mySlides fade">
 <img src="assets/images/1.jpg" style="width:100%; height: 120vh;">
 </div>
 
 <div class="mySlides fade">
 <img src="assets/images/2.jpg" style="width:100%; height: 120vh;">
 </div>
 
 <div class="mySlides fade">
 <img src="assets/images/3.jpg" style="width:100%; height: 120vh;">
 </div>
 <div class="mySlides fade">
  <img src="assets/images/4.jpg" style="width:100%; height: 120vh;">
  </div>
  <div class="mySlides fade">
    <img src="assets/images/6.jpg" style="width:100%; height: 120vh;">
    </div>
    <div class="mySlides fade">
      <img src="assets/images/1.jpg" style="width:100%; height: 120vh;">
      </div>
      
      <div class="mySlides fade">
      <img src="assets/images/2.jpg" style="width:100%; height: 120vh;">
      </div>
      
      <div class="mySlides fade">
      <img src="assets/images/3.jpg" style="width:100%; height: 120vh;">
      </div>
      <div class="mySlides fade">
       <img src="assets/images/4.jpg" style="width:100%; height: 120vh;">
       </div>
       <div class="mySlides fade">
         <img src="assets/images/6.jpg" style="width:100%; height: 120vh;">
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
            <img class="img1" src="assets/images/culli.jpg">
            <h1>Cullinan</h1>
            <h2>British luxury car model</h2>
               <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="Culli.html">Read more....</a></p>
        </div>
        <div class="folder">
            <img class="img1" src="assets/images/ghost.jpg">
            <h1>Ghost</h1>
            <h2>British luxury car model</h2>
               <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="gost.html">Read more....</a></p>
        </div>
        <div class="folder">
            <img class="img1" src="assets/images/dawn.jpg">
            <h1>Dawn</h1>
            <h2>British luxury car model</h2>
               <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="dawn.html">Read more....</a></p>
        </div>
        <div class="folder">
          <img class="img1" src="assets/images/phan.jpg">
          <h1>Phantom</h1>
          <h2>British luxury car model</h2>
             <p> The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…<br><br><a style="text-decoration: none; padding: 8px; background: #76142D; color: white;border-radius: 5px;" href="phantom.html">Read more....</a></p>
      </div>
      <div class="folder">
        <img class="img1" src="assets/images/culli1.jpg">
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
                 <li>  <a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  
      
            </ul>
        </div>
        <div class="footerbottom">
            <p>&copy;2023|Copy right By <span>Ecarparts.lk</span> </p>
        </div>
        </div>

  <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
let i;
let slides = document.getElementsByClassName("mySlides");
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}
slides[slideIndex-1].style.display = "block";
setTimeout(showSlides, 2000); // Change image every 2 seconds
}

    // search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }
});

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}
  </script>
</body>
</html>
<?php } ?>