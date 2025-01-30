<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sweet Creations</title>
  <link rel="stylesheet" href="CSS/specialcake.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/navbars.css">
  <style>
    a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php' ?>
  <h1 class="animate-heading">Customized Special Cakes</h1>
  <!-- Latest Cakes Section -->
  <section id="latest-special-cakes" class="section-background">
    <div class="cake-card">
      <img
        src="..\Specials\01-Debut Cake.jpg"
        width="200px"
        height="300px" />
      <h3>Purple Debut Cake</h3>
      <p>Price: ₱ 5500</p>
      <a href="orderform.php?name=<?php echo urlencode("Purple Debut Cake"); ?>&price=<?php echo "5500"; ?>&image=..\Specials\01-Debut Cake.jpg&sizenflavor=<?php echo urlencode("A five-tiered debut cake, each layer infused with rich chocolate flavor, was presented in shades of purple. The cake features a layer with a clear section in the middle containing butterfly crystals and lights.  The top tier is a solid purple, the middle is clear with the crystals, and the bottom is a lighter purple with purple brushstrokes.  The cake is decorated with purple flowers and butterflies. The number 18 is on top. The name Yzzah is written on the cake."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Specials\02-Fondant cake.jpg"
        width="200px"
        height="300px" />
      <h3>Fondant Cake</h3>
      <p>Price: ₱ 6500</p>
      <a href="orderform.php?name=<?php echo urlencode("Fondant Cake"); ?>&price=<?php echo "6500"; ?>&image=..\Specials\02-Fondant cake.jpg&sizenflavor=<?php echo urlencode("This elegant two-layer cake features a rich mocha flavor, encased in smooth fondant.  Black and gold balloon decorations add a touch of sophistication, while the personalized message Happy 21st Birthday Richmond and SK Chairman make it a truly unique celebration cake."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Specials\07-Chinese new year cake.jpg"
        width="200px"
        height="300px" />
      <h3>Chinese New Year Cake</h3>
      <p>Price: ₱ 4000</p>
      <a href="orderform.php?name=<?php echo urlencode("Chinese New Year Cake"); ?>&price=<?php echo "4000"; ?>&image=..\Specials\07-Chinese new year cake.jpg&sizenflavor=<?php echo urlencode("A two-tiered mocha cake, designed for Chinese New Year celebrations, features red fondant, gold dragon accents, and the phrase So Happy Together in gold lettering.  A Pasig Lions Club logo topper completes the design. "); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Specials\09-Sunflower themed Wedding cake.jpg"
        width="200px"
        height="300px" />
      <h3>Sunflower Themed Wedding Cake</h3>
      <p>Price: ₱ 7250</p>
      <a href="orderform.php?name=<?php echo urlencode("Sunflower Themed Wedding Cake"); ?>&price=<?php echo "7250"; ?>&image=..\Specials\09-Sunflower themed Wedding cake.jpg&sizenflavor=<?php echo urlencode("This charming three-tiered wedding cake boasts a rustic, semi-naked design. The bottom two layers are rich chocolate cake, providing a delicious base for the stunning sunflower decorations.  The cake is beautifully presented with additional sunflower accents and greenery."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Specials\10-Barbie themed twin fondant cake.jpg"
        width="200px"
        height="300px" />
      <h3>Barbie Themed Twin Fondant Cake</h3>
      <p>Price: ₱ 5500</p>
      <a href="orderform.php?name=<?php echo urlencode("Barbie Themed Twin Fondant Cake"); ?>&price=<?php echo "5500"; ?>&image=..\Specials\10-Barbie themed twin fondant cake.jpg&sizenflavor=<?php echo urlencode("This adorable Barbie-themed twin cake features a delicious chocolate filling. Each fondant-covered cake is decorated with pink and white frosting, stars, and pink decorative balls. One cake is personalized with Barbie, and the other with Tasha. A whimsical rainbow adds a touch of magic."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Specials\04-Money cake.jpg"
        width="200px"
        height="300px" />
      <h3>Money Cake</h3>
      <p>Price: ₱ 4550</p>
      <a href="orderform.php?name=<?php echo urlencode("Money Cake"); ?>&price=<?php echo "4550"; ?>&image=..\Specials\04-Money cake.jpg&sizenflavor=<?php echo urlencode("This elegant single-tiered cake features a rich chocolate flavor and a semi-naked design.  The creamy frosting is beautifully adorned with gold leaf accents, delicate artificial flowers in shades of cream and brown, and shimmering gold decorative balls. A sophisticated Happy Birthday cake topper completes the look."); ?>&description=<?php echo urlencode(""); ?>">
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


  <!-- Footer -->
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