<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <form action="login_process.php" method="post" onsubmit="return validateForm()">
        <div style="display: flex; justify-content: center; align-items: center;">
            <img src="pictures/k-tel.jpeg" alt="Image Description" width="200px" height="200px">
        </div>
        <p><h1> Login</h1></p>
        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
        <p>Don't have an account? <a href="signup.php">Click to sign up</a></p>
        <p>Forgot your password? <a href="forgot_password.php">Click here</a></p>
    </form>

    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (!emailRegex.test(email)) {
                alert("Invalid email address.");
                return false;
            }

            return true;
        }
    </script>

</body>
</html>
