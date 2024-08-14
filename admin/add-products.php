<?php
    session_start();
    error_reporting(0);
    include('assets/config.php');
    if(strlen($_SESSION['id']==0)) {
    header('location:logout.php');
    } else{

if (isset($_POST['submit'])) {

    $pname = mysqli_real_escape_string($con, $_POST['pname']);
    $pbrand = mysqli_real_escape_string($con, $_POST['pbrand']);
    $pcondition = mysqli_real_escape_string($con, $_POST['pcondition']);
    $pmodel = mysqli_real_escape_string($con, $_POST['pmodel']);
    $ptype = mysqli_real_escape_string($con, $_POST['ptype']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $rating = mysqli_real_escape_string($con, $_POST['rating']);

    $pimage = $_FILES['pimage']['name'];
    $bb = explode('.', $pimage);
    $ext = strtolower(end($bb));

    if (in_array($ext, ['jpg', 'png', 'jpeg'])) {
        $dir = 'assets/images/';// Specify the directory where you want to store the uploaded images
        $profilepic_path = $dir . $pimage;
        move_uploaded_file($_FILES['pimage']['tmp_name'], $profilepic_path);

        $query = "INSERT INTO products (pname, pbrand, pcondition, pmodel, ptype, price, rating, pimage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "ssssssss", $pname, $pbrand, $pcondition, $pmodel, $ptype, $price, $rating, $profilepic_path);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('New Product Successfully Added !');</script>";
            header("Location: add-products.php");
            exit; // Exit to prevent further script execution
        } else {
            echo "<script>alert('Failed to Add Product. Something went wrong.');</script>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo 'You have chosen ' . $ext . '. Please choose png, jpg, or jpeg file';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/add-products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <form id="myForm" method="POST" onSubmit="return valid();" enctype="multipart/form-data">
        <h2>Hey There !!!</h2>
        <h3 style="text-align: center;">Add Products</h3>
        <br />
        <div class="form-group fullname">
            <label for="productname">Product Name</label>
            <input type="text" id="pname" name="pname" placeholder="Enter New Product Name" required="required">
        </div>
        <div class="form-group email">
            <label for="productbrand">Product Brand</label>
            <input type="text" id="pbrand" name="pbrand" placeholder="Enter New Product Brand" required="required">
        </div>
        <div class="form-group gender">
            <label for="productcondition">Product Condition</label>
            <select id="pcondtion" name="pcondition" required="required">
                <option value="" selected disabled>Select product's condition</option>
                <option value="New">New</option>
                <option value="Used">Used</option>
            </select>
        </div>
        <div class="form-group fullname">
            <label for="productmodel">Product Model</label>
            <input type="text" id="pmodel" name="pmodel" placeholder="Enter Product's Model Name" required="required">
        </div>
        <div class="form-group gender">
            <label for="producttype">Product Type</label>
            <select id="ptype" name="ptype" required="required">
                <option value="" selected disabled>Select product's type</option>
                <option value="Auto">Auto</option></option>
                <option value="Manual">Manual</option>
            </select>
        </div>
        <div class="form-group fullname">
            <label for="productprice">Product Price</label>
            <input type="text" id="price" name="price" placeholder="Enter Product's price in Rs." required="required">
        </div>
        <div class="form-group fullname">
            <label for="productrating">Product Rating</label>
            <input type="text" id="rating" name="rating" placeholder="Give a star count based on product's usable condition" required="required">
        </div>
        <div class="form-group fullname">
            <label for="productimage">Product Image</label>
            <input type="file" id="pimage" name="pimage" placeholder="Upload Product Image Here">
        </div>
        <div class="form-group submit-btn">
            <input type="submit" id="submit" name="submit" value="Add Product">
        </div>
        <p style="text-align: center;">Navigate to Manage<a href="manage-products.php">Product</a></p>
    </form>

    <script>
        // Selecting the form element with a unique ID
        const myForm = document.getElementById("myForm");
        const passwordInput = document.getElementById("password");

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
            const emailInput = document.getElementById("email");

            // Getting trimmed values from input fields
            const email = emailInput.value.trim();

            // Regular expression pattern for email validation
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            // Clearing previous error messages
            document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
            document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

            // Performing validation checks
            if (!emailPattern.test(email)) {
                showError(emailInput, "Enter a valid email address");
            }

            // Checking for any remaining errors before form submission
            const errorInputs = document.querySelectorAll(".form-group .error");
            if (errorInputs.length > 0) return;

            // Submitting the form
            myForm.submit();
        }

    </script>
</body>

</html>
<?php } ?>