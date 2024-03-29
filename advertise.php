<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <!-- My CSS-->
  <link href="style.css" rel="stylesheet">
  <title>Youweb</title>

</head>
<body>
  
  <header class="ad-header">
    <div class="desktop-view">
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
    <div class="adcol-left">
      <h2><span>You </span>marketing</h2>
    </div>
    <div class="adcol-right">
      <img src="images/marketing.svg">
    </div>
  </header>
  <section class="ad-section">
    <div>
      <h2>Social Media Marketing</h2>
      <p>Get unique access to the You student network throughout high impact media and geo-fenced social media marketing models.</p>
    </div>
    <div>
      <h2>Branding Your Products</h2>
      <p>Make your brand more visible to our large network by branding our various product packages with your brand message giving your brand more engagements.</p>
    </div>
    <div>
      <h2>Live Experiential Programs</h2>
      <p>You marketing brings to you live experiential programs in different college campuses everywhere in Nigeria where brands can showcase their products during different
        You events.</p>
    </div>
    <div>
      <h2>YOU Tutoring and games</h2>
      <p>Drive positive brand engagement as you help the You student community learn smarter through our different learning programs.
        
        <span>This model integrates your brand message during the study process. 
        Gain more visibility as we also provide authentic integration of your brand messages in our online games.</span></p>
    </div>
  </section>
  <form action="#" class="adform" id="adfor">
    <h2>Tell us about <br>yourself</h2>
    <hr>
    <p>Ready to connect with the You Student<br> network? Complete this form and a <br>member of our team will be in touch with<br> you shortly.</p>
    <div class="adfield-group">
      <label for="adfirstName">First Name</label>
      <input type="text" id="adfirstName" name="adfirstName">
    </div>
    <div class="adfield-group">
      <label for="adlastName">Last Name</label>
      <input type="text" id="adlastName" name="adlastName">
    </div>
    <div class="adfield-group">
      <label for="adcom">Company Name</label>
      <input type="text" id="adcom" name="adcom">
    </div>
    <div class="adfield-group">
      <label for="adcomu">Company URL</label>
      <input type="text" id="adcomu" name="adcomu">
    </div>
    <div class="adfield-group">
      <label for="ademail">Email Address</label>
      <input type="email" id="ademail" name="email">
    </div>
    <div class="adfield-group">
      <label for="adstate">State</label>
      <input type="address" id="adstate" name="adstate">
    </div>
    <div class="adfield-group">
      <label for="adcon">Contact Information</label>
      <input type="address" id="adcon" name="adcon">
    </div>
    <div class="adfield-group">
      <button id="adsubmit">Submit</button>
    </div>
  </form>
  <footer>
    <a href="">Powered by DAWAN</a> | <a href="https://kolhab.com">webmaster</a>
  </footer>
  <script src="script.js"></script>
</body>
</html>