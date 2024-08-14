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
	<link rel="stylesheet" type="text/css" href="assets/css/home1.css">
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
                    <li><a href="products1.php">Products</a></li>
                    <li><a href="mycart.php">My Cart</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <!-- Brands Starts -->
            <section id="brands">
                <div class="container">
                    <h1>Brands</h1>
                    <br/>
                    <div class="img-menu">
                        <div class="brand">
                            <img class="rr" src="assets/images/7.jpg">
                            <div class="button">
                                <a href="rollsroyce.php" class="btn">Rolls Royce</a>
                            </div>
                        </div>
            
                        <div class="brand">
                            <img class="rr" src="assets/images/2.jpg">
                            <div class="button">
                                <a href="#" class="btn">Ferrari</a>
                            </div>
                        </div>
                        <div class="brand">
                            <img class="rr" src="assets/images/3.jpg">
                            <div class="button">
                                <a href="#" class="btn">Audi</a>
                            </div>
                        </div>
                    </div><br/><br/><br/>
                    <div class="img-menu">
                        <div class="brand">
                            <img class="rr" src="assets/images/4.jpg">
                            <div class="button">
                                <a href="#" class="btn">BMW</a>
                            </div>
                        </div>
                        <div class="brand">
                            <img class="rr" src="assets/images/5.jpg">
                            <div class="button">
                                <a href="#" class="btn">Mercedes Benz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Brands Ends -->

            <!-- Products Starts -->
            <section id="products">
                <div class="product-container">
                    <h1>Our Products</h1>
                    <br/>
                    <div class="product-menu">
                        <div class="brand1">
                            <img class="rr" src="assets/images/cart1.jpg">
                            <div class="heading">Front Buffer</div>
                            <div class="text">
                                A Nissan front bumper is an essential component of a vehicle's front end, designed to absorb impact and protect the vehicle's occupants in case of a collision. It also contributes to the car's aesthetics and may include features like grilles and fog lights.
                            </div>
                            <div class="read-more">
                                <a href="products1.php" class="btn">Read More</a>
                            </div>
                        </div>
            
                        <div class="brand1">
                            <img class="rr" src="assets/images/cart2.jpg">
                            <div class="heading">Engine</div>
                            <div class="text">
                                Nissan engines are internal combustion powerplants manufactured by Nissan Motor Co., Ltd. They come in various configurations, including gasoline and diesel, and are designed to provide reliable and efficient propulsion for Nissan vehicles, known for their performance and fuel economy.
                            </div>
                            <div class="read-more">
                                <a href="products1.php" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="brand1">
                            <img class="rr" src="assets/images/cart3.jpg">
                            <div class="heading">Display Screen</div>
                            <div class="text">
                                A car TV set, also known as an in-car entertainment system or car infotainment system, is a multimedia device installed in a vehicle to provide entertainment and information to passengers during a car journey. 
                            </div>
                            <div class="read-more">
                                <a href="products1.php" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/><br/><br/><br/>
                    <div class="product-menu">
                        <div class="brand1">
                            <img class="rr" src="assets/images/cart4.jpeg">
                            <div class="heading">Seats</div>
                            <div class="text">
                                A car seat, also known as an automobile seat, is a specially designed seat used in vehicles to provide a secure and comfortable seating arrangement for passengers, primarily to ensure their safety during travel.
                            </div>
                            <div class="read-more">
                                <a href="products1.php" class="btn">Read More</a>
                            </div>
                        </div>
            
                        <div class="brand1">
                            <img class="rr" src="assets/images/cart6.jpg">
                            <div class="heading">Back Door</div>
                            <div class="text">
                                A vehicle's back door is typically the rear access point, allowing passengers and cargo to enter and exit the vehicle's rear compartment. It often features hinges for opening and closing, locks, and safety mechanisms.
                            </div>
                            <div class="read-more">
                                <a href="products1.php" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="brand1">
                            <img class="rr" src="assets/images/cart7.jpg">
                            <div class="heading">Air Bags</div>
                            <div class="text">
                                Providing a cushioning barrier between the vehicle's occupants and hard surfaces, reducing the risk of injury in an accident
                            </div>
                            <div class="read-more">
                                <a href="products1.php" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Products Ends -->
            
            <!-- About Us Starts -->
            <section id="aboutus">
                <div class="container">
                    <h1>About Us</h1>
                    <br/>
                    <p>
                        As a car company, our mission is to create innovative and high-quality vehicles that cater to the diverse needs and desires of our customers. We have a rich history of automotive excellence, dating back to our founding. Our commitment to engineering excellence, design innovation, and environmental sustainability drives us to produce vehicles that are both reliable and forward-thinking.
                    </p>
                    <p><br><br>
                        Our dedicated team of professionals, from engineers and designers to technicians and customer service representatives, work tirelessly to ensure that our cars meet the highest safety and performance standards. We prioritize customer satisfaction, aiming to exceed expectations in every aspect of our business.
                    </p><br><br>
                    <p>
                        In addition to producing exceptional vehicles, we actively invest in research and development, striving to push the boundaries of automotive technology. We recognize the importance of sustainability and are committed to reducing our environmental footprint, from manufacturing processes to the efficiency of our vehicles. 
                    </p>
                </div>
            </section>
            <!-- About Us Ends -->
        </div>
    </div>
    <div class="footerv">
        <div class="footercontent">
            <h3>Ecarparts.lk Private Limited Company</h3>
            <p>We give the option to you </p>
            <ul class="social">
                <li><a href="#"><img src="assets/images/fb.png"></a></li> 
                <li><a href="#"><img src="assets/images/insta.png"></a></li>
                <li><a href="#"><img src="assets/images/twitter.png"></a></li>
            </ul>
        </div>
        <div class="footerbottom">
            <p>&copy;2023|Copy right By <span>Ecarparts.lk</span> </p>
        </div>
    </div>
</body>
</html>
<?php } ?>