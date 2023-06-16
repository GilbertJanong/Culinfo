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
            
                <div class="logo">
                    <img src="Image-47-4-2.png" alt="logo">
                </div>
        
        <div class="menu">
                <a href="Home.php">
                    <div class="menu-item">
                    Home
                    </div>
                </a>
                <a href="Kuliner.php">
                    <div class="menu-item">
                    Kuliner
                    </div>
                </a>
                <a href="">
                    <div class="menu-item">
                    Gizi
                    </div>
                </a>
                <a href="Kedai.php">
                    <div class="menu-item">
                    Kedai
                    </div>
                </a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
        </div>
	</div>

<?php
    // Periksa apakah ada kata kunci pencarian yang dikirimkan
    if (isset($_GET['search'])) {
        $search = $_GET['search'];

        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "new_culinfo");

        // Periksa koneksi database
        if (!$conn) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        // Query SQL untuk mencari data berdasarkan kata kunci
        $query = "SELECT * FROM kuliner WHERE nama_kuliner LIKE '%$search%'";
        $result = mysqli_query($conn, $query);

        // Periksa apakah ada hasil pencarian
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Hasil Pencarian:</h2>";

            // Tampilkan hasil pencarian
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['gambar_kuliner'] . " - " . $row['nama_kuliner'] . " - " . $row['deskripsi_singkat'] . "<br>";
            }
        } else {
            echo "<p>Tidak ada hasil yang ditemukan.</p>";
        }

        // Tutup koneksi database
        mysqli_close($conn);
    }
?>
<style>
    .menu-wrap{
        display: flex;
        align-items: center;
    	}
    	.menu{
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
</style>