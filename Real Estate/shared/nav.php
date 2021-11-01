<!-- header section starts  -->

<header>

<a href="index.php" class="logo"><span>25th</span>Century</a>

<nav class="navbar">
    <a href="index.php"><i class="fas fa-home"></i>home</a>
    <a href="index.php#services"><i class="fas fa-concierge-bell"></i>services</a>
    <a href="index.php#featured"><i class="fas fa-star"></i></i>featured</a>
    <a href="<?php //user logged in or not
        if(isset($_SESSION['ID'])){
        echo "./logout.php";
        }else{
        echo "./login.php";
        }
        ?>">
        <?php
        if(isset($_SESSION['ID'])){
        echo "<i class='fas fa-power-off'></i>logout";
        }else{
        echo "<i class='fas fa-power-off'></i>login";
        }
        ?>
    </a>
    <a href="support.php"><i class="fas fa-phone-square-alt"></i>contact</a>
</nav>

<div class="icons">
    <div id="menu-bars" class="fas fa-bars"></div>
    <a href="./sell.php" class="fas fa-user"></a>
</div>

</header>