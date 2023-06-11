<?php
// Establish a database connection (modify the credentials as needed)
$host = 'localhost';
$db = 'your_database_name';
$user = 'your_username';
$password = 'your_password';

$conn = mysqli_connect($host, $user, $password, $db);

// Check if the connection was successful
if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$comments = $_POST['comments'];

// Insert the form data into the database
$sql = "INSERT INTO form_data (name, email, phone, category, comments)
        VALUES ('$name', '$email', '$phone', '$category', '$comments')";

if (mysqli_query($conn, $sql)) {
    echo 'Form data stored successfully!';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
