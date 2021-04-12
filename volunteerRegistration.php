<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="crsImages/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">

    <title>Sign up as Volunteer  </title>
    <link rel="stylesheet" href="crs.css">
    <script src="crs.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <ul class="nav navbar sticky-top nav-fill">
        <li class="nav-item active"> <a class="nav-link" href="index.php"> Home </a></li>
        <li class="nav-item"> <a class="nav-link" href="index.html"> Contact </a></li>
        <li class="nav-item"> <a class="nav-link" href="about.html"> About </a></li>
        <li class="nav-item"> <a class="nav-link"> Sign Up</a></li>

        <li class="nav-item"> <a class="nav-link"> Login</a>
          <ul>
            <li><a href="managerLogin.php">Manager</a></li>
            <li><a href="staffLogin.php">Staff</a></li>
            <li><a href="volunteerLogin.php">Volunteer</a></li>
          </ul>
        </li>
      </ul>

      <div id="welcomeText">
        <p> Thank you for your interest to become a vounteer.</p>
      </div>

      <div class="form-inline">
        <div class="row">
              <div class="col">
                  <fieldset><legend>Volunteer Registration Form</legend>
                      <form method="POST" name="signupForm" action="volRegister.php">
                          <div class="form-group">
                              <label>Username</label><input class="form-control" type="text" name="Vusername" placeholder="Enter an username" required>
                              <label>Password</label><input class="form-control" type="password" name="Vpwd" placeholder="Enter a password" id="pwd" required>
                              <input type="checkbox" onclick="showPwd()"> Show Password
                              <br>
                              <label>Name</label><input class="form-control" type="text" name="Vname" placeholder="Enter your name" required> 
                              <label>Phone Number</label><input class="form-control" type="tel" name="Vphone" placeholder="Enter your phone number" required>
                            </div>
                          <button type="submit" class="btn btn-primary mb-2" onclick="return submitButtonVol()">Submit</button>
                          <button type="reset" class="btn btn-primary mb-2" name="reset">Reset</button>
                      </form>
                  </fieldset>
              </div>
          </div>
      </div>



      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
      crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
      -->

      <footer>
        <div id="info">
          <div>
            <img class="col-lg-4" alt="home" id="home" src="crsImages/home.png"><span class="styleInfo">Crisis Relief Services</span> 
            <img class="col-lg-4" alt="phone" id="phone" src="crsImages/phone.png"><span class="styleInfo">+6012-345-6789</span>
            <img class="col-lg-4" alt="location" id="location" src="crsImages/location.png"><span class="styleInfo">Desa Jaya, Kepong.</span>
            <img alt="email" id="email" src="crsImages/email.png"><a style="color: white; margin-left: 10px;" href="mailto:crs@service.com">crs@service.com</a>
            <img alt="bank" id="bank" src="crsImages/bank.png"><span style="color: white; margin-left: 30px;">MayBank Berhad</span> 
          </div>
        </div>
        Copyright &copy; 2021 CRS
      </footer>
    </div>
  </body>
</html>