<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sweet Creations</title>
  <link rel="stylesheet" href="CSS/BENTO.css" />
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
  <h1 class="animate-heading">Customized Bento Cakes and Combos</h1>
  <!-- Latest Cakes Section -->
  <section id="latest-bento-cakes" class="section-background">


    <div class="cake-card">
      <img
        src="..\Bentocakes\02-Dinosaur bento cake.jpg"
        height="200px"
        width="200px" />
      <h3>Dinosaur Themed Bento Cake</h3>
      <p>Price: ₱ 450</p>
        <a href="orderform.php?name=<?php echo urlencode("Dinosaur Themed Bento Cake"); ?>&price=<?php echo "450"; ?>&image=..\Bentocakes\02-Dinosaur bento cake.jpg&sizenflavor=<?php echo urlencode("4x3 inches, Vanilla"); ?>&description=<?php echo urlencode("Decorated with a cartoon dinosaur and monstera leaves with chocolate flavor. The cake is light blue and the dinosaur is green.  Small white pearls are used as accents."); ?>">
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
        src="..\Bentocakes\11-Black butterfly bento combo.jpg"
        height="200px"
        width="200px" />
      <h3>Black Butterfly Bento Combo</h3>
      <p>Price: ₱ 900</p>
        <a href="orderform.php?name=<?php echo urlencode("Black Butterfly Bento Combo"); ?>&price=<?php echo "900"; ?>&image=..\Bentocakes\11-Black butterfly bento combo.jpg&sizenflavor=<?php echo urlencode("4x3 inches, Chocolate"); ?>&description=<?php echo urlencode("A bento cake combo featuring a small round black cake decorated with butterflies and surrounded by a dozen cupcakes. The cupcakes have a dark chocolate base and are topped with a swirl of white and green frosting, also decorated with small purple butterflies and silver sprinkles.  The phrase Young & Sweet Only 17 is written on the bento cake."); ?>">
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
        src="..\Bentocakes\16-Unicorn bento combo.jpg"
        height="200px"
        width="200px" />
      <h3>Unicorn Themed Bento Combo</h3>
      <p>Price: ₱ 550</p>
        <a href="orderform.php?name=<?php echo urlencode("Unicorn Themed Bento Cake"); ?>&price=<?php echo "550"; ?>&image=..\Bentocakes\16-Unicorn bento combo.jpg&sizenflavor=<?php echo urlencode("4x3 inches, Vanilla"); ?>&description=<?php echo urlencode("A unicorn-themed bento cake combo ube flavor. It includes a small round cake decorated as a unicorn's face with colorful frosting and a gold horn, and two rainbow-colored cupcakes"); ?>">
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
        src="..\Bentocakes\07-Purple bento combo.jpg"
        height="200px"
        width="200px" />
      <h3>Purple Bento Combo</h3>
      <p>Price:₱ 600</p>
        <a href="orderform.php?name=<?php echo urlencode("Purple Bento Combo"); ?>&price=<?php echo "600"; ?>&image=..\Bentocakes\07-Purple bento combo.jpg&sizenflavor=<?php echo urlencode("4x3 inches, Ube"); ?>&description=<?php echo urlencode("A purple bento cake combo ube flavor.  It includes a small round cake with Happy Birthday written on it and decorated with purple frosting roses and silver sprinkles, along with two cupcakes decorated with matching purple frosting."); ?>">
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
        src="..\Bentocakes\19-Butterfly bento combo.jpg"
        height="200px"
        width="200px" />
      <h3>Butterfly Themed Bento Combo</h3>
      <p>Price: ₱ 700</p>
        <a href="orderform.php?name=<?php echo urlencode("Butterfly Themed Bento Cake"); ?>&price=<?php echo "700"; ?>&image=..\Bentocakes\19-Butterfly bento combo.jpg&sizenflavor=<?php echo urlencode("4x3 inches, Mocha"); ?>&description=<?php echo urlencode("A butterfly-themed bento cake combo. It includes a small round chocolate cake decorated with pink and purple frosting flowers, butterflies, and gold balls, with the name RENIESE ALIAH written on it, and two cupcakes with matching butterfly and flower decorations."); ?>">
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
        src="..\Bentocakes\05-PinkSilver bento.jpg"
        height="200px"
        width="200px" />
      <h3>Pink Silver Bento Cake</h3>
      <p>Price: ₱ 450</p>
        <a href="orderform.php?name=<?php echo urlencode("Pink Silver Bento Cake"); ?>&price=<?php echo "450"; ?>&image=..\Bentocakes\05-PinkSilver bento.jpg&sizenflavor=<?php echo urlencode("4x3 inches, Strawberry"); ?>&description=<?php echo urlencode("A pink bento  chocolate cake decorated with silver sprinkles. The words Happy Birthday Joyce are written on the cake."); ?>">
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