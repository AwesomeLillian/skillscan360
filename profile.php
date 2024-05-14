<?php
// Include the database connection file
include 'config.php';

// Check if the user is logged in (assuming you have a way to determine this)
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    // Fetch user data from the database
    $stmt = $conn->prepare("SELECT * FROM usersignup WHERE id = ?");
    $stmt->bind_param("i", $id);
    if (!$stmt->execute()) {
        die('Error: ' . $stmt->error);
    }
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "<h1>Profile</h1>";
        echo "<table>";
        // Display the profile picture if available
        if (!empty($row['profile_pic_blob'])) {
            $profile_pic_blob = $row['profile_pic_blob'];
            echo "<tr><td>Profile picture:</td><td><img src='data:image/jpeg;base64,".base64_encode($profile_pic_blob)."' alt='Profile Picture' style='width: 170px; height: auto;'></td></tr>";
        }
        echo "<tr><td>Name:</td><td>".$row['name']."</td></tr>";
        echo "<tr><td>Surname:</td><td>".$row['surname']."</td></tr>";
        echo "<tr><td>Province:</td><td>".$row['province']."</td></tr>";
        echo "<tr><td>Email:</td><td>".$row['email']."</td></tr>";
        echo "<tr><td>ID Number:</td><td>".$row['id_number']."</td></tr>";
        echo "<tr><td>Cellphone:</td><td>".$row['cellphone']."</td></tr>";
        echo "<tr><td>Field of Study:</td><td>".$row['field_of_study']."</td></tr>";

        echo "</table>";

        // Display an edit form
        echo "<h2>Edit Profile</h2>";
        echo "<form method='POST' action='save_profile.php'>";
        echo "<input type='hidden' name='user_id' value='".$id."'>";
        echo "<table>";
        echo "<tr><td>Name:</td><td><input type='text' name='name' value='".$row['name']."'></td></tr>";
        echo "<tr><td>Surname:</td><td><input type='text' name='surname' value='".$row['surname']."'></td></tr>";
        echo "<tr><td>Province:</td><td>";
        echo "<select name='province'>";
        echo "<option value='Eastern Cape' ".($row['province']=='Eastern Cape'?'selected':'').">Eastern Cape</option>";
        echo "<option value='Free State' ".($row['province']=='Free State'?'selected':'').">Free State</option>";
        echo "<option value='Gauteng' ".($row['province']=='Gauteng'?'selected':'').">Gauteng</option>";
        echo "<option value='KwaZulu-Natal' ".($row['province']=='KwaZulu-Natal'?'selected':'').">KwaZulu-Natal</option>";
        echo "<option value='Limpopo' ".($row['province']=='Limpopo'?'selected':'').">Limpopo</option>";
        echo "<option value='Mpumalanga' ".($row['province']=='Mpumalanga'?'selected':'').">Mpumalanga</option>";
        echo "<option value='North West' ".($row['province']=='North West'?'selected':'').">North West</option>";
        echo "<option value='Northern Cape' ".($row['province']=='Northern Cape'?'selected':'').">Northern Cape</option>";
        echo "<option value='Western Cape' ".($row['province']=='Western Cape'?'selected':'').">Western Cape</option>";
        echo "<tr><td>Email:</td><td><input type='email' name='email' value='".$row['email']."'></td></tr>";
        echo "<tr><td>ID Number:</td><td><input type='id_number' name='id_number' value='".$row['id_number']."'></td></tr>";
        echo "<tr><td>Cellphone:</td><td><input type='text' name='cellphone' value='".$row['cellphone']."'></td></tr>";
        echo "<tr><td>Field of Study:</td><td>";
        echo "<select name='field_of_study'>";
        echo "<option value='Information Technology' ".($row['field_of_study']=='Information Technology'?'selected':'').">Information Technology</option>";
        echo "<option value='Engineering' ".($row['field_of_study']=='Engineering'?'selected':'').">Engineering</option>";
        echo "<option value='Business Management' ".($row['field_of_study']=='Business Management'?'selected':'').">Business Management</option>";
        echo "<option value='Human Resource' ".($row['field_of_study']=='Human Resource'?'selected':'').">Human Resource</option>";
        echo "<option value='Marketing' ".($row['field_of_study']=='Marketing'?'selected':'').">Marketing</option>";
        echo "<option value='Public Management' ".($row['field_of_study']=='Public Management'?'selected':'').">Public Management</option>";
        echo "<option value='Financial Management' ".($row['field_of_study']=='Financial Management'?'selected':'').">Financial Management</option>";
        echo "<option value='Management Assistant' ".($row['field_of_study']=='Management Assistant'?'selected':'').">Management Assistant</option>";
        echo "<option value='Administration' ".($row['field_of_study']=='Administration'?'selected':'').">Administration</option>";
        echo "<option value='Call Center' ".($row['field_of_study']=='Call Center'?'selected':'').">Call Center</option>";
        echo "<tr><td>Profile Picture:</td><td><input type='file' name='profile_pic_blob'></td></tr>";
        echo "</table>";
        echo "<input type='submit' value='Save'>";
        echo "</form>";
        
    } else {
        echo "User not found.";
    }

    $stmt->close();
} else {
    echo "User not logged in.";
}

$conn->close();
?>
