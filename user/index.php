<?php
session_start();
include_once('assets/config.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE email=? AND password=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['login'] = $email;
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['fullname'];
        header("location: home1.php");
        exit();
    } else {
        $_SESSION['errmsg'] = "Invalid Credentials";
        header("location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <form id="myForm" method="POST">
        <h2>Hey There !!!</h2>
        <h3 style="text-align: center;">Login With Your Credentials</h3>
        <br />
        <span style="color: red;">
		    <?php
			    // Display the error message
                echo htmlentities($_SESSION['errmsg']);
                $_SESSION['errmsg'] = ""; // Reset the error message after displaying
			?>
		</span>
        <div class="form-group email">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email Address" required="required">
        </div>
        <div class="form-group password">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required="required">
            <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
        </div>
        <div class="form-group submit-btn">
            <input type="submit" name="submit" value="Submit">
        </div>
        <p style="text-align: center;">Don't Have an Account ?? <a href="registration.php">Create New Account</a></p>
        <p style="text-align: center;">Back to <a href="../index.php">Home</a> Page</p>
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
