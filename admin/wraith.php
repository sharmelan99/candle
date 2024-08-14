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
<title>Rolls Royce Wraith</title>
<link rel="stylesheet" type="text/css" href="assets/css/wraith.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>  
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style=" background: url(asset/logorr.jpg) ;">
	
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
          <li><a href="index.php">Login</a></li>
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
    </div>
  </nav><br><br><br><br>
	<div class="productimagedetails">
    <div class="image">
      <img src="assets/images/wra.jpg" alt="Wraith">
	<h1 align="center">Rolls Royce Wraith</h1>
	</div>
  <div class="prodetails">
  <div class="details">
    <div class="deta">
	<br><br>
	<h2><u>Rolls Royce Wraith</u></h2>
	<h3>Overview</h3>
	<p>Targeted at the über-rich (not the Uber-dependent), the 2021 Rolls-Royce Wraith offers the utmost in luxury and comfort. All models of this dramatically styled coupe come with a 624-hp V-12 engine, rear-hinged doors, and the signature Spirit of Ecstasy hood ornament. Beyond that, buyers can customize their chariots in all sorts of ways, making their Wraiths into commissioned works of art. And much like commissioned works of art, the price of ownership is steep. But you probably already guessed as much. It's a Rolls-Royce, after all.</p> <br>
	
	<h3>What's New for 2021?</h3>
	<p>Rolls-Royce has made no changes to the Wraith's available options. The styling and powertrain also carry over unchanged. Rolls-Royce plans to discontinue the Wraith after the 2021 model year, to be replaced with a new two-door model in the future that may be marketed under a different name.</p> <br>
	
	<h3>Pricing and Which One to Buy</h3>
	<p>The Rolls-Royce Wraith is sold in a single trim with plenty of amenities: adaptive headlights with an auto-leveling system; rain-sensing windshield wipers; LED taillights; and power-folding, auto-dimming side mirrors, to name a few. The front-row seats provide eight-way adjustability, and every chair in the cabin is heated. All models come with dual-zone automatic climate control as well as an auto-dimming rearview mirror and a power-adjustable steering column. On the tech front, the Wraith boasts an 18-speaker stereo and a Wi-Fi hotspot. Plus, this grand tourer comes with driver-assistance features such as parking sensors and lane-departure warning.</p> <br>
	
	<h3>Engine, Transmission, and Performance</h3>
	<p>The Wraith's prodigious twin-turbocharged 6.6-liter V-12 produces 624 horsepower and 605 pound-feet of torque and mates with an eight-speed automatic transmission. Exclusively a rear-driver, this Rolls-Royce delivers handling that's poised and controlled. Its steering is lightly weighted, and its air suspension is calibrated to prevent bumps and jolts from jostling the car's passengers. We estimate that the Wraith will sprint to 60 mph in about 4.3 seconds.</p> <br>
	<br><br>
	</div>
  <div class="imagcon">
    <img src="assets/images/wra.jpg" alt="">
    <img src="assets/images/wra1.jpg" alt="">
    <img src="assets/images/wra2.jpg" alt="">
    <img src="assets/images/wra3.jpg" alt="">
  </div>
  </div>
  </div>
  </div>
	<h2 style="padding: 60px;text-align: center;">PARTS</h2>
<!-- add cart -->
<div class="partpart">
  <div class="partcon">
  <div class="product-card">
    <div class="logo-cart">
      <!--<img src="images/logo.jpg" alt="logo">-->
      <i class='bx bx-shopping-bag'></i>
    </div>
    <div class="main-images">
      <img id="blue" class="blue active" src="assets/images/part3.png" alt="blue">
    </div>
    <div class="shoe-details">
      <span class="shoe_name">Condenser Air Conditioning With Drier (9476294)</span>
      <p>Suitable for: Rolls Royce Cullinan
        Condition: This is a new genuine part
        Availability: Contact Us For Lead Time
        Condenser Air Conditioning With Drier (9476294)</p>
      <div class="stars">
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bx-star' ></i>
      </div>
    </div>
    <div class="color-price">
 
      <div class="price">
        <span class="price_num">LKR  400000</span>
        <span class="price_letter">Four laks only</span>
      </div>
    </div>
    <div class="button">
      <div class="button-layer"></div>
      <button>Add To Cart</button>
    </div>
  </div>
  <div class="product-card">
    <div class="logo-cart">
      <!--<img src="images/logo.jpg" alt="logo">-->
      <i class='bx bx-shopping-bag'></i>
    </div>
    <div class="main-images">
      <img id="blue" class="blue active" src="assets/images/part2.png" alt="blue">
    </div>
    <div class="shoe-details">
      <span class="shoe_name">Engine-Oil Cooler (8663042)</span>
      <p>Suitable for: Rolls-Royce Cullinan
        Condition: This is a new genuine part
        Availability: Contact Us For Lead Time!</p>
      <div class="stars">
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bx-star' ></i>
      </div>
    </div>
    <div class="color-price">
 
      <div class="price">
        <span class="price_num">LKR 300000</span>
        <span class="price_letter">Three Laks only</span>
      </div>
    </div>
    <div class="button">
      <div class="button-layer"></div>
      <button>Add To Cart</button>
    </div>
  </div>
  <div class="product-card">
    <div class="logo-cart">
      <!--<img src="images/logo.jpg" alt="logo">-->
      <i class='bx bx-shopping-bag'></i>
    </div>
    <div class="main-images">
      <img id="blue" class="blue active" src="assets/images/part1.png" alt="blue">
    </div>
    <div class="shoe-details">
      <span class="shoe_name">BRAKE DISC LEFT (6887397)</span>
      <p>Suitable for: Rolls-Royce Cullinan
        Condition: This is a new genuine part
        Availability: In Stock
        This is a brake disc for the front left</p>
      <div class="stars">
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bxs-star' ></i>
        <i class='bx bx-star' ></i>
      </div>
    </div>
    <div class="color-price">
 
      <div class="price">
        <span class="price_num">LKR 500000</span>
        <span class="price_letter">Five laks  only</span>
      </div>
    </div>
    <div class="button">
      <div class="button-layer"></div>
      <button>Add To Cart</button>
    </div>
  </div>
  
</div>
</div>
<div class="partpart1">
  <div class="partcon">
    <div class="product-card">
      <div class="logo-cart">
        <!--<img src="images/logo.jpg" alt="logo">-->
        <i class='bx bx-shopping-bag'></i>
      </div>
      <div class="main-images">
        <img id="blue" class="blue active" src="assets/images/part3.png" alt="blue">
      </div>
      <div class="shoe-details">
        <span class="shoe_name">Condenser Air Conditioning With Drier (9476294)</span>
        <p>Suitable for: Rolls Royce Cullinan
          Condition: This is a new genuine part
          Availability: Contact Us For Lead Time
          Condenser Air Conditioning With Drier (9476294)</p>
        <div class="stars">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bx-star' ></i>
        </div>
      </div>
      <div class="color-price">
   
        <div class="price">
          <span class="price_num">LKR  400000</span>
          <span class="price_letter">Four laks only</span>
        </div>
      </div>
      <div class="button">
        <div class="button-layer"></div>
        <button>Add To Cart</button>
      </div>
    </div>
    <div class="product-card">
      <div class="logo-cart">
        <!--<img src="images/logo.jpg" alt="logo">-->
        <i class='bx bx-shopping-bag'></i>
      </div>
      <div class="main-images">
        <img id="blue" class="blue active" src="assets/images/part2.png" alt="blue">
      </div>
      <div class="shoe-details">
        <span class="shoe_name">Engine-Oil Cooler (8663042)</span>
        <p>Suitable for: Rolls-Royce Cullinan
          Condition: This is a new genuine part
          Availability: Contact Us For Lead Time!</p>
        <div class="stars">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bx-star' ></i>
        </div>
      </div>
      <div class="color-price">
   
        <div class="price">
          <span class="price_num">LKR 300000</span>
          <span class="price_letter">Three Laks only</span>
        </div>
      </div>
      <div class="button">
        <div class="button-layer"></div>
        <button>Add To Cart</button>
      </div>
    </div>
    <div class="product-card">
      <div class="logo-cart">
        <!--<img src="images/logo.jpg" alt="logo">-->
        <i class='bx bx-shopping-bag'></i>
      </div>
      <div class="main-images">
        <img id="blue" class="blue active" src="assets/images/part1.png" alt="blue">
      </div>
      <div class="shoe-details">
        <span class="shoe_name">BRAKE DISC LEFT (6887397)</span>
        <p>Suitable for: Rolls-Royce Cullinan
          Condition: This is a new genuine part
          Availability: In Stock
          This is a brake disc for the front left</p>
        <div class="stars">
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bxs-star' ></i>
          <i class='bx bx-star' ></i>
        </div>
      </div>
      <div class="color-price">
   
        <div class="price">
          <span class="price_num">LKR 500000</span>
          <span class="price_letter">Five laks  only</span>
        </div>
      </div>
      <div class="button">
        <div class="button-layer"></div>
        <button>Add To Cart</button>
      </div>
    </div>
  
</div>
</div>

<!---
<section class="products">
  <div class="product-card">
    <div class="product-image">
      <img src="duke250nheadlight.jpg">
    </div>
    <div class="product-info">
      <h3>Head lamp</h3>
	  <button type="button" >add to cart</button>
    </div>
  </div>

  <div class="product-card">
    <div class="product-image">
      <img src="accelerator.jpeg">
    </div>
    <div class="product-info">
      <h3>Accelerator Cable</h3>
	  <button type="button" >add to cart</button>
    </div>
  </div>

  <div class="product-card">
    <div class="product-image">
      <img src="battery.jpeg">
    </div>
    <div class="product-info">
      <h3>Battery</h3>
	  <button type="button" >add to cart</button>
    </div>
  </div>

  <div class="product-card">
    <div class="product-image">
      <img src="brake pads ktm.jpeg">
    </div>
    <div class="product-info">
      <h3>Disc Brake Pads</h3>
	  <button type="button" >add to cart</button>
    </div>
  </div>

  <div class="product-card">
    <div class="product-image">
      <img src="duke mirror.jpg">
    </div>
    <div class="product-info">
      <h3>Mirrors</h3>
	  <button type="button" >add to cart</button>
    </div>
  </div>

  <div class="product-card">
    <div class="product-image">
      <img src="chainset.jpeg">
    </div>
    <div class="product-info">
      <h3>Chain Wheel Set</h3>
	  <button type="button" >add to cart</button>
    </div>
  </div>
		
  <div class="product-card">
    <div class="product-image">
      <img src="duke signal indicators.jpeg">
    </div>
    <div class="product-info">
      <h3>Signal Indicators - 1 pair</h3>
	  <button type="button" >add to cart</button>
    </div>
  </div>
	
  <div class="product-card">
    <div class="product-image">
      <img src="duke tail.jpeg">
    </div>
    <div class="product-info">
      <h3>Metal Tail</h3>
	  <button type="button" >add to cart</button>
    </div>
  </div>
</section>-->
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