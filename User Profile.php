<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
</head>
<body>
	<h1>Profile</h1>
	<?php
	// Mendefinisikan koneksi ke database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "new_culinfo";

	// Membuat koneksi
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Memeriksa koneksi
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Mengambil data pengguna dari database
	$sql = "SELECT * FROM users WHERE id=1"; // Mengganti 1 dengan id pengguna yang sedang aktif
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // Output data dari setiap baris
	    while($row = $result->fetch_assoc()) {
	        echo "<h2>" . $row["name"] . "</h2>";
	        echo "<p>" . $row["email"] . "</p>";
	        echo "<p>" . $row["bio"] . "</p>";
	        echo "<img src='" . $row["profile_picture"] . "' alt='Profile Picture'>";
	    }
	} else {
	    echo "No data available";
	}

	$conn->close();
	?>
</body>
</html>