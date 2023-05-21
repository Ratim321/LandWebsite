
<?php
$input_value = $_POST['input_value'];




$db = mysqli_connect("localhost", "root", "", "land");


$exist = true;
    
	$sth = mysqli_query($db,"SELECT p.place,p.price,p.area,p.description
    FROM landdetails p where  REGEXP_REPLACE(UPPER(TRIM(REPLACE(REPLACE(description, ' ', ''), '\t', ''))), '[0-9]', '')=REGEXP_REPLACE(UPPER(TRIM(REPLACE(REPLACE('$input_value', ' ', ''), '\t', ''))), '[0-9]', '')");
   
       


   if(mysqli_num_rows($sth)==0){
 
    $sth = mysqli_query($db,"SELECT * FROM `landdetails` WHERE description REGEXP '[$input_value]'");
   }



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

    <title>iBlog - Heaven for bloggers</title>
</head>

<body>
<div class="con max-width-0 m-auto">
  <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
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
    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
   

       
    
        <?php



         
            while ($row = $sth->fetch_assoc()){
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
    <h1 style='color:orange;'>Place:$v2 </h1>
    </a>
   
    <div><h2>PRICE:  $v3 Taka</h2>
        <h3>Area: $v4 </div>
    <span></span>


    </div>
    </div>



    </div>

    </div>";
            }
      
            


        ?>
        
        </div>

    </div>

 
</body>

</html>





<?php


