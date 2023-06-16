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
            background-image: url('Frame-8.png');
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
            margin-left: 15px;
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

        .form__link{
            color: black;
            text-decoration: none;
            cursor: pointer;
            margin-top: 20px;
            margin-left: 15px;

        }

        .form__link:hover{
            text-decoration: underline;

        }
        
    </style>
    <div class="menu-wrap">
            
            <div class="logo">
                <img src="Image-47-2.png" alt="logo">
            </div>
    <div class="container">
        <form class="form" id="signup">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input--group">
                <input type="text" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input--group">
                <input type="text" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input--group">
                    <input type="password" class="form__input" autofocus placeholder="Password">
                    <div class="form__input-error-message"></div>
            </div>
            <div class="form__input--group">
                    <input type="password" class="form__input" autofocus placeholder="Confirm Password">
                    <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
        </form>
        <form action="LoginPage.php">
            <a class="form__link" href="LoginPage.php" id="linkLogin">Already have account?, Sign In</a>
        </form>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "new_culinfo";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>

    <script>
        function setFormMessage(formElement,type,message) {
            const messageElement = formElement.querySelector(".form__message");
        }

</body>
</html>