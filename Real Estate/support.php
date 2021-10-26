<?php 
session_start();
if(!isset($_SESSION['ID'])){
    header('Location: ./index.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/support.css">
</head>

<body>
    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><span>25th</span>Century</a>

        <nav class="navbar">
            <a href="main.php">home</a>
            <a href="main.php#services">services</a>
            <a href="main.php#featured">featured</a>
            <a href="<?php
                if(isset($_SESSION['ID'])){
                echo "./logout.php";
                }else{
                echo "./login.php";
                }
                ?>">
                <?php
                if(isset($_SESSION['ID'])){
                echo "logout";
                }else{
                echo "login";
                }
                ?>
            </a>
            <a href="support.php">contact</a>
        </nav>

        <div class="icons">
            <div id="menu-bars" class="fas fa-bars"></div>
            <a href="./favourites.php" class="fas fa-heart"></a>
            <a href="./dashboard.php" class="fas fa-user"></a>
        </div>

    </header>

    <!-- header section ends -->
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Feel free to reach us</p>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="text">
                            <h3>Address</h3>
                            <p>APSIT GB Road, Thane west</p>
                            <h3>Phone</h3>
                            <p>111-234-5678</p>
                            <h3>Email</h3>
                            <p>abc@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="contactForm">
            <form>
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Full Name</span>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Type your Message...</span>
                            <div class="button">
                                <button>Send</button>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>




    </section>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <script src="" async defer></script>
    <!-- Javascript animation -->
    <script>
        let menu = document.querySelector('#menu-bars');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () => {
            navbar.classList.toggle('active');
            menu.classList.toggle('fa-times');
        }

        window.onscroll = () => {
            navbar.classList.remove('active');
            menu.classList.remove('fa-times');
        }
    </script>
</body>

</html>