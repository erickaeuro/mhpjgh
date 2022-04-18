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
            <h5 class="card-title text-center mb-5 fw-light fs-5">LOGIN</h5>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="userTxt" required value="<?php echo $_COOKIE['username'];?>" placeholder="uname" required autofocus>
                <label for="floatingInputUsername">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="passTxt" required value="<?php echo $_COOKIE['password'];?>" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                  <input class="form-check-input" name="remme" type="checkbox" value="" id="rememberPasswordCheck">
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Remember password
                  </label>
                </div>

                <div class="w-70 text-md-right">
										<a href="#">Forgot Password</a>
                </div>

              <div class="d-grid">
                <button type="submit" name="sub">Login</button>
              </div>

              <a class="d-block text-center mt-2 small" href="registration.php">Don't have an account? Register</a>
            </form>
            <?php require('loginclick.php')?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </body>
</html>