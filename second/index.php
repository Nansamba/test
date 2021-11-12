<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="mox.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
   
    <?php include "header.html" ?>
    <div class="name">
        <?php

            //$name;
           // $passwaord;
            //$title;



        ?>
        <h1><?php echo 'SSEMUGENYI ISAAC' ?></h1>

    </div>
    <main>
        
      <div class="container-fluid main-body">

        <p><?php
        //$name="ISAAC"
        
        //echo $name ,$title , $passwaord ?> amet consectetur adipisicing elit. Qui debitis sit perspiciatis non et. 
          Ut error perspiciatis aliquam quisquam numquam aspernatur, veritatis alias. Sit quisquam, 
          consequatur soluta voluptatum beatae aliquam.</p>

    <div class="row">
      <?php 
       $title ="New title 1";
       $desc ="New Description 1";
       $link ="1";
      
      
      include "card.php"  ?>
      <?php 
      $title ="New title 2";
      $desc ="New Description 2";
      $link ="2";
      
      include "card.php" ?>
    </div>

    </main>
    <?php include "footer.php" ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>