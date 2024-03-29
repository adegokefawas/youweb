<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <!-- My CSS-->
  <link href="style.css" rel="stylesheet">
  <title>Youweb</title>

</head>
<body>
    <header class="index-header">
      <div class="desktop-view" id="index-view">
        <a href="#"><img src="images/vector.svg" alt=""></a>
        <nav>
            <ul>
                <li><a href="advertise.php">Advertise</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
      </div>
      <div class="mobile-view">
        <div class="title">
          <a href="#"><img src="images/vector.svg" alt=""></a>
        </div>
        <nav>
        <i onclick="openNav()"><img src="images/menu.svg" alt="logo"></i>
        <ul id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
              <li><a href="advertise.php">Advertise</a></li>
                <li id="re"><a id="ra" href="register.php">Register</a></li>
            </div>
        </ul>
        </nav>
      </div>
      <div class="hero-section">
        <div class="cona"> 
            <h2>Made for Students</h2>
            <p>Join the fastest growing<br> Nigerian student community.</p>
            <button class="rea"><a href="register.php" >Get Started</a></button><br>
        </div>
        <div class="conb">
          <img src="images/image-bg.svg" alt="logo">
        </div>
        <div class="conc">
          <h2>About YOU</h2>
          <p>You is a student community platform<br>designed to build solutions that makes life<br> easier for every Nigerian student. Our goal<br> is to make life easier for every Nigerian<br> student and provide them with the best<br> services possible. We'll go any length for<br> you.
            Sign up to be part of the biggest<br> Nigerian community and enjoy the benefits<br> that come with it.
          </p>
        </div>
      </div>
    </header>
    <div class="u-section container">
      <h2>Our Services</h2>
      <div class="row">
        <div id="col1" class="col-sm-12 col-lg-6">
          <h3><img src="images/studenticon.svg" alt=""><br>YouTutors</h3>
          <p>Learning Made Easier. Learn from anywhere with our live and recorded classes from our qualified and experienced tutors.</p>
        </div>
        <div class="col-sm-12 col-lg-6">
          <h3><img src="images/homeicon.svg" alt=""><br>YouHomes</h3>
          <p>Get the best accommodation in school without stress. We do the work for you.</p>
        </div>
      </div>
      <div class="row">
        <div id="col2" class="col-sm-12 col-lg-6">
          <h3><img src="images/foodicon.svg" alt=""><br>YouFood</h3>
          <p>Get your food delivered to your doorstep in 15minutes.</p>
        </div>
        <div class="col-sm-12 col-lg-6">
          <h3><img src="images/workicon.svg" alt=""><br>YouWork</h3>
          <p>Earn as much as you can, working for you. Imagine being paid for the things you do daily.</p>
        </div>
      </div>
      <div class="row">
        <div id="col3" class="col-sm-12 col-lg-6">
          <h3><img src="images/washicon.svg" alt=""><br>YouWash</h3>
          <p>Get your clothes picked up and dropped off at your doorstep. We do the laundry for you.</p>
        </div>
        <div class="col-sm-12 col-lg-6">
          <h3><img src="images/ticketicon.svg" alt=""><br>YouTickets</h3>
          <p>Tickets to your favorite concerts and events at your fingertips.</p>
        </div>
      </div>
    </div>
    <div class="l-section container">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <h2>Advertise with You<br>(You Marketing)</h1>
          <p>Reach millions of Nigerian Students In a more effective way with the unique you online and offline marketing models.</p>
          <a href="advertise.php#adfor"><button>Connect with the You community</button></a>
        </div>
        <div class="col-sm-12 col-lg-6">
          <img class="hidden" src="images/marketing2.svg" alt="">
        </div>
      </div>
    </div>
    <footer>
      <a href="">Powered by DAWAN</a> | <a href="https://kolhab.com">webmaster</a>
    </footer>
    <script src="script.js"></script>
</body>
</html>