<?php
    session_start();
    error_reporting(0);
    include('assets/config.php');
    if(strlen($_SESSION['id']==0)) {
    header('location:logout.php');
    } else{

// When clicking add to cart 
if (isset($_POST["addcart"])) {
    if(isset($_SESSION["cart"])) {
        // When there are already products in the cart
        $pid_array = array_column($_SESSION["cart"], "pid");
        if(!in_array($_POST["pid"], $pid_array)){
            $item = array(
                'pid' => $_POST["pid"],
                'pname' => $_POST["pname"],
                'pbrand' => $_POST['pbrand'],
                'pcondition' => $_POST['pcondition'],
                'pmodel' => $_POST['pmodel'],
                'ptype' => $_POST['ptype'],
                'price' => $_POST['price'],
                'rating' => $_POST['rating'],
                'pimage' => $_POST['pimage']
            );
            array_push($_SESSION["cart"], $item);
            echo "<script>alert('Item Successfully Added to Cart!')</script>";
            header("location: mycart.php");
        } else {
            echo "<script>alert('Item Already Added!')</script>";
        }
    } else {
        // When there are no products in the cart
        $item = array(
            'pid' => $_POST['pid'],
            'pname' => $_POST['pname'],
            'pbrand' => $_POST['pbrand'],
            'pcondition' => $_POST['pcondition'],
            'pmodel' => $_POST['pmodel'],
            'ptype' => $_POST['ptype'],
            'price' => $_POST['price'],
            'rating' => $_POST['rating'],
            'pimage' => $_POST['pimage']
        );
        $_SESSION["cart"][0]=$item;
        echo "<script>alert('Item Successfully Added to Cart!')</script>";
        header("location: mycart.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ecarparts.lk</title>
	<link rel="stylesheet" type="text/css" href="assets/css/products1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
	<div class="header">
        <div class="menu-bar">
            <div class="logo">
                <h1>EcarParts.lk</h1>
            </div>
            
            <div class="main">
                <ul>
                    <li class="active"><a href="home1.php">Home</a></li>
                    <li><a href="products1.php">Products</a></li>
                    <li><a href="mycart.php">My Cart</a></li>
                    <li><a href="home1.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <!-- Products Starts -->
            <section id="products">
                <div class="product-container">
                    <h1>Our Products</h1>
                    <div class="container text-center">
                        
                            <div class="row row-cols-1 row-cols-lg-3 g-3 g-lg-3">
                            <?php 
                                $sql=mysqli_query($con, "select * from products");
                                while($row=mysqli_fetch_array($sql))
                                {
                            ?>
                                <div class="brand1">
                                    <div class="col">
                                        <div class="p-3"><img class="rr" src="<?php echo $row['pimage'];?>"></div>
                                        <div class="p-3"><div class="heading"><?php echo $row['pname'];?></div></div>
                                        <div class="p-3">Brand: <?php echo $row['pbrand'];?></div>
                                        <div class="p-3">Condition: <?php echo $row['pcondition'];?></div>
                                        <div class="p-3">Model: <?php echo $row['pmodel'];?></div>
                                        <div class="p-3">Type: <?php echo $row['ptype'];?></div>
                                        <div class="p-3">
                                        <?php
                                            $starCount = $row['rating'];
                                            $y=1;
                                            
                                            while($starCount >= $y) {
                                                $y++;
                                        ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <?php } ?>
                                        <?php 
                                            $a=5-$starCount;
                                            $z=1;
                                            while($a >= $z){
                                                $z++;
                                        ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                        </svg>
                                        <?php } ?>
                                        </div>
                                        <div class="p-3"><h3>LKR.<?php echo $row['price'];?></h3></div>
                                        
                                        <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">
                                            <input type="hidden" name="pid" value="<?php echo $row['pid'];?>">
                                            <input type="hidden" name="pname" value="<?php echo $row['pname'];?>">
                                            <input type="hidden" name="pbrand" value="<?php echo $row['pbrand'];?>">
                                            <input type="hidden" name="pcondition" value="<?php echo $row['pcondition'];?>">
                                            <input type="hidden" name="pmodel" value="<?php echo $row['pmodel'];?>">
                                            <input type="hidden" name="ptype" value="<?php echo $row['ptype'];?>">
                                            <input type="hidden" name="price" value="<?php echo $row['price'];?>">
                                            <input type="hidden" name="rating" value="<?php echo $row['rating'];?>">
                                            <input type="hidden" name="pimage" value="<?php echo $row['pimage'];?>">
                                                    
                                            <div class="p-3">
                                                <button type="submit" name="addcart" class="btn btn-outline-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                                                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                                    </svg>
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </form>
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
                <li><a href="#"><img src="assets/images/fb.png"></a></li> 
                <li><a href="#"><img src="assets/images/insta.png"></a></li>
                <li><a href="#"><img src="assets/images/twitter.png"></a></li>
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