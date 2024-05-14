<?php
// Start the session
session_start();

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $name; ?> to the skill scan 360</h1>
        <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form>
    </header>
    <div class="main-container">
        <aside class="left-sidebar">
            <h2>Tests</h2>
            <ul>
                <a href="?page=profile">Profile</a><br><br>
                <a href="?page=personality_rules">Personality test</a><br><br>
                <a href="?page=field_of_study">Field of study test</a><br><br>
                <a href="?page=feedback">Feedback</a><br><br>
            </ul>
        </aside>
        <section id="main-content" class="main-content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'] . '.php';
                if (file_exists($page)) {
                    include $page;
                } else {
                    echo "Page not found.";
                }
            }
            ?>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 K-Tel Solution (010 800 1786)</p>
    </footer>
</body>
</html>
