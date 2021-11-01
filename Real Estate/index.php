<?php 

include "./db.php";
session_start();


$search_value=$_POST["search"];
if($conn->connect_error){ //search logic
    echo 'Connection Faild: '.$conn->connect_error;
    }
else{
        $sql="select * from property_master where location like '%$search_value%'";//query executed in sql

        $res=$conn->query($sql);

    }
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25th Century</title>

    <!-- font awesome cdn link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include './shared/nav.php';?>

    <!-- home section starts  -->

    <section class="home" id="home">

        <form action="" method="POST" >

            <h3>find your perfect home</h3>
            <div class="inputBox">
                <!-- <input type="search" name="" placeholder="neighborhood" id=""> -->
                <input type="search" id="searchedProperty" name="search" placeholder="city" id="">
            </div>

            <input type="submit"  value="search property" class="btn">

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

        <div class="box-container" id="PropertiesContainer">
       <?php  while($row=$res->fetch_assoc()){
          $property = "  <div class='box'>
          <div class='image-container'> 
              <img src=".$row["IMAGE"]." alt='Image'> 
          </div>
          <div class='content'>
              <div class='price'>
                  <h3>"
                  .$row['COST']
                  ."</h3>
              </div>
              <div class='location'>
                  <h3>".$row["NAME"]."</h3>
                  <p>".$row["LOCATION"]."</p>
              </div>
              <div class='details'>
                  <h3> <i class='fas fa-expand'></i> ".$row["AREA"]." sqft </h3>
                  <h3> <i class='fas fa-bed'></i> ".$row["BEDROOM"]." beds </h3>
                  <h3> <i class='fas fa-bath'></i> ".$row["BATHROOM"]." baths </h3>
                  ";
                  if (isset($_SESSION['ID']))
                  {
                  $property = $property."<h3> <i class='fas fa-phone'></i> ".$row["OWNER_INFO"]." </h3>";
                  }
                  else  $property =  $property."<h3> <i class='fas fa-phone'></i>  LOGIN TO VIEW THESE DETAILS </h3>";
                  $property =   $property."</div>
             
          </div>
      </div> ";

      echo $property;

        }   ?>
         

        </div>

    </section>

    <!-- featured section ends -->



    <!-- contact section starts  -->

    

    <?php include './shared/footer.php';?>





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