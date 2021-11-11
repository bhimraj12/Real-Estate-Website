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
<?php include './shared/nav.php';?>
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="icons-container">

            <div class="icons">
                <img src="images/icon-1.png" alt="">
                <h3 class="heading"><span>phone</span> number</h3>
                <p><a href="tel:+919833744259">+919833744259</a></p>
            </div>

            <div class="icons">
                <img src="images/icon-2.png" alt="">
                <h3 class="heading"><span>email</span> address</h3>
                <p><a href="mailto:25Century@gmail.com">25Century@gmail.com </a></p>
            </div>

            <div class="icons">
                <img src="images/icon-3.png" alt="">
                <h3 class="heading"><span>office</span> address</h3>
                <p>Juhu, Opp. JW Marriott, Mumbai- 400049</p>
            </div>

        </div>

        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15080.58269891112!2d72.82078913721537!3d19.10126419317365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9bf95d4ba07%3A0x35047c9c36b6cea1!2sJuhu%2C%20Mumbai%2C%20Maharashtra%20400049!5e0!3m2!1sen!2sin!4v1630849047085!5m2!1sen!2sin"
                width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

    </section>
<?php include './shared/footer.php';?>

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