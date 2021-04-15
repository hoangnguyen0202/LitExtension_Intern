<?php
$servername = "localhost";
$username = "root";
$password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// // Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "\nDatabase created successfully";
// } else {
//   echo "\nError creating database: " . $conn->error;
// }

$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// // Create table
// $sql = "CREATE TABLE MyTB (
//     id INT(6) PRIMARY KEY,
//     title VARCHAR(100) NOT NULL,
//     description TEXT,
//     image VARCHAR(50),
//     status INT(2),
//     create_at DATETIME,
//     update_time DATETIME
//     )";

// if ($conn->query($sql) === TRUE) {
//   echo "Table MyTB created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

$sql = "INSERT INTO MyTB (id, title, description, image, status)
VALUES (1, 'Title 1', 'Description 1', 'https://bom.to/PUxPsB6POv9PV', 1);";
$sql .= "INSERT INTO MyTB (id, title, description, image, status)
VALUES (2, 'Title 2', 'Description 2', 'https://bom.to/PUxPsB6POv9PV', 1);";
$sql .= "INSERT INTO MyTB (id, title, description, image, status)
VALUES (3, 'Title 3', 'Description 3', 'https://bom.to/PUxPsB6POv9PV', 1);";
$sql .= "INSERT INTO MyTB (id, title, description, image, status)
VALUES (4, 'Title 4', 'Description 4', 'https://bom.to/PUxPsB6POv9PV', 1);";
$sql .= "INSERT INTO MyTB (id, title, description, image, status)
VALUES (5, 'Title 5', 'Description 5', 'https://bom.to/PUxPsB6POv9PV', 1);";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>