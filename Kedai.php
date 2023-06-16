<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai</title>
</head>
<body>
	<div class="nav">
        <div class="menu-wrap">
            <a href="index.php">
                <div class="logo">
                    <img src="Image-47-4-2.png" alt="logo">
                </div>
			</a>
        <div class="menu">
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
                <a href="">
                    <div class="menu-item">
                    Gizi
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
	<a>Kedai yang menjual menu ini</a>
    <b>Sidoarjo</b>
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

	$query = "SELECT * FROM kedai WHERE  id_kuliner = $id";
	$result = mysqli_query($conn, $query);
    ?>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
	
	<a href="Kedai_t.php?id=<?php echo $row['id_kedai']; ?>">
		<div class="kedai">
		<img src="uploads/<?= $row['gambar_kedai']; ?>" width= "150px" height= "100px">
		<h2><?php echo $row['nama_kedai']; ?></h2>
		<p><?php echo $row['lokasi']; ?></p>
		</div>
	</a>
<?php } ?>
<style>
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
		.menu-wrap{
        display: flex;
        align-items: center;
    	}
    	.menu{
		font-family: 'Poppins';
        margin-left: 650px;
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
		a{
			margin-left: 15px;
		}
</style>
</body>
</html>