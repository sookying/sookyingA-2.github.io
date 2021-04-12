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

    <title>Crisis Relief Services | Home  </title>
    <link rel="stylesheet" href="crs.css">
  </head>
  <body id="top">
    <div id="wrapper">
      <ul class="nav navbar sticky-top nav-fill">
        <li class="nav-item"> <a class="nav-link active" href="index.php"> Home </a></li>
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
            <li><a href="staffLogin.php">Staff</a></li>
            <li><a href="volunteerLogin.php">Volunteer</a></li>
          </ul>
        </li>
      </ul>
      
      <div class="img">
        <img class="slideshow" src="crsImages/crs1.jpg" style="width: 100%;" alt="flood" height="450">
        <img class="slideshow" src="crsImages/crs2.jpg" style="width: 100%;" alt="flood" height="450">
        <img class="slideshow" src="crsImages/crs3.jpg" style="width: 100%;" alt="wildfire" height="450">
        <img class="slideshow" src="crsImages/crs4.jpg" style="width: 100%;" alt="wildfire" height="450">
        <img class="slideshow" src="crsImages/crs5.jpg" style="width: 100%;" alt="earthquake" height="450">
        <img class="slideshow" src="crsImages/crs6.jpeg" style="width: 100%;" alt="flood" height="450">
        <img class="slideshow" src="crsImages/crs7.jpeg" style="width: 100%;" alt="earthquake" height="450">
        <img class="slideshow" src="crsImages/crs8.jpeg" style="width: 100%;" alt="wildfire" height="450">
      </div>

      <script>
        var noPic = 0;
        carousel();
        
        function carousel() {
          var i;
          var img = document.getElementsByClassName("slideshow");
          for (i = 0; i < img.length; i++) {
            img[i].style.display = "none";  
          }
          noPic++;
          if (noPic > img.length) {noPic = 1}    
          img[noPic-1].style.display = "block";  
          setTimeout(carousel, 3000);
        }
      </script>

      <header>
        <h1 class="text-capitalize">crisis relief services (CRS)</h1>
      </header>

      <div id="topic">
        <h4><u>Who we are ?</u></h4>
        <p>Crisis Relief Services (CRS) is an NGO (Non-Government Organization) that aims 
          to help people who are facing crises arising from natural disasters such as flood, earthquakes and wildfire.
        </p>
        
        <p>We are here to open this website is because we know that there are many people who have a kind heart are willing to lend a helping hand to provide relief services, 
          but unfortunately, they cannot find any formal way to help out the people in disasters and know more about information about natural disaster that happening around the world.
        </p>

        <h4><u>Services</u></h4>
        <ul id="serviceList">
          <li>Organize trips to the disaster areas to provide relief services.</li>
          <li>Train volunteers to minimise lost of life.</li>
          <li>Rebuilding infrastructure, medical care and rehabilitation.</li>
        </ul>
      </div>

      

      
      <div class="container">
        <div class="border p-3">
          <img alt="donations" src="crsImages/donation.jpg" style="width: 75px; height: 70px; float: right;">
          <a>Donations</a>
          <div id="donationText">
            All the funding will be used for operations and projects. 
            Your gift will change lives. Let's help them <span>TOGETHER</span> !<br>
            Donate it <span>NOW</span> !
            <div>
              <form class="form-inline" name="donationForm" action="donation.php" method="POST">
                <div class="form-group">
                  <label>Name</label><input class="form-control" type="text" name="dName" required>
                  <label>Contact Number</label><input class="form-control" type="tel" name="dPhone" required>
                  <label>Email Address</label><input class="form-control" type="email" name="dEmail" required> 
                  <label>Transaction Date</label><input class="form-control" type="date" name="dDate" required>
                  <label>Bank In / Transfer Slip</label><input class="form-control" type="file" name="dFile" required>
                  <label>Amount</label><input class="form-control" type="text" name="dAmount" required>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
            </div>
          </div>
        </div>
      </div>
      <br>
      <p class="text-center">Instead of giving donation, you can also become part of our member !</p>
      <p class="text-center">Please share this website so that we can help more refugees through our relief services.</p>
      <p class="text-center"><span id="rmb">Remember !</span> We can help a family overcome their difficulties through our little power. </p>



      
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
      <br>
      <a href=#top style="color: black; font-weight: 500; float: right; padding-bottom: 6px; padding-right: 10px;">Back to the Top</a>
      <br>

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