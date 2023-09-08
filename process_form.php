<?php
require_once 'db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $hobbies = isset($_POST['hobbies']) ? implode(', ', $_POST['hobbies']) : '';

    // Handle file uploads
    $imageFileName = '';
    $excelFileName = '';

    if ($_FILES['image']['error'] === 0) {
        $imageFileName = 'uploads/' . uniqid() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $imageFileName);
    }

    if ($_FILES['excel']['error'] === 0) {
        $excelFileName = 'uploads/' . uniqid() . '_' . $_FILES['excel']['name'];
        move_uploaded_file($_FILES['excel']['tmp_name'], $excelFileName);
    }

    // Insert data into the database
    $sql = "INSERT INTO user_data (name, email, city, hobbies, image_path, excel_path)
            VALUES ('$name', '$email', '$city', '$hobbies', '$imageFileName', '$excelFileName')";

    if (mysqli_query($conn, $sql)) {
        echo 'Data submitted successfully.';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
?>
