<?php 
session_start();
if(!isset($_SESSION['ID'])){
    header('Location: ./login.php');
    }
?>
<!Doctype HTML>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>


<body>
    <?php
        if(isset($_GET['msg'])){
            $msg= $_GET['msg'];
            if($msg=='success'){
                ?>
                <script>alert("Congratulations! Property posted for sale.")</script>
                <?php
            }
            elseif($msg=='fail'){
                ?>
                <script>alert("OOPs! Something went wrong.")</script>
                <?php
            }
        }
    ?>
    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>25th</span>-Century</p>
        <a href="sell.php" class="icon-a"><i class="fas fa-rupee-sign"></i> &nbsp;&nbsp;Sell</a>
        <a href="index.php" class="icon-a"><i class="fas fa-home"></i> &nbsp;&nbsp;Home</a>
        <a href="support.php" class="icon-a"><i class="fas fa-phone-square-alt"></i> &nbsp;&nbsp;Contact</a>
        <a href="index.php#services"><i class="fas fa-concierge-bell"></i> &nbsp;&nbsp;services</a>
        <a href="index.php#featured"><i class="fas fa-star"></i> &nbsp;&nbsp;featured</a>
        <a href="<?php
                if(isset($_SESSION['ID'])){
                echo "./logout.php";
                }else{
                echo "./login.php";
                }
                ?>">
                <?php
                if(isset($_SESSION['ID'])){
                echo "<i class='fas fa-power-off'></i>&nbsp;&nbsp;logout";
                }else{
                echo "<i class='fas fa-power-off'></i>&nbsp;&nbsp;login";
                }
                ?>
            </a>
        

    </div>
    <div id="main">
        <section class="home" id="home">    
            <form action="action.php" method="POST" enctype="multipart/form-data">
                <div class="inputBox">
                    <input type="text" name="cost" placeholder="cost" id="" required>
                    <input type="text" name="name" placeholder="name" id="" required>
                    <input type="text" name="location" placeholder="location" id="" required>
                    <input type="text" name="area" placeholder="area" id="" required>
                    <input type="text" name="bedroom" placeholder="bedroom" id="" required>
                    <input type="text" name="bathroom" placeholder="bathroom" id="" required>
                    <input type="file" name="image" placeholder="image" id="" required>
                    <input type="text" name="phno" placeholder="phone number" id="" required>
                    <input type="submit" name="sell" value="submit" class="btn">
                </div>
            </form>
        </section>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".nav").click(function() {
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
        });

        $(".nav2").click(function() {
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".logo").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
        });
    </script>

</body>


</html>