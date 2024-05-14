<?php

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: index.php'); // Redirect to the login page if not logged in
    exit();
}

// Display the user's name
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Human Resource based questions</title>
</head>
<body>
    <p>Candidate name is: <b><?php echo $name; ?></b></p>
    <h1>Human Resource Questions</h1>
   
</body>
</html>
