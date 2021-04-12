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

        <title>Staff Login</title>
        <link rel="stylesheet" href="crs.css">
        <script src="crs.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <ul class="nav navbar sticky-top nav-fill">
                <li class="nav-item active"> <a class="nav-link" href="index.php"> Home </a></li>
                <li class="nav-item"> <a class="nav-link" href="index.html"> Contact </a></li>
                <li class="nav-item"> <a class="nav-link" href="about.html"> About </a></li>
                <li class="nav-item"> <a class="nav-link"> Sign Up</a>
                    <ul>
                      <li><a href="volunteerRegistration.php">Sign up as Volunteer</a></li>
                    </ul>
                  </li>
          
                  <li class="nav-item"> <a class="nav-link"> Login</a>
                    <ul>
                      <li><a href="managerLogin.php">Manager</a></li>
                      <li><a href="volunteerLogin.php">Volunteer</a></li>
                    </ul>
                  </li>
            </ul>

            <div id="welcomeText">
                <p> Welcome back !</p>
                <p> Let's orgranize a trip to help people that having natural disaster around the world.</p>
            </div>
        
            <fieldset><legend> Staff Sign In</legend>
                <!--add here-->
                <form class="form-inline" action="sauthenticate.php" method="POST" name="staffLoginForm">
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter your username" name="Susername" required>
                    </div>
                    <label class="sr-only" for="inlineFormInputName2">Password</label>
                    <input type="password" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter your password" name="Spwd" required>
                    <input type="checkbox" class="form-check-input" name="remember"> Remember me <br><br>
                    <input type="submit" class="btn btn-primary mb-2" name="submit" id="btnLogin" onclick="staffLogin()">
                </form>
            </fieldset>




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