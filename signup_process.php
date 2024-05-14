<?php
session_start(); // Start the session

include 'config.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $province = $_POST["province"];
    $email = $_POST["email"];
    $id_number = $_POST["id_number"];
    $cellphone = $_POST["cellphone"];
    $field_of_study = $_POST["field_of_study"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if password and confirm password match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.');</script>";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists in the database
    $stmt = $conn->prepare("SELECT * FROM usersignup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists.'); window.location.href = 'signup.php';</script>";
        exit;
    }    

    // Upload profile picture to directory and store path in database
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
        // Specify the directory where the file will be saved
        $upload_dir = 'profile_pictures/';

        // Generate a unique name for the file
        $file_name = uniqid('profile_') . '.' . pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $upload_dir . $file_name)) {
            // File was successfully uploaded
            $profile_pic_path = $upload_dir . $file_name;

            // Prepare and bind the SQL statement to insert path into database
            $stmt = $conn->prepare("INSERT INTO usersignup (name, surname, province, email, id_number, cellphone, field_of_study, password, profile_pic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            if (!$stmt) {
                echo "<script>alert('Error preparing statement: " . $conn->error . "');</script>";
                exit;
            }

            $stmt->bind_param("ssssssssb", $name, $surname, $province, $email, $id_number, $cellphone, $field_of_study, $hashed_password, $profile_pic_path);

            // Execute the statement
            if ($stmt->execute()) {
                // Set a session variable for successful registration
                $_SESSION['registration_success'] = true;
                // Redirect to the same page
                echo "<script>alert('Signup successful. Redirecting to login.'); window.location.href = 'index.php';</script>";
                exit;
            } else {
                echo "<script>alert('Error signing up: " . $stmt->error . "');</script>";
            }

            // Close the statement
            $stmt->close();
        } else {
            // Error moving file
            echo "<script>alert('Error moving file.');</script>";
            exit;
        }
    } else {
        // Error uploading profile picture
        echo "<script>alert('Error uploading profile picture.');</script>";
        exit;
    }

    // Close the connection
    $conn->close();
}
?>