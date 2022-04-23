<!doctype html>
<html lang="en">
  <head>
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
          <div class="card-img-left-2 d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-7 p-md-10">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                 <?php include('registrationclick.php')?> 
            <h5 class="card-title text-center mb-5 fw-light fs-5">REGISTRATION</h5>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="fname" id="floatingInputFirstname" placeholder="First Name" required autofocus value="<?php echo $_POST['fname'];?>">
                <label for="floatingInputFirstname">First Name</label>
              </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="lname" id="floatingInputLastname" placeholder="Last Name" required autofocus value="<?php echo $_POST['lname'];?>">
                <label for="floatingInputLastname">Last Name</label>
              </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control"  name="email" id="floatingInputEmail" placeholder="Email Address" required autofocus value="<?php echo $_POST['email'];?>">
                <label for="floatingInputEmail">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="cphone" id="floatingInputPhonenumber" placeholder="Cellphone Number" required autofocus value="<?php echo $_POST['cphone'];?>">
                <label for="floatingInputPhonenumber">Phone Number</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="uname" id="floatingInputUsername" placeholder="Username" required autofocus value="<?php echo $_POST['uname'];?>">
                <label for="floatingInputUsername">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password" value="<?php echo $_POST['pass'];?>">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="cpass" id="floatingConfirmPassword" placeholder="Confirm Password" value="<?php echo $_POST['cpass'];?>">
                <label for="floatingConfirmPassword"> Confirm Password</label>
              </div>

              <div class="form-floating mb-3">
              <select class="form-select" aria-label="Default select example" id="select">   
                      <option value="Select">Choose Security Question</option>
                      <option value="What was the first thing you learned to cook?">What was the first thing you learned to cook?</option>  
                      <option value="What is the name of the first school you attended?">What is the name of the first school you attended?</option>  
                      <option value="What city or town was your first job in?">What city or town was your first job in?</option>  
                      <option value="What is your maternal grandmother's maiden name?">What is your maternal grandmother's maiden name?</option>  
                      <option value="What is the name of your first pet?">What is the name of your first pet?</option> 
              </select>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="cpass" id="floatingConfirmPassword" placeholder="Confirm Password" value="<?php echo $_POST['cpass'];?>">
                <label for="floatingConfirmPassword"> Answer to that Question</label>
              </div>



              <div class="d-grid">
                <button type="submit" name= "sub">Register</button>
              </div>


              <a class="d-block text-center mt-2 small" href="registration.php">Have an account? Login</a>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </body>
</html>