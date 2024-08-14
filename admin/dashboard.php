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
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
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
                    <li><a href="manage-products.php">Products</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="content">

            <!--Manage Products Starts -->
            <section id="products">
                <div class="product-container">
                    <h1>Manage Menu</h1>
                    <br/>
                    <div class="product-menu">
                        <div class="manage-brand">
                            <img class="manage-rr" src="assets/images/add.jpg">
                            <div class="manage-more">
                                <a href="add-products.php" class="manage-btn">Add Products</a>
                            </div>
                        </div>
            
                        <div class="manage-edt-brand">
                            <img class="manage-rr" src="assets/images/manage1.png">
                            <div class="manage-more">
                                <a href="manage-products.php" class="manage-edt-btn">Manage Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Manage Products Ends -->

            <!-- Brands Starts -->
            <section id="brands">
                <div class="container">
                    <h1>Brands</h1>
                    <br/>
                    <div class="img-menu">
                        <div class="brand">
                            <img class="rr" src="assets/images/7.jpg">
                            <div class="button">
                                <a href="rollsroyce1.php" class="btn">Rolls Royce</a>
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