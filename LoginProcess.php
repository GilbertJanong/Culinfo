<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_culinfo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('Location: Home.php');
    } else {
        echo "Username atau password salah!";
    }
}

?>