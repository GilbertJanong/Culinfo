<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
	<div class="menu-wrap">
            <div class="logo">
                <img src="Image-47-2.png" alt="logo">
			</div>
	</div>
	<h1>Signup</h1>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        body{
            background-image: url('Frame-15.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 95%;
            font-family: 'Poppins', sans-serif;
            height: 600px;
        }
		form{
			margin-left: 20px;
		}
		h1{
			margin-left: 20px;
		}
		.submit{
			margin-top: 10px;
		}
		.show-hide {
			position: absolute;
			top: 50%;
			right: 10px;
			transform: translateY(-50%);
			cursor: pointer;
			background-image: url('eye.png');
			width: 20px;
			height: 20px;
			background-size: cover;
		}
		input[type="text"] {
			width: 30%;
			padding: 15px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
		}
		input[type="password"] {
			width: 30%;
			padding: 15px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		input[type="submit"] {
			padding: 8px;
			width: 7%;
			margin-top: 90px;
			color: white;
			background-color: black;

		}
		label[for="password"]{
			margin-top: 15px;
		}
	</style>
	<form action="" method="post">
		<label for="username">Username</label><br>
		<input type="text" id="username" name="username" required><br>

		<label for="password">Password</label><br>
		<input type="password" id="password" name="password"><br>
		<span class="show-hide" onclick="togglePasswordVisibility()"></span>
		<script src="script.js"></script>

		<label for="confirm_password">Konfirmasi Password</label><br>
		<input type="password" id="confirm_password" name="confirm_password" required><br>


        <input type="submit" value="Signup">
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "new_culinfo";

		// Membuat koneksi
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Memeriksa koneksi
		if ($conn->connect_error) {
			echo "koneksi gagal";
		}

		session_start();
		// Memeriksa apakah formulir telah disubmit
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			// Memeriksa apakah password dan konfirmasi password cocok
			if ($_POST['password'] != $_POST['confirm_password']) {
				echo "Password dan konfirmasi tidak cocok";
				exit();
			}

			// Memeriksa apakah username sudah digunakan sebelumnya
			$sql = "SELECT * FROM user WHERE username='{$_POST['username']}'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				echo "Username sudah ada";
				exit();
			}

			// Menyimpan data pengguna ke dalam database
			$sql = "INSERT INTO user (username, password) VALUES ('{$_POST['username']}', '{$_POST['password']}')";
			if ($conn->query($sql) === TRUE) {
				header("Location: SignupSucces.php");
				exit;
			} else {
				echo "Signup gagal";
			}

		}
		?>
	</form>
	</body>
</html>