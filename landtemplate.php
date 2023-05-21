<?php
 $value1 = $_GET['value1'];
 $value2 = $_GET['value2'];
$value3 = $_GET['value3'];
$value4 = $_GET['value4'];

$db = mysqli_connect("localhost", "root", "", "land");

$result = mysqli_query($db,"SELECT p.place,p.price,p.area,p.description
FROM landdetails p");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils1.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/mobile1.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      

    <!--/*font awesome icons*/-->
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <!--rubik font family -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Rubik:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!--custom css-->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!--media css-->
    <link type="text/css" rel="stylesheet" href="css/media.css" />

    <!--jquery ui files-->    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<div id="arrow">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>

    <header id="home">
    <div class="con max-width-0 m-auto">
  <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Land+</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index1.php">Home</a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="land.php">Land</a>
        
        </li>
      
      </ul>
   

      <form class="d-flex" action="search.php" role="search"  method="post">
        <input class="form-control me-2" type="text" name="input_value" placeholder="Land Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </div>
    </header>

    <section id="mobile-menu">
        <div class="container-mobile">
            <div class="mobile-logo">
                <img src="images/logo.png" class="img-responsive" alt="logo" />

                <div class="clear"></div>
                <!--clear-->
            </div>
            <!--nav-col-->
            <div class="cnt-info-col">
                <button type="button" id="toggle-bar"><i class="fa fa-bars"></i></button>
            </div>
            <div class="clear"></div>
            <!--clear-->
        </div>
    </section>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="m-auto content max-width-1 my-2">
        <div class="content-left">
            <h1> <?php echo "Place: ".$value2; ?></h1>
            <h3> <?php echo "Price: ".$value3; ?></h3>
            <h3> <?php echo "Area: ".$value4; ?></h3>
            <h3> <?php echo "Description: ".$value1; ?></h3>

        </div>
        <div class="content-right">
            <img src="images/home.svg" alt="iBlog">
        </div>
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>Featured Articles</h2>
        <div class="year-box adjust-year">
            <div>
                <h3>Year </h3>
            </div>
            <div>
                <input type="radio" name="year" id=""> 2020
            </div>
            <div>
                <input type="radio" name="year" id=""> 2021
            </div>
        </div>


       
    
        <?php
        while ($row = $result->fetch_assoc()){
          $v1=$row['place'];
          $v2=$row['description'];
          $v3=$row['price'];
          $v4=$row['area'];
            echo" <div class='home-article'>
            <div class='home-article-img''>
           
                <img src='images/landimg.jpg' alt='article''>
            </div>
            <div class='home-article-content font1'>
           
                <a href='landtemplate.php?value1=$v1&value2=$v2&value3=$v3&value4=$v4'>
    <h2 style='color:orange;'>Place: $v1</h1>
    </a>

    <div><h3>PRICE:  $v2 Taka</h2>
        <h4>Area:$v3  </div>
    <span></span>


    </div>
    </div>



    </div>

    </div>";

        }

       
              
       
       
       
        ?>

        
        </div>

    </div>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <Script src="js/jquery-ui.min.js"></Script>
        <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <Script src="js/extrenaljq.js" type="text/javascript"></Script>
    
 
</body>
<script>
    $(document).ready(function() {
        $("#toggle-bar").click(function() {
            $(".menu").slideToggle(400);
        });
    });

</script>

</html>





<?php

