<!DOCTYPE html>
<html>
<head>
	<title>Kuliner</title>
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

    $id = $_GET['id'];

	$query = "SELECT * FROM kuliner WHERE  id_kuliner = $id";
	$result = mysqli_query($conn, $query);
    ?>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

	<div class="kuliner">
		<img src="uploads/<?= $row['gambar_kuliner']; ?>" width="450" height="300">
		<h2><?php echo $row['nama_kuliner']; ?></h2>
		<p><?php echo $row['deskripsi']; ?></p>
	</div>

	<a href="Kedai.php?id=<?php echo $row['id_kuliner']; ?>">
		<button class="button">
			Lihat kedai
		</button>
	</a>
	
	<?php } ?>
    
    <style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap');
        h2{
			font-family: 'Poppins';
            text-align: center;
            font-size: 40px;
        }
        p{
			font-family: 'Poppins';
            text-align: center;
            font-size: 24px;
            margin-left: 20px;
            margin-right: 20px;
        }
		.button{
			font-family: 'Poppins';
			background-color: #D9D9D9;
			margin-left: 1000px;
			margin-top: 200px;
			width: 150px;
			height: 50px;
			border-radius: 5px;
			border: none;
			border-color: transparent;
			font-weight: 400px;
		}
		.center-image {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.kuliner img{
			margin-left: 430px;
			margin-top: 30px;
		}
		
		.center-image img {
			margin-left: auto;
			margin-right: auto;
		}
    </style>

	<a href="Kedai.php?id=<?php echo $row['id_kuliner']; ?>">
		
	</a>