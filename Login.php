<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culinfo</title>
</head>
<body>
    <div class="menu-wrap">
            
            <div class="logo">
                <img src="Image-47-2.png" alt="logo">
    </div>
    <h1>Login<h1>
    <?php
        session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "new_culinfo";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            echo "Gagal";
        }

        $error = "";

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('Location: Home.php');
                exit();
            } else {
                $error = "Username atau password salah!";
            }
        }
        ?>

        <form action="" method="post">
            <label>Username:</label><br>
            <input type="text" name="username"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login" style="background-color: black; width: 150px; height: 40px; color: white; margin-top: 50px;">
        </form>
        <?php
        if (!empty($error)) {
            echo $error;
        }
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        body{
            background-image: url('Frame-14.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 95%;
            font-family: 'Poppins', sans-serif;
            height: 600px;
        }

        form {
            margin-top: 30px;
            margin-left: 3px;
            background-color: transparent;
            font-size: 20px;
            border: none;

        }

        input {
            border-radius: 5px;
            height: 35px;
            width: 400px;
            margin-top: ;
        }
        
        .form__button{
            color: white;
        }

        .showPassword{
            margin-top: 30px;
            margin-left: 20px;
        }

        .submit{
            font-family: 'Poppins';
            font-weight: 300px;
            font-size: 15px;
            background-color: transparent;
            color: white;
            border-radius: 10px;
            outline: none
            cursor: pointer;
            margin-top: 30px;
            margin-left: 20px;
        }

        .form__button:hover{
            background-color: grey;
            
        }

        .form__button:active{
            transform: scale(0.98);
        }
        p{
            margin-top: 40px;
            margin-left: 3px;
            font-size: 20px;
        }
        .showPasswor{
            margin-left: 20px;
        }
        h1{
            margin-left: 25px;
        }

    </style>
    <script>
		function goToNextPage() {
			window.location.href = "Signup.php";
		}
	</script>
    <p>Belum punya akun? <span style="color: black; text-decoration: underline; cursor: pointer;" onclick="goToNextPage()">Daftar disini</span></p>
    <script>
		
	</script>
</body>
</html>