<!DOCTYPE html>
<html>
<head>
	<title>Kedai</title>
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

	$query = "SELECT * FROM kedai WHERE  id_kedai = $id";
	$result = mysqli_query($conn, $query);
    ?>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

	<div class="kedai">
		<h2><?php echo $row['nama_kedai']; ?></h2>
		<b><?php echo $row['lokasi']; ?></b>
		<p><?php echo $row['opsi_layanan']; ?></p>
		<img src="uploads/<?= $row['gambar_kedai']; ?>" width= "500px" height= "330px">
		<p><?php echo $row['opsi_layanan']; ?></p>
        <g><?php echo $row['waktu_pelayanan']; ?></g><br></br>
        <a><?php echo $row['telepon']; ?></a><br></br>
        <c><?php echo $row['menu']; ?></c>
	</div>
    <?php } ?>
	<?php
	$sql = "SELECT * FROM kedai";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<p>Rating: " . $row['rating'] . " Bintang</p>";
		echo "<p>Ulasan: " . $row['ulasan'] . "</p>";
		echo "<hr>";
	}
	} else {
	echo "Belum ada ulasan.";
	}

	$conn->close();
	?>
    <a href="Rating.php">
		<button class="button">
			Berikan rating dan ulasan
		</button>
	</a>
</body>