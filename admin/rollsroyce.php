<?php 
    session_start();
    error_reporting(0);
    include('assets/config.php');
    if(strlen($_SESSION['id']==0)) {
    header('location:logout.php');
    } else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ecarparts.lk</title>
	<link rel="stylesheet" type="text/css" href="assets/css/rollsroyce.css">
</head>
<body>
	<div class="header">
        <div class="menu-bar">
            <div class="logo">
                <h1>EcarParts.lk</h1>
            </div>
            
            <div class="main">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="#">My Cart</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <!-- Products Starts -->
            <section id="products">
                <div class="product-container">
                    <h1>Rolls Royce World</h1>
                    <br/>
                    <div class="product-menu">
                        <div class="brand1">
                            <img class="rr" src="cart1.jpg">
                            <div class="heading">Wraith</div>
                            <div class="text">
                                The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…
                            </div>
                            <div class="read-more">
                                <a href="products.php" class="btn">Read More</a>
                            </div>
                        </div>
            
                        <div class="brand1">
                            <img class="rr" src="cart2.jpg">
                            <div class="heading">Cullinan</div>
                            <div class="text">
                                The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…
                            </div>
                            <div class="read-more">
                                <a href="products.php" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="brand1">
                            <img class="rr" src="cart3.jpg">
                            <div class="heading">Ghost</div>
                            <div class="text">
                                The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…
                            </div>
                            <div class="read-more">
                                <a href="products.php" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/><br/><br/><br/>
                    <div class="product-menu">
                        <div class="brand1">
                            <img class="rr" src="cart4.jpeg">
                            <div class="heading">Dawn</div>
                            <div class="text">
                                The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…
                            </div>
                            <div class="read-more">
                                <a href="products.php" class="btn">Read More</a>
                            </div>
                        </div>
            
                        <div class="brand1">
                            <img class="rr" src="cart6.jpg">
                            <div class="heading">Phantom</div>
                            <div class="text">
                                The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…
                            </div>
                            <div class="read-more">
                                <a href="products.php" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="brand1">
                            <img class="rr" src="cart7.jpg">
                            <div class="heading">Cullinan</div>
                            <div class="text">
                                The Rolls-Royce Wraith is a full-size ultra-luxury car/grand tourer manufactured by Rolls-Royce Motor Cars and based on the chassis of the Rolls-Royce Ghost, shares its name with the 1938 model by the…
                            </div>
                            <div class="read-more">
                                <a href="products.php" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Products Ends -->
        </div>
    </div>
    <div class="footerv">
        <div class="footercontent">
            <h3>Ecarparts.lk Private Limited Company</h3>
            <p>We give the option to you </p>
            <ul class="social">
                <li><a href="#"><img src="fb.png"></a></li> 
                <li><a href="#"><img src="insta.png"></a></li>
                <li><a href="#"><img src="twitter.png"></a></li>
            </ul>
        </div>
        <div class="footerbottom">
            <p>&copy;2023|Copy right By <span>Ecarparts.lk</span> </p>
        </div>
    </div>
</body>
</html>
<?php } ?>