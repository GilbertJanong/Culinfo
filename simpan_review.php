<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_culinfo";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];

$sql = "INSERT INTO kedai (ulasan, rating) VALUES ('$ulasan', '$rating')";

if ($conn->query($sql) === TRUE) {
  echo "Ulasan berhasil disimpan.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>