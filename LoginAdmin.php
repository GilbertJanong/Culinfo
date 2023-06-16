<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
</head>
<body>
    <style>
        form{
            font-family: 'Poppins';
        }
        input[type="text"]{
            
        }
        input[type="submit"]{
            margin-top: 10px;
        }
    </style>
    <h1>Login Admin</h1>

    <?php
    // Periksa apakah pengguna telah melakukan login
    session_start();
    
    // Periksa apakah form login telah disubmit
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Periksa kecocokan username dan password
        // Misalnya, cek di database atau array pengguna terdaftar
        if ($username === 'Gilbert77' && $password === '7777') {
            // Jika cocok, simpan status login di session
            $_SESSION['admin'] = true;

            // Alihkan ke halaman admin
            header('Location: admin.php');
            exit();
        } else {
            echo 'Username atau password salah.';
        }
    }
    ?>

    <form method="POST" action="">
        <label for="admin">Admin Name:</label><br>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>