<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culinfo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Philosopher:wght@700&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap');
    body{
        background-image: url('Frame-6.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        width: 95%;
        height: 600px;
    }
    .logo{
        padding : 20px;
    }

    .menu-wrap{
        display: flex;
        align-items: center;
        
    }

    .menu{
        margin-left: 355px;
        display: flex;
        justify-content: space-between;

    }

    a {
        text-decoration: none;
        color: #FFFFFF;
        margin-left: 133px;
    }

    .big-warpper h3{
        color: white;
        font-family: 'Poppins';
        font-size: 28px;
        margin-left: 45px;
        margin-top: 70px;
        font-weight: 700;

    }
    .big-warpper h4{
        color: #FFFFFF;
        font-family: 'Poppins';
        font-weight: 300;
        font-size: 18px;
        margin-left: 45px;
        margin-top: 35px;


    }

    .btn{
        background-color: white;
        border: white;
        border-radius: 10px;
        color: black;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        margin-left: 45px;
        margin-top: 50px;
        font-family: 'Poppins';
        font-weight: 300;
        display: flex;
        float: left
    }

    .btn:hover {
                background-color: transparent;
                border: 2px solid white;
                color: white;
    }

    .menu-wrap{
        font-family: 'Poppins';
        font-weight: 400;
    }

    .menu a:hover {
        background: 10px;
        background-color: transparent;
        color: black;

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
<body>
    <div class="nav">
        <div class="menu-wrap">
            
                <div class="logo">
                    <img src="Image-47.png" alt="logo">
                </div>
        
    </div>

<div class="big-warpper">
                        <h3>Kuliner Indonesia<br>Disatu Tempat</br></h3>
                        <h4>Portal informasi kuliner Indonesia</h4>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "menu") {
    x.className += " responsive";
  } else {
    x.className = "menu";
  }
}
</script>
<form action="Login.php">
    <button class="btn">Login as User</button>
</form>
<form action="LoginAdmin.php">
    <button class="btn">Login as Admin</button>
</form>
                
</body>
</html>