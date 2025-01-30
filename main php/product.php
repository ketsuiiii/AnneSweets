<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sweet Creations</title>
  <link rel="stylesheet" href="CSS/products.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/navbars.css">
  <style>
    .order-button {
      font-family: 'Times New Roman', Times, serif;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php' ?>
  <h1 class="animate-heading">LATEST AND RECOMMENDATION</h1>
  <section id="latest-birthday-cakes">
    <h2>Latest Birthday Cakes</h2>
    <div class="cake-slider" id="birthday cakes">
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
      <!-- Add more cake cards as needed -->
    </div>
  </section>
  <section id="latest-cupcakes" class="section-background">
    <h2>Latest Cupcakes</h2>
    <div class="cake-slider">
      <div class="cake-card">
        <img
          src="..\Cupcakes\01-Butterfly themed cupcake.jpg"
          height="200px"
          width="200px" />
        <h3>Butterfly Themed Cupcake</h3>
        <p>Price: ₱ 450</p>
        <a href="orderform.php?name=<?php echo urlencode("Butterfly Theme Cupcake"); ?>&price=<?php echo "450"; ?>&image=..\Cupcakes\01-Butterfly themed cupcake.jpg&sizenflavor=<?php echo urlencode("A box of twelve cupcakes with a butterfly theme.  The cupcakes have a chocolate base and are topped with a swirl of light pink and lavender frosting, creating a delicate, two-toned effect."); ?>&description=<?php echo urlencode(""); ?>">
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
          src="..\Cupcakes\02-Rainbow themed cupcake.jpg"
          height="200px"
          width="200px" />
        <h3>Rainbow Themed Cupcake</h3>
        <p>Price: ₱ 450</p>
        <a href="orderform.php?name=<?php echo urlencode("Rainbow Theme Cupcake"); ?>&price=<?php echo "450"; ?>&image=..\Cupcakes\02-Rainbow themed cupcake.jpg&sizenflavor=<?php echo urlencode("A box of twelve rainbow-themed cupcakes. Each cupcake has a dark chocolate base and is topped with a vibrant swirl of rainbow-colored frosting."); ?>&description=<?php echo urlencode(""); ?>">
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
          src="..\Cupcakes\04-Cars themed cupcake.jpg"
          height="200px"
          width="200px" />
        <h3>CARS Themed Cupcake</h3>
        <p>Price: ₱ 650</p>
        <a href="orderform.php?name=<?php echo urlencode("CARS Theme Cupcake"); ?>&price=<?php echo "650"; ?>&image=..\Cupcakes\04-Cars themed cupcake.jpg&sizenflavor=<?php echo urlencode("A box of twelve Cars-themed cupcakes.  Half are topped with red frosting, and half with white frosting. Each cupcake is decorated with a small, round Cars character image."); ?>&description=<?php echo urlencode(""); ?>">
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
          src="..\Cupcakes\07-Butterfly themed cupcake.jpg"
          height="200px"
          width="200px" />
        <h3>Butterfly Themed Cupcake</h3>
        <p>Price:₱ 600</p>
        <a href="orderform.php?name=<?php echo urlencode("Butterfly Theme Cupcake"); ?>&price=<?php echo "600"; ?>&image=..\Cupcakes\07-Butterfly themed cupcake.jpg&sizenflavor=<?php echo urlencode("A dozen cupcakes decorated with a swirl of pink and purple frosting and white pearls.  The cupcakes have a dark chocolate base.  The overall style suggests a butterfly theme."); ?>&description=<?php echo urlencode(""); ?>">
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
          src="..\Cupcakes\03-White purple cupcake.jpg"
          height="200px"
          width="200px" />
        <h3>White Purple Cupcakes</h3>
        <p>Price: ₱ 650</p>
        <a href="orderform.php?name=<?php echo urlencode("White Purple Cupcake"); ?>&price=<?php echo "650"; ?>&image=..\Cupcakes\03-White purple cupcake.jpg&sizenflavor=<?php echo urlencode("A dozen cupcakes with a white and purple theme.  The cupcakes have dark chocolate bases.  Half are topped with light purple frosting and burgundy flower decorations. The other half have white frosting and gold leaf decorations."); ?>&description=<?php echo urlencode(""); ?>">
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
          src="..\Cupcakes\08-Pink gold cupcake.jpg"
          height="200px"
          width="200px" />
        <h3>Pink Gold Cupcakes</h3>
        <p>Price: ₱ 600</p>
        <a href="orderform.php?name=<?php echo urlencode("Pink Gold Cupcake"); ?>&price=<?php echo "600"; ?>&image=..\Cupcakes\08-Pink gold cupcake.jpg&sizenflavor=<?php echo urlencode("A dozen cupcakes with a pink and gold theme.  The cupcakes have a dark chocolate base and are topped with pink frosting and small gold sprinkles."); ?>&description=<?php echo urlencode(""); ?>">
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
    </div>
  </section>
  <section id="latest-bento-cakes" class="section-background">
    <h2>Latest Bento Cakes</h2>
    <div class="cake-slider">
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
    </div>
  </section>
  <section id="latest-number-cakes" class="section-background">
    <h2>Latest Number Cakes</h2>
    <div class="cake-slider">
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
    </div>
  </section>
  <section id="latest-special-cakes" class="section-background">
    <h2>Latest Special Cakes</h2>
    <div class="cake-slider">
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
  <script src="CSS/homepage.js"></script>

</body>

</html>