<?php

session_start();
error_reporting(0);
include('assets/config.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {

    if (isset($_GET['del'])) {
        $pid = $_GET['id'];
        $pid = $_GET['id'];
        $pid = mysqli_real_escape_string($con, $pid);
        $sql = "DELETE FROM products WHERE pid = '$pid'";
        if (mysqli_query($con, $sql)) {
            $_SESSION['msg'] = "Product deleted successfully!";
        } else {
            $_SESSION['msg'] = "Error deleting data: " . mysqli_error($con);
        }
        header("Location: manage-products.php");
        exit();
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Ecarparts.lk</title>
        <link rel="stylesheet" type="text/css" href="assets/css/manage-products.css">
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
                        <li class="active"><a href="dashboard.php">Home</a></li>
                        <li><a href="manage-products.php">Products</a></li>
                        <li><a href="#aboutus">About Us</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>

            <div class="content">

                <!-- Products Starts -->
                <section id="products">
                    <div class="product-container">
                        <h1>Manage Products</h1>
                        <br />
                        <div class="product-menu">
                            <div class="manage-brand">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Brand</th>
                                            <th>Condition</th>
                                            <th>Model</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = mysqli_query($con, "select * from products");
                                        while ($row = mysqli_fetch_array($sql)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['pid']; ?></td>
                                                <td><?php echo $row['pname']; ?></td>
                                                <td><?php echo $row['pbrand']; ?></td>
                                                <td><?php echo $row['pcondition']; ?></td>
                                                <td><?php echo $row['pmodel']; ?></td>
                                                <td><?php echo $row['ptype']; ?></td>
                                                <td><?php echo $row['price']; ?></td>
                                                <td><?php echo $row['rating']; ?></td>
                                                <td>
                                                    <a href="edit-product.php?id=<?php echo $row['pid']; ?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="btn btn-outline-light">Edit</i></a>
                                                    <a href="manage-products.php?id=<?php echo $row['pid']; ?>&del=delete" onClick="return confirm('Are you sure you want to delete the Product Details ?')" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="btn btn-outline-danger">Remove</i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
                <p>&copy;2023|Copy right By <span>Ecarparts.lk</span> </p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } ?>