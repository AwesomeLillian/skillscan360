<?php

// Check if the user ID is set in the session
if(isset($_SESSION['id'])) {
    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'skillscan360');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the user ID from the session
    $id = $_SESSION['id'];

    // Query to retrieve the field of study based on the user ID
    $sql = "SELECT field_of_study FROM usersignup WHERE id = $id";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            // Fetch the field of study from the result
            $row = $result->fetch_assoc();
            $field_of_study = $row['field_of_study'];

            // Include the file based on the field of study
            switch ($field_of_study) {
                case "Information Technology":
                    $questions = require('information_technology_questions.php');
                    break;
                case "Engineering":
                    $questions = require('engineering_questions.php');
                    break;
                case "Business Management":
                    $questions = require('business_management_questions.php');
                    break;
                case "Human Resource":
                    $questions = require('human_resource_questions.php');
                    break;
                case "Marketing":
                    $questions = require('marketing_questions.php');
                    break;
                case "Public Management":
                    $questions = require('public_management_questions.php');
                    break;
                case "Financial Management":
                    $questions = require('financial_management_questions.php');
                    break;
                case "Management Assistant":
                    $questions = require('management_assistant_questions.php');
                    break;
                case "Administration":
                    $questions = require('administration_questions.php');
                    break;
                case "Call Center":
                    $questions = require('call_center_questions.php');
                    break;          
                default:
                    $questions = null;
            }
            // Display the questions
                if(is_array($questions)) {
                    foreach($questions as $question) {
                        echo $question . "<br>";
                    }
                } 

        } else {
            echo "Field of study not found for this user.";
        }
    } else {
        echo "Error fetching field of study: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "User ID not set in session.";
}
?>
