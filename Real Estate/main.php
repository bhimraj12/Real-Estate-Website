<?php 
session_start();
if(!isset($_SESSION['ID'])){
    header('Location: ./index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25th Century</title>

    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><span>25th</span>Century</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="<?php
                if(isset($_SESSION['ID'])){
                    echo "./logout.php";
                }
                else{
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
            <a href="favourites.php" class="fas fa-heart"></a>
            <a href="dashboard.php" class="fas fa-user"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <form action="">

            <h3>find your perfect home</h3>

            <div class="buttons-container">
                <a href="#" class="btn">for Buy</a>
                <a href="#" class="btn">for Rent</a>
            </div>

            <div class="inputBox">
                <!-- <input type="search" name="" placeholder="neighborhood" id=""> -->
                <input type="search" name="" placeholder="city" id="">
            </div>

            <input type="submit" value="search property" class="btn">

        </form>

    </section>

    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/s-1.png" alt="">
                <h3>buying home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
                <a href="#" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="images/s-2.png" alt="">
                <h3>renting home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
                <a href="#" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="images/s-3.png" alt="">
                <h3>selling home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> properties </h1>

        <div class="box-container">

            <div class="box">
                <div class="image-container">
                    <img src="images/img-1.jpg" alt="">
                    <div class="info">
                        <h3>3 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>1</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>4</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>Bandra West</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="images/img-2.jpg" alt="">
                    <div class="info">
                        <h3>6 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>2</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>7</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>Mumbai</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="images/img-3.jpg" alt="">
                    <div class="info">
                        <h3>1 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>1</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>6</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>Banglore</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="images/img-4.jpg" alt="">
                    <div class="info">
                        <h3>9 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>2</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>6</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>Delhi</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="images/img-5.jpg" alt="">
                    <div class="info">
                        <h3>10 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>3</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>8</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>Gujarat</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src="images/img-6.jpg" alt="">
                    <div class="info">
                        <h3>3 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>1</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>4</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>₹25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>Goa</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- featured section ends -->



    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="icons-container">

            <div class="icons">
                <img src="images/icon-1.png" alt="">
                <h3>phone number</h3>
                <p>+91 1234567890</p>
                <p>+91 9067438679</p>
            </div>

            <div class="icons">
                <img src="images/icon-2.png" alt="">
                <h3>email address</h3>
                <p>abc@gmail.com</p>
                <p>25thcentury@gmail.com</p>
            </div>

            <div class="icons">
                <img src="images/icon-3.png" alt="">
                <h3>office address</h3>
                <p>Juhu, Opp. JW Marriott, Mumbai- 400049</p>
            </div>

        </div>

        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15080.58269891112!2d72.82078913721537!3d19.10126419317365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9bf95d4ba07%3A0x35047c9c36b6cea1!2sJuhu%2C%20Mumbai%2C%20Maharashtra%20400049!5e0!3m2!1sen!2sin!4v1630849047085!5m2!1sen!2sin"
                width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="footer-container">

            <div class="box-container">

                <div class="box">
                    <h3>quick links</h3>
                    <a href="index.php">home</a>
                    <a href="#services">services</a>
                    <a href="#featured">featured</a>
                    <a href="#">agents</a>
                    <a href="#contact">contact</a>
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="#">my account</a>
                    <a href="#">my favorite</a>
                    <a href="#">my list</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">instagram</a>
                    <a href="#">linkedin</a>
                </div>

            </div>

            <div class="credit">&copy; DESIGNED BY BHIMRAJ | SHRIDHAR | AKSHADA</div>

        </div>

    </section>

    <!-- footer section ends -->





    <!-- Scroll to Top -->
    <div class="scroll-top">
        <!--     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18" />
          </svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
        </svg>
    </div>
    <!-- Scroll to Top End -->










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