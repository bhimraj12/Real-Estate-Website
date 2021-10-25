<?php
$host="localhost";
$user="root";
$password="";
$db="real_estate";

mysql_connect($host,$user,$password);
$mysql_select_db($db);

if(isset($_POST['username'])){
    $uname= $_POST['username'];
    $password=$_POST['password'];

    $sql="select * from account_details where USERNAME='".$uname."' AND PASSWORD='".$password."' limit 1";
    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1){
        echo "You have Successfully Logged in.";
        exit();
    }
    else{
        echo "Login Failed. Please try again.";
        exit();
    }
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Sign in & Sign up Form</title>
    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><span>25th</span>Century</a>

        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="index.html#services">services</a>
            <a href="index.html#featured">featured</a>
            <a href="login.html">Login</a>
            <a href="support.html">contact</a>
        </nav>

        <div class="icons">
            <div id="menu-bars" class="fas fa-bars"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>

    </header>

    <!-- header section ends -->
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="#" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                </form>
                <form action="#" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-mobile"></i>
                        <input type="tel" maxlength="10" placeholder="Mobile Number" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
                </div>
                <img src="images/House_searching.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
                </div>
                <img src="images/buy_house.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
    <!-- javascript part  -->
    <script>
        let menu = document.querySelector('#menu-bars');
        let navbar = document.querySelector('.navbar');
        const scrollButton = document.querySelector(".scroll-top");

        menu.onclick = () => {
            navbar.classList.toggle('active');
            menu.classList.toggle('fa-times');
        }

        window.onscroll = () => {
            navbar.classList.remove('active');
            menu.classList.remove('fa-times');
        }

        scrollButton.addEventListener("click", () => {
            window.scrollTo(0, 0);
        });
    </script>
    <!-- <script src="js/app.js"></script> -->
</body>

</html>