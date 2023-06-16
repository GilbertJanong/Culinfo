<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culinfo</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        body{
            background-image: url('Frame-7.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 95%;
            font-family: 'Poppins', sans-serif;
            height: 600px;
        }

        .form__title{
            font-size: 35px;
            border-radius: 10px;
        }

        .form__message{
            margin-top: 45px;
        }
        
        .form__button{
            font-weight: 300px;
            font-size: 15px;
            padding: 12px 24px;
            background-color: black;
            color: white;
            border-radius: 10px;
            outline: none
            cursor: pointer;
            margin-top: 30px;
            margin-left: 3px;
        }

        .form__button:hover{
            background-color: grey;
            
        }

        .form{
            display: block;
        }
        .form--hidden{
            display: none;
        }

        .form__button:active{
            transform: scale(0.98);
        }

        .form > *:last-child {
            margin-top: 0;

        }

        .form > *:last-child {
            margin-bottom: 0;
        }

        .form__title {
            font-size: 28px;
            margin-left: 15px;
        }

        .form__message {
            margin-bottom: 1rem;

        }

        .form__message--success {
            color: green;
        }

        .form__message--error{
            color: red;
        }

        .form__input--group{
            margin-bottom: 1rem;
            margin-left: 15px;
        }

        .form__input {
            display: block;
            width: 30%;
            padding: 12px 20px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px black;
            background: #eeeeee;
            transition: background 0.2s, border-color 0.2s;
        }

        .form__input:focus {
            border-color: black;
            background: white;

        }

        .form__input--error {
            color: red;
            border-color: red;

        }

        .form__input-error-message {
            margin-top: 0.5rem;
            font-size: 0.85rem;
            color: red;

        }

        .form__text{
            margin-top: 20px;
        }

        .form__link--1{
            color: black;
            text-decoration: none;
            cursor: pointer;
            margin-left: 19px;

        }

        .form__link--2{
            color: black;
            text-decoration: none;
            cursor: pointer;
            margin-left: 8px;

        }

        .form__link--1:hover{
            text-decoration: underline;

        }

        .form__link--2:hover{
            text-decoration: underline;
        }
    </style>
    <div class="menu-wrap">
            
            <div class="logo">
                <img src="Image-47-2.png" alt="logo">
            </div>
    <div class="container" method = "POST" action="">
        <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input--group">
                <input type="text" class="form__input" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input--group" method="POST" action="">
                    <input type="password" class="form__input" autofocus placeholder="Password">
                    <div class="form__input-error-message"></div>
                    <button class="form__button" type="submit">Continue</button>
                    <p class="form__text">
            </div>
        </form>
        <form action="SignupPage.php">
            <a class="form__link--1" href="SignupPage.php" id="linkCreateAccount">Don't have an account? Create account</a>
        </form>
    </div>
    <?php
    
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = mysqli_query($conn,"SELECT * FROM user WHERE Username= '".$username."' AND Password='".$password."' ");
        
    
        if (mysqli_num_rows($sql) > 0) {
            
           echo '<script>window.location="Continue.php"</script>';
        } else {
            echo "Username atau password salah!";
        }
    }
    ?>

</body>
</html>