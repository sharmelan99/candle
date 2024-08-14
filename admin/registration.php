<?php
include_once('assets/config.php');

if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5($_POST['password']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];

    $query = "INSERT INTO admin (fullname, email, password, dob, gender, location) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ssssss", $fullname, $email, $password, $dob, $gender, $location);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<script>alert('You have successfully joined our community!');</script>";
        header("Location: index.php");
    } else {
        echo "<script>alert('Failed to register. Something went wrong.');</script>";
    }
    mysqli_stmt_close($stmt);
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <form id="myForm" method="POST" onSubmit="return valid();">
        <h2>Hey There !!!</h2>
        <h3 style="text-align: center;">Join our Community</h3>
        <br />
        <div class="form-group fullname">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter Your Full Name" required="required">
        </div>
        <div class="form-group email">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email Address" required="required">
        </div>
        <div class="form-group password">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required="required">
            <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
        </div>
        <div class="form-group date">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required="required">
        </div>
        <div class="form-group gender">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required="required">
                <option value="" selected disabled>Select Your Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group location">
            <label for="location">Region</label>
            <select id="location" name="location" required="required">
                <option value="" selected disabled>Select Your Location</option>
                <option value="Ampara">Ampara</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Badulla">Badulla</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Colombo">Colombo</option>
                <option value="Galle">Galle</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Hampantota">Hampantota</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Kandy">Kandy</option>
                <option value="Kegalle">Kegalle</option>
                <option value="Kilinochi">Kilinochi</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Mannar">Mannar</option>
                <option value="Matale">Matale</option>
                <option value="Matara">Matara</option>
                <option value="Moneragala">Moneragala</option>
                <option value="Mullaitivu">Mullaitivu</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Polannaruwa">Polannaruwa</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Vavuniya">Vavuniya</option>
            </select>
        </div>
        <div class="form-group submit-btn">
            <input type="submit" id="submit" name="submit" value="Register">
        </div>
        <p style="text-align: center;">Already Have an Account <a href="index.php">Login</a> or <a href="../index.php">Home</a> Page</p>
    </form>

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
            const emailInput = document.getElementById("email");

            // Getting trimmed values from input fields
            const email = emailInput.value.trim();
            const password = passwordInput.value.trim();

            // Regular expression pattern for email validation
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            // Clearing previous error messages
            document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
            document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

            // Performing validation checks
            if (!emailPattern.test(email)) {
                showError(emailInput, "Enter a valid email address");
            }
            if (password === "") {
                showError(passwordInput, "Enter your password");
            }

            // Checking for any remaining errors before form submission
            const errorInputs = document.querySelectorAll(".form-group .error");
            if (errorInputs.length > 0) return;

            // Submitting the form
            myForm.submit();
        }

        // Toggling password visibility
        passToggleBtn.addEventListener('click', () => {
            passToggleBtn.className = passwordInput.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        });

        // Handling form submission event
        //myForm.addEventListener("submit", handleFormData);
    </script>
</body>

</html>
