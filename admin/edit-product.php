<?php
session_start();
error_reporting(0);
include('assets/config.php');
if(strlen($_SESSION['id']==0)) {
header('location:logout.php');
} else{

$did = intval($_GET['id']); // get product id

if (isset($_POST['submit'])) {
    $pname = mysqli_real_escape_string($con, $_POST['pname']);
    $pbrand = mysqli_real_escape_string($con, $_POST['pbrand']);
    $pcondition = mysqli_real_escape_string($con, $_POST['pcondition']);
    $pmodel = mysqli_real_escape_string($con, $_POST['pmodel']);
    $ptype = mysqli_real_escape_string($con, $_POST['ptype']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $rating = mysqli_real_escape_string($con, $_POST['rating']);
    $pimage = $_FILES['pimage']['name'];

    if ($_FILES['pimage']['size'] == 0) {
        $query = "UPDATE products SET pname = ?, pbrand = ?, pcondition = ?, pmodel = ?, ptype = ?, price = ?, rating = ? WHERE pid = ?";
        $stmt = mysqli_prepare($con, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'sssssssi', $pname, $pbrand, $pcondition, $pmodel, $ptype, $price, $rating, $did);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo "<script>alert('Details Updated Successfully !');</script>";
                header("Location: manage-products.php");
                exit;
            } else {
                echo "<script>alert('Failed to edit Product. Something went wrong.');</script>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Failed to prepare the SQL statement.');</script>";
        }
    } else {
        $query = "UPDATE products SET pname = ?, pbrand = ?, pcondition = ?, pmodel = ?, ptype = ?, price = ?, rating = ?, pimage = ? WHERE pid = ?";
        $stmt = mysqli_prepare($con, $query);

        if ($stmt) {
            $dir = 'assets/images/'; // Specify the directory where you want to store the uploaded images
            $profilepic_path = $dir . $pimage;
            move_uploaded_file($_FILES['pimage']['tmp_name'], $profilepic_path);

            mysqli_stmt_bind_param($stmt, 'ssssssssi', $pname, $pbrand, $pcondition, $pmodel, $ptype, $price, $rating, $profilepic_path, $did);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo "<script>alert('Details Updated Successfully !');</script>";
                header("Location: manage-products.php");
                exit;
            } else {
                echo "<script>alert('Failed to edit Product. Something went wrong.');</script>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Failed to prepare the SQL statement.');</script>";
        }
    }
}
?>





<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/edit-product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <?php $sql = mysqli_query($con, "select * from products where pid = '$did'");
        while ($data = mysqli_fetch_array($sql)) {
    ?>
    <form id="myForm" method="POST" onSubmit="return valid();" enctype="multipart/form-data">
        <h2>Hey There !!!</h2>
        <h3 style="text-align: center;">Edit Product Details</h3>
        <br />
        <p><b>Product Reg. Date: </b><?php echo htmlentities($data['createdAt']); ?></p>
        <br/>
        <div class="form-group fullname">
            <label for="productname">Product Name</label>
            <input type="text" id="pname" name="pname" value="<?php echo htmlentities($data['pname']); ?>" required="required">
        </div>
        <div class="form-group email">
            <label for="productbrand">Product Brand</label>
            <input type="text" id="pbrand" name="pbrand" value="<?php echo htmlentities($data['pbrand']); ?>" required="required">
        </div>
        <div class="form-group gender">
            <label for="productcondition">Product Condition</label>
            <select id="pcondtion" name="pcondition" required="required">
                <option value="<?php echo htmlentities($data['pcondition']); ?>"><?php echo htmlentities($data['pcondition']); ?></option>
                <option value="New">New</option>
                <option value="Used">Used</option>
            </select>
        </div>
        <div class="form-group fullname">
            <label for="productmodel">Product Model</label>
            <input type="text" id="pmodel" name="pmodel" value="<?php echo htmlentities($data['pmodel']); ?>" required="required">
        </div>
        <div class="form-group gender">
            <label for="producttype">Product Type</label>
            <select id="ptype" name="ptype" required="required">
                <option value="<?php echo htmlentities($data['ptype']); ?>"><?php echo htmlentities($data['ptype']); ?></option>
                <option value="Auto">Auto</option></option>
                <option value="Manual">Manual</option>
            </select>
        </div>
        <div class="form-group fullname">
            <label for="productprice">Product Price</label>
            <input type="text" id="price" name="price" value="<?php echo htmlentities($data['price']); ?>" required="required">
        </div>
        <div class="form-group fullname">
            <label for="productrating">Product Rating</label>
            <input type="text" id="rating" name="rating" value="<?php echo htmlentities($data['rating']); ?>" required="required">
        </div>
        <div class="form-group fullname">
            <label for="productimage">Product Image</label>
            <img class="rr" src="<?php echo htmlentities($data['pimage']); ?>">
            <input type="file" id="pimage" name="pimage">
        </div>
        <div class="form-group submit-btn">
            <input type="submit" id="submit" name="submit" value="Update">
        </div>
        <p style="text-align: center;">Navigate to Manage<a href="manage-products.php">Products</a></p>
    </form>

    <?php } ?>

    <script>
        // Selecting the form element with a unique ID
        const myForm = document.getElementById("myForm");
        const passwordInput = document.getElementById("password");
        const passToggleBtn = document.getElementById("pass-toggle-btn");

        // Function to display error messages
        const showError = (field, errorText) => {
            field.classList.add("error");
            const errorElement = document.createElement("small");
            errorElement.classList.add("error-text");
            errorElement.innerText = errorText;
            field.closest(".form-group").appendChild(errorElement);
        }

        // Function to handle form submission
        const handleFormData = (e) => {
            e.preventDefault();

            // Retrieving input elements
            const fullnameInput = document.getElementById("fullname");
            const emailInput = document.getElementById("email");
            const dateInput = document.getElementById("dob");
            const genderInput = document.getElementById("gender");
            const location = document.getElementById("location");

            // Getting trimmed values from input fields
            const fullname = fullnameInput.value.trim();
            const email = emailInput.value.trim();
            const password = passwordInput.value.trim();
            const date = dateInput.value;
            const gender = genderInput.value;
            const locat = location.value;

            // Regular expression pattern for email validation
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            // Clearing previous error messages
            document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
            document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());
        }
        // Handling form submission event
        //myForm.addEventListener("submit", handleFormData);
    </script>
</body>

</html>
<?php } ?>