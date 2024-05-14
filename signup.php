<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
    if (<?php echo isset($_SESSION['registration_success']) ? 'true' : 'false'; ?>) {
        alert('Signup successful. Redirecting to login.');
        window.location.href = 'index.php';
    }
</script>
</head>

<body>
    <form action="signup_process.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
    <br><br><br><br>
    <div style="display: flex; justify-content: center; align-items: center;">
            <img src="pictures/k-tel.jpeg" alt="Image Description" width="200px" height="200px">
        </div>
    <p><h1> Welcome to skill scan 360</h1></p>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname" required><br><br>
        <label for="province">Province:</label><br>
        <select id="province" name="province" required>
            <option value="">Select you province</option>
            <option value="Eastern Cape">Eastern Cape</option>
            <option value="Free State">Free State</option>
            <option value="Gauteng">Gauteng</option>
            <option value="KwaZulu-Natal">KwaZulu-Natal</option>
            <option value="Limpopo">Limpopo</option>
            <option value="Mpumalanga">Mpumalanga</option>
            <option value="North West">North West</option>
            <option value="Northern Cape">Northern Cape</option>
            <option value="Western Cape">Western Cape</option>
        </select><br><br>
        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="id_number">ID Number:</label><br>
        <input type="text" id="id_number" name="id_number" maxlength="13" title="ID number must be exactly 13 digits long and not contain letters." required><br><br>
        <label for="cellphone">Cell Phone:</label><br>
        <input type="text" id="cellphone" name="cellphone" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" autocomplete="off" required><br><br>
        <label for="field_of_study">Field of Study:</label><br>
        <select id="field_of_study" name="field_of_study" required>
            <option value="">Select a Field of Study</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Engineering">Engineering</option>
            <option value="Business Management">Business Management</option>
            <option value="Human Resource">Human Resource</option>
            <option value="Marketing">Marketing</option>
            <option value="Public Management">Public Management</option>
            <option value="Financila Management">Financial Management</option>
            <option value="Management Assistant">Management Assistant</option>
            <option value="Administration">Administration</option>
            <option value="CallCentre">Call Center</option>
        </select><br><br>
        <label for="profile_pic">Profile Picture:</label><br>
        <input type="file" id="profile_pic" name="profile_pic" accept="image/*" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" value="Signup">
        <p>Already have an account? <a href="index.php">Click to login</a></p>
    </form>

    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (!emailRegex.test(email)) {
                alert("Invalid email address.");
                return false;
            }

            function validateForm() {
            // Existing validation code

            var id_number = document.getElementById("id_number").value;

                if (id_number.length !== 13) {
                    alert("ID number must be exactly 13 characters long.");
                    return false;
                }

                if (!/^\d+$/.test(id_number)) {
                alert("ID number must contain only numbers.");
                return false;
                }

            return true;
            }


            var cellphone = document.getElementById("cellphone").value;
            var cellphoneRegex = /^0[0-9]{9}$/;

            if (!cellphoneRegex.test(cellphone)) {
                alert("Cellphone number must start with '0' and be 10 digits long.");
                return false;
            }

            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (password != confirm_password) {
                alert("Passwords do not match");
                return false;
            }
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/;
            if (!passwordRegex.test(password)) {
                alert("Password must contain at least one uppercase letter, one lowercase letter, one number, one special character, and be at least 8 characters long.");
                return false;
            }

            return true;
        }
    </script>
    <script>
    // Check if the registration success session variable is set
    <?php if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) { ?>
        // Display the pop-up message
        alert("Successfully registered!");
        // Unset the session variable
        <?php unset($_SESSION['registration_success']); ?>
        // Redirect to the index page
        window.location.href = "index.php";
    <?php } ?>
</script>

</body>
</html>
