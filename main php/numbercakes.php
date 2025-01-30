<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sweet Creations</title>
  <link rel="stylesheet" href="CSS/NUMBER.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/navbars.css">
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
    }

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
  <h1 class="animate-heading">Customized Number Cakes</h1>
  <section id="latest-number-cakes" class="section-background">
    <div class="cake-card">
      <img
        src="..\Numbercakes\01-Detective conan theme.jpg"
        height="200px"
        width="200px" />
      <h3>Detective Conan Theme</h3>
      <p>Price: ₱ 2650</p>
      <a href="orderform.php?name=<?php echo urlencode("Detective Conan Theme"); ?>&price=<?php echo "2650"; ?>&image=..\Numbercakes\01-Detective conan theme.jpg&sizenflavor=<?php echo urlencode("A Detective Conan-themed cake shaped number 11. The cake is decorated with images of Detective Conan characters, a soccer ball, and other themed elements.  It has a chocolate base and is frosted with blue and white frosting. The name ETHAN ARKIN is written on the cake.  The cake appears to be made of individual cupcake-like pieces."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Numbercakes\02-Alladin theme.jpg"
        height="200px"
        width="200px" />
      <h3>Alladin Theme</h3>
      <p>Price: ₱ 2650</p>
      <a href="orderform.php?name=<?php echo urlencode("Allain Theme"); ?>&price=<?php echo "2650"; ?>&image=..\Numbercakes\02-Alladin theme.jpg&sizenflavor=<?php echo urlencode("An Aladdin-themed cake shaped number 10. The cake is decorated with images of Aladdin characters, including Aladdin, Jasmine, and Genie, along with other themed elements like a magic lamp and a magic carpet. It has a chocolate base and is frosted with purple and teal frosting. The name ETHAN ARKIN is written on the cake. The cake appears to be made of individual cupcake-like pieces."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Numbercakes\03-Sunflower theme.jpg"
        height="200px"
        width="200px" />
      <h3>Sunflower Theme</h3>
      <p>Price: ₱ 1500</p>
      <a href="orderform.php?name=<?php echo urlencode("Sunflower Theme"); ?>&price=<?php echo "1500"; ?>&image=..\Numbercakes\03-Sunflower theme.jpg&sizenflavor=<?php echo urlencode("A sunflower-themed cake shaped number 2. The cake is decorated with yellow sunflower fondant decorations and white frosting. The name LUANNE is written on the cake.  The cake has a chocolate base."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Numbercakes\04-Hercules theme.jpg"
        height="200px"
        width="200px" />
      <h3>Hercules Theme</h3>
      <p>Price: ₱ 1600</p>
      <a href="orderform.php?name=<?php echo urlencode("Hercules Theme"); ?>&price=<?php echo "1600"; ?>&image=..\Numbercakes\04-Hercules theme.jpg&sizenflavor=<?php echo urlencode("A Hercules-themed cake shaped  number 9. The cake is decorated with images of Hercules and other characters from the movie, along with lightning bolts and clouds.  The name ETHAN ARKIN is written on the cake. The cake has a chocolate base."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Numbercakes\05-Paw patrol theme.jpg"
        height="200px"
        width="200px" />
      <h3>Paw Patrol Theme</h3>
      <p>Price: ₱ 1600</p>
      <a href="orderform.php?name=<?php echo urlencode("Paw Patrol Theme"); ?>&price=<?php echo "1600"; ?>&image=..\Numbercakes\05-Paw patrol theme.jpg&sizenflavor=<?php echo urlencode("A Paw Patrol-themed cake shaped number 3. The cake is decorated with images of the Paw Patrol characters and is frosted with blue and white frosting. The name CLOUD AUSTIN is written on the cake. The cake has a chocolate base."); ?>&description=<?php echo urlencode(""); ?>">
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
        src="..\Numbercakes\06-Donald duck theme.jpg"
        height="200px"
        width="200px" />
      <h3>Donald Duck Theme</h3>
      <p>Price: ₱ 1600</p>
      <a href="orderform.php?name=<?php echo urlencode("Donald Duck Theme"); ?>&price=<?php echo "1600"; ?>&image=..\Numbercakes\06-Donald duck theme.jpg&sizenflavor=<?php echo urlencode("A Donald Duck-themed cake shaped number 8. The cake is decorated with images of Donald Duck, nautical elements like a ship, anchor, and life preserver, and is frosted with blue, red, and white frosting.  The name ETHAN ARKIN is written on the cake. The cake has a chocolate base."); ?>&description=<?php echo urlencode(""); ?>">
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