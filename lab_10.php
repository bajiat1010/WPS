<?php
// Establish a database connection (Make sure to provide your actual database credentials)
$mysqli = new mysqli("localhost", "root", "", "Programmer");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Sample data to insert
$id = "user123";
$name = "John Doe";
$image = "profile.jpg";
$password = password_hash("secretpassword", PASSWORD_DEFAULT); // Hash the password

// Insert data into the table
$query = "INSERT INTO Stu_Reg (ID, Name, Image, Password) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ssss", $id, $name, $image, $password);

if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
