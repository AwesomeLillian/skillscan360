<?php
// Include the database connection file
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if email exists in the database
    $stmt = $conn->prepare("SELECT * FROM usersignup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        echo "<script>alert('User not found.'); window.location.href = 'index.php';</script>";
    } else {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            // Start the session
            session_start();
            // Set the id session variable
            $_SESSION['id'] = $user["id"]; // Assuming "id" is the user's ID in the database
            $_SESSION['name'] = $user["name"]; // Assuming "name" is the user's name in the database
            $_SESSION['surname'] = $user["surname"]; 
            $_SESSION['province'] = $user["province"]; 
            $_SESSION['email'] = $user["email"]; 
            $_SESSION['field_of_study'] = $user["field_of_study"]; 

            // Redirect to the dashboard or any other page
            header('Location: dashboard.php');
            exit(); // Make sure to exit after redirecting
        } else {
            echo "<script>alert('Incorrect password.'); window.location.href = 'index.php';</script>";
        }
    }
}
?>
