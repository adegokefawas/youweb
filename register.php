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

  <header class="reg-header">
    <div class="regcol-left">
      <h2>Join the <br><span>You </span>community</h2>
    </div>
    <div class="regcol-right">
      <img src="images/hands.svg">
    </div>
  </header>
  <form action="done.php" method="POST" class="regform">
    <div class="regfield-group">
      <label for="regfirstName">Surname</label>
      <input type="text" id="regfirstName" name="regfirstName">
    </div>
    <div class="regfield-group">
      <label for="reglastName">Other Name</label>
      <input type="text" id="reglastName" name="reglastName">
    </div>
    <div class="regfield-group">
      <label for="regdob">Date of Birth</label>
      <input type="date" id="regdob" name="regdob">
    </div>
    <div class="regfield-group">
      <label for="regnumber">Phone Number</label>
      <input type="tel" id="regnumber" name="regnumber">
    </div>
    <div class="regfield-group">
      <label for="regemail">Email Address</label>
      <input type="email" id="regemail" name="regemail">
    </div>
    <div class="regfield-group">
      <label for="regorigin">State of origin</label>
      <input type="text" id="regorigin" name="regorigin">
    </div>
    <div class="regfield-group">
      <label for="regres">State of Residence</label>
      <input type="text" id="regres" name="regres">
    </div>
    <div class="regfield-group">
      <label for="reghome">Home Address</label>
      <input type="text" id="reghome" name="reghome">
    </div>
    <div class="regfield-group">
      <label for="regasp">Are you an aspirant?</label>
      <select id="regasp1" name="regasp">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
    <div class="regfield-group">
      <label for="regschool">Name of school</label>
      <input type="text" id="regschool" name="regschool">
    </div>
    <div class="regfield-group">
      <button type="submit" id="regsubmit" name="register">Register</button>
    </div>
  </form>
  <footer>
    <a href="">Powered by DAWAN</a> | <a href="https://kolhab.com">webmaster</a>
  </footer>
  <script src="script.js"></script>
</body>
</html>