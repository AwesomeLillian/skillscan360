<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h2>Forgot Password</h2>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Reset Password">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the email from the form
            $email = $_POST['email'];

            // Check if the email exists in the database
            $conn = new mysqli("localhost", "root", "", "skillscan360");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM usersignup WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Email exists, generate a unique token for resetting the password
                $token = generateResetToken();

                // Store the token in your database along with the email for later verification
                // For simplicity, we'll skip this step

                // Update the password in the database
                $newPassword = generateRandomPassword(); // Generate a new random password
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT); // Hash the password
                $updateSql = "UPDATE usersignup SET password = '$hashedPassword' WHERE email = '$email'";
                if ($conn->query($updateSql) === TRUE) {
                    // Password updated successfully
                    $message = "Your password has been reset. Your new password is: $newPassword";
                } else {
                    $message = "Error updating password: " . $conn->error;
                }

                // Display the message to the user
                echo "<p class='message' style='color: white;'>$message</p>";
            } else {
                echo "<p>Email not found in the database.</p>";
            }

            $conn->close();
        }

        function generateResetToken() {
            // Generate a unique token for resetting the password
            return md5(uniqid(mt_rand(), true));
        }

        function generateRandomPassword($length = 10) {
            // Generate a random password
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $password;
        }
        ?>
    </form>
</body>
</html>
