<?php
// Database credentials
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "skillscan360"; // Change this to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the username and password match
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Check if a row is returned
    if (mysqli_num_rows($result) == 1) {
        // Start the session
        session_start();

        // Store the username in the session
        $_SESSION['username'] = $username;

        // Redirect to the dashboard or another page
        header("Location: dashboard.php");
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: index.php?error=1");
        exit();
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect back to the login page
    header("Location: index.php");
    exit();
}
?>
