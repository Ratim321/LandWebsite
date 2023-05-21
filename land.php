<?php


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
     <!--custom css-->
     <link type="text/css" rel="stylesheet" href="css/style.css" />

<!--media css-->
<link type="text/css" rel="stylesheet" href="css/media.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!--jquery ui files-->
<link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />

    
</head>

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
    <h1 style='color:orange;'>Place: $v2</h1>
    </a>

    <div><h2>PRICE:  $v3 Taka</h2>
        <h3>Area:$v1  </div>
    <span></span>


    </div>
    </div>



    </div>

    </div>";




    }


       
              
       
       
       
        ?>

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

