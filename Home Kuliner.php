<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Philosopher:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "new_culinfo";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$query = "SELECT * FROM kuliner";
	$result = mysqli_query($conn, $query);
	
	?>
    <div class="kuliner">
	    <h2><?php echo ['nama_kuliner']; ?></h2>
	    <p><?php echo ['deskripsi_singkat']; ?></p>
	</div>
<body>