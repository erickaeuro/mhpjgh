<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  	<title>MERCED HERNANDEZ PAWNSHOP & JEWELLERY</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
        <?php 
             require('connection.php');
             error_reporting(0);
             
        ?> 

      <div class="bodybackground"> 

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-7 p-md-10">

          <?php
                if($_GET['registration'])
                {
                  echo "<div class=\"w-100 bg-info text-center text-white rounded p-3\">Registered Successfully</div><br>";
                }
          ?>

            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
            <h5 class="card-title text-center mb-5 fw-light fs-5">MULTI-FACTOR AUTHENTICATION</h5>

            <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Authentications
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Google Authenticator</a>
            <a class="dropdown-item" href="#">Email</a>
            <a class="dropdown-item" href="#">SMS</a>
            <a class="dropdown-item" href="#">Security Question</a>
           </div>
           </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </body>
</html>