<?php

session_start();

$con = mysqli_connect("localhost", "ashistnt_youweb", "youweb20202020");
mysqli_select_db($con, 'ashistnt_youweb');

if(isset($_POST['register']))
{
	$regfirstName = $_POST['regfirstName'];
	$reglastName = $_POST['reglastName'];
	$regdob = $_POST['regdob'];
	$regnumber = $_POST['regnumber'];
	$regemail = $_POST['regemail'];
	$regorigin = $_POST['regorigin'];
	$regres = $_POST['regres'];
	$reghome = $_POST['reghome'];
	$regasp = $_POST['regasp'];
	$regschool = $_POST['regschool'];
	
	
	$query = "INSERT INTO `userreg` (`regfirstName`,`reglastName`,`regdob`,`regnumber`,`regemail`,`regorigin`,`regres`,`reghome`,`regasp`,`regschool`) VALUES('$regfirstName','$reglastName','$regdob','$regnumber','$regemail','$regorigin','$regres','$reghome','$regasp','$regschool')";
	//die($query);
	$query_run = mysqli_query($con, $query);
	
	if($query_run)
	{
	echo '<script type="text/javascript"> alert("Signed up successful");</script>';
	}
	else
	{
	echo '<script type="text/javascript"> alert("Signed up failed");</script>';
	}
	}
	

?>

<?php
$myemail = 'youdotcomdotng@gmail.com';

    $regfirstName = $_POST['regfirstName'];
	$reglastName = $_POST['reglastName'];
	$regdob = $_POST['regdob'];
	$regnumber = $_POST['regnumber'];
	$regemail = $_POST['regemail'];
	$regorigin = $_POST['regorigin'];
	$regres = $_POST['regres'];
	$reghome = $_POST['reghome'];
	$regasp = $_POST['regasp'];
	$regschool = $_POST['regschool'];

    
    $email_subject = "YOU.COM.NG form submission";
    $email_body = "You have received a new message. ".
        " Here are the details:\n First Name: $regfirstName \n Last Name: $reglastName \n Date of Birth: $regdob \n Phone Number: $regnumber \n".
        "Email: $regemail\n State of Origin: $regorigin\n State of Residence: $regres\n Home Address: $reghome\n Aspirant: $regasp\n School: $regschool\n";
    $headers = "mailed-by: $regemail";
    $headers = "Reply-To: $regemail";
    mail($myemail,$email_subject,$email_body,$headers);
    
?>


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
  <title>Youweb</title>
<!-- My CSS-->
  <link href="style.css" rel="stylesheet">
  <style>
.done-section{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-image: url(images/Shape-m.png);
    margin-bottom: -130px;
}
footer a{
    font-family: Avenir LT Std;
    color: #ffffff;
}
.done-section .cona h1{
    margin-top: 50px;
    font-family: ITC Souvenir;
    font-style: normal;
    font-weight: 350;
    font-size: 24px;
    line-height: 43px;
    text-align: center;
    color: #FFE01B;
}
.done-section .cona p{
    font-family: Avenir LT Std;
    font-weight: 100;
    font-size: 16px;
    line-height: 16px;
    text-align: center;
    color: #FFFFFF;
    margin-bottom: 20px;
}
.done-section .cona .dp{
    margin-top: 10px;
    font-family: Avenir LT Std;
    font-weight: 100;
    font-size: 16px;
    line-height: 16px;
    text-align: center;
    text-color: #000000;
     text-decoration: underline;
}
.done-section .cona .dp a{
    color: #ffffff;
}
.done-section .cona .rea{
    background-color: #FFE01B;
    padding: 5px 10px;
    border: none;
    border-radius: 3px;
    margin-bottom: 10px;
}
.done-section .cona .rea a{
    color: black;
}
.done-section .cona .real{
    font-family: Avenir LT Std;
    font-weight: 350;
    background: transparent;
    padding: 10px 10px;
    border: 1px solid white;
    border-radius: 5px;
    margin-bottom: 20px;
}
.done-section .cona .real a{
    color: white;
}
.done-section .cona .real img{
    height: 25px;
    width: 25px;
    margin-right: 5px;
}
.done-section .conb{
    align-items: right;
    margin-top: 65px;
    margin-bottom: 120px;
}

@media only screen and (min-width: 1200px){
    .done-section{
        margin-top: -12%;
        display: flex;
        flex-direction: row;
    }
    .done-section .cona{
        margin-top: -300px;
        
    }
    .done-section .conb img{
        margin-top: -200px;
        width: 500px;
        height: 1000px;
        align-items: left;
    }
}
  </style>
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
                <li><a id="ra" href="register.php">Register</a></li>
            </div>
        </ul>
        </nav>
      </div>
      <div class="done-section">
        <div class="cona">
            <h1>Voila!</h1>
            <p>You are now part of the YOU community. We will inform you as soon as our services start rolling out. Cheers!</p>
            <button class="real"><img src="images/tele.svg"><a href="https://t.me/youstudents" target="_blank">Join our Telegram Channel</a></button><br>
            <button class="real"><img src="images/what.svg"><a href="https://api.whatsapp.com/send?phone=2349031592663&text=I%20would%20love%20to%20be%20part%20of%20the%20You%20community.%20%20My%20name%20is%20" target="_blank">Connect with us on Whatsapp</a></button>
            <p class="dp"><a href="/index.php">Back to home</a></p>
        </div>
        <div class="conb">
          <img src="images/image-bg.svg" alt="logo">
        </div>
      </div>
      <footer>
      <a href="">Powered by DAWAN</a> | <a href="https://kolhab.com">webmaster</a>
    </footer>
    </header>
    <script src="script.js"></script>
</body>
</html>
