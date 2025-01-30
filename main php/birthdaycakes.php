<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sweet Creations</title>
  <link rel="stylesheet" href="CSS/BIRTHDAY.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/navbars.css">
  <style>
    a {
      text-decoration: none;
    }
    .order-text {
      font-family: 'Times New Roman', Times, serif;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php' ?>
  <h1 class="animate-heading">Customized Birthday Cakes</h1>
  <!-- Latest Cakes Section -->
  <section id="latest-birthday-cakes">
    <div class="cake-card">
      <img
        src="..\Cakes\02-Butterfly themed cake.jpg"
        height="250px"
        width="150px" />
      <h3>Butterfly Themed Cake</h3>
      <p>Price: ₱ 1650</p>
        <a href="orderform.php?name=<?php echo urlencode("Butterfly Themed Cake"); ?>&price=<?php echo "1650"; ?>&image=<?php echo urlencode("../cakes/02-Butterfly themed cake.jpg"); ?>&sizenflavor=<?php echo urlencode("6x5 inches, Chocolate"); ?>&description=<?php echo urlencode("A beautiful ombre pink and white cake decorated with gold butterflies, pastel-colored bubble balls."); ?>">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon" />
          </button>
        </a>
    </div>
    <div class="cake-card">
      <img
        src="..\Cakes\03-Rainbow themed cake.jpg"
        height="250px"
        width="150px" />
      <h3>Rainbow Themed Cake</h3>
      <p>Price: ₱ 1550</p>
        <a href="orderform.php?name=<?php echo urlencode("Rainbow Themed Cake"); ?>&price=<?php echo "1550"; ?>&image=..\Cakes\03-Rainbow themed cake.jpg&sizenflavor=<?php echo urlencode("6x5 inches, Ube "); ?>&description=<?php echo urlencode(" A vibrant rainbow-themed cake. The cake layers are colored to resemble a rainbow, with white clouds and gold sprinkles decorating the sides."); ?>">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon" />
          </button>
        </a>
    </div>
    <div class="cake-card">
      <img
        src="..\Cakes\01-Cinnamoroll themed cake .jpg"
        height="250px"
        width="150px" />
      <h3>Cinnamoroll Themed Cake</h3>
      <p>Price: ₱ 1700</p>
        <a href="orderform.php?name=<?php echo urlencode("Cinnamonroll Theme Cake"); ?>&price=<?php echo "1700"; ?>&image=..\Cakes\01-Cinnamoroll themed cake .jpg&sizenflavor=<?php echo urlencode("6x5 inches, Mocha"); ?>&description=<?php echo urlencode("A Cinnamoroll themed cake.  The cake is two-toned, with a light blue bottom and off-white top. It's decorated with a fondant Cinnamoroll character, pastel-colored bubble balls, gold stars, and the name Lianne written in gold lettering.  A gold 5 candle is also present."); ?>">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon" />
          </button>
        </a>
    </div>
    <div class="cake-card">
      <img
        src="..\Cakes\06-Cars themed cake.jpg"
        height="250px"
        width="150px" />
      <h3>CARS Themed Cake</h3>
      <p>Price: ₱ 1650</p>
        <a href="orderform.php?name=<?php echo urlencode("CARS Theme Cake"); ?>&price=<?php echo "1650"; ?>&image=..\Cakes\06-Cars themed cake.jpg&sizenflavor=<?php echo urlencode("6x5 inches, Chocolate"); ?>&description=<?php echo urlencode("A Cars-themed cake. The cake is predominantly red, decorated with a checkered racing flag design at the bottom.  Toy cars from the movie Cars (Lightning McQueen, Mater, and another car) are placed on top and around the cake, which also features the name King Zechariah and yellow stars."); ?>">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon" />
          </button>
        </a>
    </div>
    <div class="cake-card">
      <img
        src="..\Cakes\05-Paw patrol skye themed cake.jpg"
        height="250px"
        width="150px" />
      <h3>Paw Patrol (Skye) Themed Cake</h3>
      <p>Price: ₱ 1500</p>
        <a href="orderform.php?name=<?php echo urlencode("Paw Patrol (Skye) Themed Cake"); ?>&price=<?php echo "1500"; ?>&image=..\Cakes\05-Paw patrol skye themed cake.jpg&sizenflavor=<?php echo urlencode("6x5 inches,  Chocolate"); ?>&description=<?php echo urlencode("Paw Patrol themed cake. The cake is predominantly red, decorated with a checkered racing flag design at the bottom.  Toy cars from the movie Cars (Lightning McQueen, Mater, and another car) are placed on top and around the cake, which also features the name Kitheya Lana and yellow stars."); ?>">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon" />
          </button>
        </a>
    </div>
    <div class="cake-card">
      <img
        src="..\Cakes\08-Princess themed cake.jpg"
        height="250px"
        width="150px" />
      <h3>Princess Themed Cake</h3>
      <p>Price: ₱ 2700</p>
        <a href="orderform.php?name=<?php echo urlencode("Princess Themed Cake"); ?>&price=<?php echo "2700"; ?>&image=..\Cakes\08-Princess themed cake.jpg&sizenflavor=<?php echo urlencode("4x4 and 6x5 inches, Chocolate (as specified)"); ?>&description=<?php echo urlencode("A two-tiered princess-themed cake. The top tier is light pink with white dots and a gold crown. The bottom tier is an ombre of light and dark pink, decorated with buttercream roses.  The name Maria Alexandria is written in gold lettering on the top tier. Gold ribbon accents and pink flowers add to the princess theme."); ?>">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon" />
          </button>
        </a>
    </div>
  </section>


  <footer>
    <div class="footerBottom">
      <h3>NOTE<h3>
          <p style="font-size: 12px"><span class="designer">Please note that the delivery date is 5–7 days after placing an order.<br>
              Once the order is submitted, changes to the provided details will not be possible.</span></p>
          <p style="font-size: 12px"><span class="designer">Prices may vary according to location<br>
              Additional disclaimer: Actual food presentation in website may vary</span></p>
          <p style="font-size: 12px">Copyright &copy;2023; Designed by <span class="designer">BINI_BASIC</span></p>
    </div>
    <nav>
      <div class="socialIcons">
        <a href="https://www.facebook.com/sweetcreationsbyanne14"><i class="fa-brands fa-facebook"></i></a>
        <a href="mailto:sweetcreations@gmail.com"><i class="fa-regular fa-envelope"></i></a>
        <a href="https://annesweets.xyz"><i class="fa-brands fa-google-plus"></i></a> <!-- Ensure this is a valid URL -->
      </div>
    </nav>
  </footer>


  <script src="CSS/navbar.js"></script>
</body>

</html>