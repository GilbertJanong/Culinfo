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
	<div class="nav">
        <div class="menu-wrap">
            <a href="index.php">
                <div class="logo">
                    <img src="Image-47-4-2.png" alt="logo">
                </div>
			</a>
        <div class="menu" style="text-decoration: none;">
                <a href="Home.php">
                    <div class="menu-item">
                    Home
                    </div>
                </a>
                <a href="Home Kuliner.php">
                    <div class="menu-item">
                    Kuliner
                    </div>
                </a>
                <a href="Home Kedai.php">
                    <div class="menu-item">
                    Kedai
                    </div>
                </a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
        </div>
	</div>
	<div class ="wrap">
		<h4>Selamat Datang di Home</h2>
		<h3>Berikut rekomendasi baca anda</h3>
	</div>
	<div class ="search">
			<form method="GET" action="Search.php">
				<label for="search">Cari Informasi Kuliner</label>
				<input type="text" id="search" name="search" />
				<input type="submit" value="Cari" />
			</form>
	</div>
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
	$row = mysqli_fetch_assoc($result);
	$namaFile = $row['gambar_kuliner'];

	while ($row = mysqli_fetch_assoc($result)) {
		
		?>
		<div class="kuliner" style="display: inline-block;">
			<a href="Kuliner.php?id=<?php echo $row['id_kuliner']; ?>" style="color: black; text-decoration: none;">
				<img src="uploads/<?= $row['gambar_kuliner']; ?>" width="150px" height="100px">
				<h2><?php echo $row['nama_kuliner']; ?></h2>
				<p><?php echo $row['deskripsi_singkat']; ?></p>
			</a>
		</div>
		<?php
	}
	?>
	<po>Restoran untuk anda</po>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "new_culinfo";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$query = "SELECT * FROM kedai";
	$result = mysqli_query($conn, $query);
	
	?>
	<?php while ($row = mysqli_fetch_assoc($result)) { ?>
	
	<a href="Kedai_t.php?id=<?php echo $row['id_kedai']; ?>">
		<div class="kedai">
			<img src="uploads/<?= $row['gambar_kedai']; ?>" width= "150px" height= "100px">
			<h2><?php echo $row['nama_kedai']; ?></h2>
			<p><?php echo $row['deskripsi_singkat']; ?></p>
		</div>
	</a>
	

	<?php } ?>

	<style>
		
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap');
	
		.kuliner{
			font-family: 'Poppins';
			padding: 60px;
			background-color: #EDEDED;
			background-size: 30px;
			color: black;
			margin-bottom: 10px;
			margin-left: 10px;
			margin-right: 820px;
			text-decoration: none;	
			margin-top: 30px;
			weight: 200px;
			height: 200px;
			display: grid;
			border-radius: 7px;
			grid-template-columns: auto auto;
		}

		.kedai{
			font-family: 'Poppins';
			padding: 60px;
			background-color: #EDEDED;
			background-size: 30px;
			color: black;
			margin-bottom: 10px;
			margin-left: 10px;
			margin-right: 820px;
			text-decoration: none;
			margin-top: 40px;
			float: left;
			weight: 200px;
			height: 200px;
			border-radius: 7px;
		}

		.kuliner p{
			text-decoration: none;
			font-size: 20px;
			text-wrap: center;
		}
		.kuliner h2{
			text-decoration: none;
			font-size: 25px;
			text-wrap: center;
		}

		.kedai p{
			text-decoration: none;
			font-size: 20px;
		}
		.kedai h2{
			text-decoration: none;
			font-size: 25px;
		}
		po{
			font-size: 25px;
			margin-left: 15px;
			margin-top: 30px;
		}
		h2{
			font-size: 40px;
			text-decoration: none;
			border: none;
		}

		p{
			font-size: 20px;
		}

		h4{
			font-family: 'Poppins';
			font-weight: 600;
			margin-left: 15px;
		}
		
		h3{
			font-family: 'Poppins';
			font-weight: 300;
			margin-left: 15px;
		}
		
		.search {
			font-family: 'Poppins';
			margin-left: 810px;
			margin-top: -40px;
		}
		.menu-wrap{
        display: flex;
        align-items: center;
    	}
    	.menu{
		font-family: 'Poppins';
        margin-left: 750px;
        display: flex;
        justify-content: space-between;
		text-decoration: none;
		color: black;

   		}
		.menu-item{
			margin-left: 70px;
			text-decoration: none;
			color: black;
		}

		.menu a:hover {
        background: 10px;
        background-color: transparent;
        color: black;
		text-decoration: underline;

   		}

		@media screen{
		.menu a.icon {
		float: right;
		display: block;
		}
		}

		@media screen{
		.menu.responsive {position: relative;}
		.menu.responsive .icon {
		position: absolute;
		right: 0;
		top: 0;
		}
		
		.menu.responsive a {
		float: none;
		display: block;
		text-align: left;
		}
		}
	</style>
	
</body>
</html>