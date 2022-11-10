<?php
if(isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Project</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon2.png">
  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <section class="section1" id="section1">
    <div class="canvas_container">
      <canvas id="canv" width="32" height="32"></canvas>
    </div>
    <div class="container">
      <!-- HEADER START -->
      <header>
        <a href="./index.html">
          <div class="logo">Rowan</div>
        </a>
        <ul>
          <li><a href="./index.html#section1">Home</a></li>
          <li><a href="./index.html#section2">About Me</a></li>
          <li><a href="./index.html#section3">My Projects</a></li>
          <li class="active"><a href="#section1">Contact</a></li>
        </ul>
        <a href="#" class="signin_link">
          <div class="signin_text">Sign In<ion-icon name="chevron-forward-outline"></ion-icon>
          </div>
        </a>
        <button class="menu_toggle"><ion-icon name="menu-outline"></ion-icon></button>
      </header>
      <div class="menu">
        <a href="./index.html" onclick="closeMenu();">
          <div class="menu_logo">Rowan</div>
        </a>
        <ul>
          <a class="menuclose" href="./index.html#section1" onclick="closeMenu();"><li class="active">Home<ion-icon name="chevron-forward-outline"></ion-icon></li></a>
          <a href="./index.html#section2" onclick="closeMenu();"><li>About Me<ion-icon name="chevron-forward-outline"></ion-icon></li></a>
          <a href="./index.html#section3" onclick="closeMenu();"><li>My Projects<ion-icon name="chevron-forward-outline"></ion-icon></li></a>
          <a href="./contact.html" onclick="closeMenu();"><li>Contact<ion-icon name="chevron-forward-outline"></ion-icon></li></a>
        </ul>
        <a href="#" class="menu_signin_link" onclick="closeMenu();">
          <div class="menu_signin_text2">Sign In<ion-icon name="chevron-forward-outline"></ion-icon></div>
        </a>
      </div>
      <div class="contact_title">
        <h2>Bedankt, <?php echo $_POST["fname"]; ?></h2>
      </div>
      <div class="thanks">
        Het formulier is verstuurd.<br><br>
        Uw gegevens zijn:<br><br>
        Naam:<br>
        <?php echo $_POST["fname"] . " " .$_POST["lname"]; ?><br><br>
        Email:<br>
        <?php echo $_POST["email"]; ?><br><br>
        Subject:<br>
        <?php echo $_POST["subject"]; ?><br><br>
        Message:<br>
        <?php echo $_POST["message"]; ?><br><br>
        <a href="./index.html" class="goback_link">
          <div class="goback">Go Back</div>
        </a>
      </div>
    </div>
  </section>
  <!-- HEADER END -->

  <!-- MAIN START -->
  <section class="section4">
    <div class="container">
      <footer>
        <div class="footer_top">
          <div class="footer_top_text">
            <h4>Rowan Lodewijks</h4>
            <p>Hogebiezen 26<br>3401 RL IJSSELSTEIN<br>Nederland<br>06 - 131 551 94<br>lodewijksrowan@gmail.com</p>
          </div>
          <div class="footer_top_text">
            <h4>Meer Info</h4>
            <p>Onze Werktijden<br>Belangrijk Om Te Weten<br>Bestelling</p>
          </div>
          <div class="footer_top_text">
            <h4>Support</h4>
            <p>Contact<br>Productveiligheid
              Mededelingen<br>Softwareondersteuning<br>Reparaties<br>Productregistratie<br>Feedback geven</p>
          </div>
          <div class="footer_top_text">
            <h4>Socials</h4>
            <span>
              <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
              <a href="https://github.com/RowanLodewijks" target="_blank"><ion-icon name="logo-github"></ion-icon></a>
              <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            </span>
          </div>
        </div>
        <div class="line"></div>
        <div class="footer_bottom">
          <ul>
            <li><a href="#">©
                <script>	document.write(new Date().getFullYear())</script> Rowan Lodewijks
              </a></li>
            <li><a href="#">Algemene voorwaarden</a></li>
            <li><a href="#">Privacyverklaring</a></li>
            <li><a href="#">Website laten maken</a></li>
          </ul>
        </div>
      </footer>
    </div>
  </section>
  <!-- MAIN END -->
</body>

</html>