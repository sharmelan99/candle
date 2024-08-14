<?php
session_start();
error_reporting(0);
include('assets/config.php');
if(strlen($_SESSION['id']==0)) {
    header('location:logout.php');
} else{

    if (isset($_GET['del'])) {
        $del_pid = $_GET['del'];
    
        foreach ($_SESSION["cart"] as $keys => $values) {
            if ($values["pid"] == $del_pid) {
                unset($_SESSION["cart"][$keys]);
                echo "<script>alert('Item Removed from cart')</script>";
                break; // Break the loop once the item is found and removed
            }
        }
    
        header("Location: mycart.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li><a href="#">My Cart</a></li>
                    <li><a href="home1.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <!-- Products Starts -->
            <section id="products">
                <div class="product-container">
                    <h1>My Cart</h1>
                    <div class="container text-center">
                        <div class="row row-cols-1 row-cols-lg-3 g-3 g-lg-3">
                            <?php 
                            if (!empty($_SESSION["cart"])) {
                                foreach ($_SESSION["cart"] as $keys => $values) {
                            ?>
                                    <div class="brand1">
                                        <div class="col">
                                            <div class="p-3"><img class="rr" src="<?php echo $values['pimage']; ?>"></div>
                                            <div class="p-3"><div class="heading"><?php echo $values['pname']; ?></div></div>
                                            <div class="p-3">Brand: <?php echo $values['pbrand']; ?></div>
                                            <div class="p-3">Condition: <?php echo $values['pcondition']; ?></div>
                                            <div class="p-3">Model: <?php echo $values['pmodel']; ?></div>
                                            <div class="p-3">Type: <?php echo $values['ptype']; ?></div>
                                            <div class="p-3">
                                                <?php
                                                $starCount = $values['rating'];
                                                $y = 1;
                                                while ($starCount >= $y) {
                                                    $y++;
                                                ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                    </svg>
                                                <?php } ?>
                                                <?php
                                                $a = 5 - $starCount;
                                                $z = 1;
                                                while ($a >= $z) {
                                                    $z++;
                                                ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                    </svg>
                                                <?php } ?>
                                            </div>
                                            <div class="p-3"><h3>LKR.<?php echo $values['price']; ?></h3></div>
                                            <div class="p-3">
                                                <button onclick="removeItem(<?php echo $values['pid']; ?>)" class="btn btn-outline-danger">Remove</button>
                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                                <h4>No items in the cart</h4>
                            <?php } ?>
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
                <li><a href="#"><img src="assets/images/fb.png"></a></li> 
                <li><a href="#"><img src="assets/images/insta.png"></a></li>
                <li><a href="#"><img src="assets/images/twitter.png"></a></li>
            </ul>
        </div>
        <div class="footerbottom">
            <p>&copy;2023 | Copy right By <span>Ecarparts.lk</span> </p>
        </div>
    </div>

    <script>
        function removeItem(pid) {
            window.location.href = "mycart.php?del=" + pid;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<?php } ?>