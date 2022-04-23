<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  	<title>MERCED HERNANDEZ PAWNSHOP & JEWELLERY</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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

          <div class="wrapper">
            <div class="menu">
            <select class="form-select" aria-label="Default select example" id="authenticator">  
                      <option value="Select">Select</option>
                      <option value="GoogleAuth">Google Authenticator</option>  
                      <option value="SMS">SMS</option>  
                      <option value="Email">Email</option>  
            </select>
            </div>

        <div class="content">
            <div id="GoogleAuth" class="data">
               <p><b>I choose Google Authenticator as my Multi-Factor Authenticator</b></p>
            </div>
 
           <div id="SMS" class="data">
               <p><b>I choose SMS as my Multi-Factor Authenticator</b></p>
           </div>
      

           <div id="Email" class="data">
              <p><b>I choose Email as my Multi-Factor Authenticator</b></p>
           </div>
        </div>
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $("#authenticator").on('change', function(){
        $(".data").hide();
        $("#" + $(this).val()).fadeIn(700);
      }).change();
    });

        
  </script>
  </body>
</html>