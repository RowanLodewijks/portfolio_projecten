<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nike Site</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/x-icon" href="./assets/img/logo.png">
  <script src="./assets/js/script.js" defer></script>
  <!-- Icons Link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <?php include 'header.php';?>

  <section class="product_info">
    <div class="container">
      <div class="product_info_left">
        <img src="./assets/img/placeholder.png">
        <div class="product_info_imgs">
          <img src="./assets/img/placeholder.png">
          <img src="./assets/img/placeholder.png">
          <img src="./assets/img/placeholder.png">
          <img src="./assets/img/placeholder.png">
        </div>
      </div>
      <div class="product_info_right">
        <h2>Mercedes-Benz x<br>SUPERPLASTIC</h2>
        <i>$99.999</i>
        <div class="product_stars">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star-half"></ion-icon>
          <ion-icon name="star-outline"></ion-icon>
        </div>
        <div class="product_info_right_text">
          <p>Introducing the all-new Sport Car, designed for thrill-seekers and adrenaline junkies alike. This sleek and stylish car packs a punch with its powerful engine, aerodynamic design, and high-performance capabilities. Whether you're an experienced driver or just looking for an exciting ride, this car is the perfect choice for anyone who loves speed and excitement.</p>
          <br><br>
          <b>Key Features:</b>
          <ul>
            <li>High-performance engine</li>
            <li>Aerodynamic design</li>
            <li>Sport-tuned suspension</li>
            <li>Advanced safety features</li>
            <li>Cutting-edge technology</li>
            <li>Comfortable and spacious interior</li>
          </ul><br>
          <b>Benefits:</b>
          <ul>
            <li>Experience thrilling acceleration and handling</li>
            <li>Turn heads with the stylish and eye-catching design</li>
            <li>Stay safe on the road with advanced safety features</li>
            <li>Stay connected and entertained with cutting-edge technology</li>
            <li>Enjoy a comfortable and spacious interior</li>
          </ul><br>
          <p>Step into the driver's seat and experience the rush of the open road like never before. The Sport Car is the perfect choice for anyone who loves speed and excitement. Get ready to hit the gas and feel the power!</p>
        </div>
        <button>Buy</button>
      </div>
    </div>
  </section>


  <?php include 'footer.php';?>
  
</body>

</html>