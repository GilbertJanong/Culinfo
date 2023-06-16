<?php
// Mendefinisikan koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Memeriksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Memeriksa apakah password dan konfirmasi password cocok
	if ($_POST['password'] != $_POST['confirm_password']) {
		echo "Password does not match";
		exit();
	}

	// Memeriksa apakah username sudah digunakan sebelumnya
	$sql = "SELECT * FROM users WHERE username='{$_POST['username']}'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "Username already taken";
		exit();
	}

	// Menyimpan data pengguna ke dalam database
	$sql = "INSERT INTO users (username, password, email) VALUES ('{$_POST['username']}', '{$_POST['password']}', '{$_POST['email']}')";
	if ($conn->query($sql) === TRUE) {
		echo "Signup successful";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
