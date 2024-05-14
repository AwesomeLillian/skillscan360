<?php
// Include the database connection file
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $id = $_POST['user_id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $province = $_POST['province'];
    $email = $_POST['email'];
    $id_number = $_POST['id_number'];
    $cellphone = $_POST['cellphone'];
    $field_of_study = $_POST['field_of_study'];

    // Handle profile picture upload
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
        $profile_pic_tmp = $_FILES['profile_pic']['tmp_name'];
        $profile_pic_data = file_get_contents($profile_pic_tmp);
        $profile_pic_base64 = base64_encode($profile_pic_data);
    } else {
        // Use existing profile picture if no new picture is uploaded
        $profile_pic_base64 = null;
    }

    // Update user's profile in the database using a prepared statement
    $stmt = $conn->prepare("UPDATE usersignup SET name=?, surname=?, province=?, email=?, id_number=?, cellphone=?, field_of_study=?, profile_pic=? WHERE id=?");
    $stmt->bind_param("ssssssssi", $name, $surname, $province, $email, $id_number, $cellphone, $field_of_study, $profile_pic_base64, $id);
    if ($stmt->execute()) {
        // Close the prepared statement
        $stmt->close();
        // Redirect to the same page after updating
        echo "<script>alert('Profile updated successfully.'); window.location.href = 'save_profile.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error updating profile: " . $stmt->error . "');</script>";
    }
}

// Close the database connection
$conn->close();
?>
