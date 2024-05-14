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
    <title>Information Technology Questions</title>
</head>
<body>
    <p>Candidate name is: <b><?php echo $name; ?></b></p>
    <h1>Information Technology Questions</h1>
    <form method="post" action="submit_answers.php">
        <label for="question1">1. What is the difference between interpreted and compiled programming languages?</label><br>
        <textarea id="question1" name="answer1" rows="4" cols="50"></textarea><br><br>

        <label for="question2">2. Explain the concept of object-oriented programming (OOP).</label><br>
        <textarea id="question2" name="answer2" rows="4" cols="50"></textarea><br><br>

        <!-- Add more questions here -->

        <input type="submit" value="Submit">
    </form>
</body>
</html>
