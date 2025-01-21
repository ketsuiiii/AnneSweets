<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweet Creations</title>
    <link rel="stylesheet" href="homepage.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="navbar.css">
    <style>
      
@media screen and (max-width: 768px) {
    nav .right {
        background: #f8b7b7;
    }
    .dropdown-content {
        background: rgba(255, 255, 255, 0.3);;
    }
}
header {
    background: #f8b7b7;
}

    </style>
  </head>
  <body>
  <?php include 'navbar.php'?>
    <h1 class="animate-heading">LATEST AND RECOMMENDATION</h1>
    <!-- Latest Cakes Section -->
    <section id="latest-birthday-cakes">
      <h2>Latest Birthday Cakes</h2>
      <div class="cake-slider" id="birthday cakes">
        <div class="cake-card">
          <img
            src="Cakes\02-Butterfly themed cake.jpg"
            height="250px"
            width="150px"
          />
          <h3>Butterfly Themed Cake</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Butterfly Themed Cake"); ?>&price=<?php echo "600-700"; ?>&image=cakes\02-Butterfly themed cake.jpg.">
            <button class="order-button">
              <span class="order-text">Order Now</span>
              <img
                src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
                width="20"
                height="20"
                alt="Cart Icon"
              />
            </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cakes\03-Rainbow themed cake.jpg"
            height="250px"
            width="150px"
          />
          <h3>Rainbow Themed Cake</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Rainbow Themed Cake"); ?>&price=<?php echo "600-700"; ?>&image=Cakes\03-Rainbow themed cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cakes\01-Cinnamoroll themed cake .jpg"
            height="250px"
            width="150px"
          />
          <h3>Cinnamoroll Themed Cake</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Cinnamonroll-Theme-Cake");?>&price=<?php echo "600-700";?>&image=Cakes\01-Cinnamoroll themed cake .jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cakes\06-Cars themed cake.jpg"
            height="250px"
            width="150px"
          />
          <h3>CARS Themed Cake</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("CARS Theme Cake"); ?>&price=<?php echo "600-700"; ?>&image=Cakes\06-Cars themed cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cakes\05-Paw patrol skye themed cake.jpg"
            height="250px"
            width="150px"
          />
          <h3>Paw Patrol (Skye) Themed Cake</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Paw Patrol (Skye) Themed Cake"); ?>&price=<?php echo "600-700"; ?>&image=Cakes\05-Paw patrol skye themed cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cakes\08-Princess themed cake.jpg"
            height="250px"
            width="150px"
          />
          <h3>Princess Themed Cake</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Princess Themed Cake"); ?>&price=<?php echo "600-700"; ?>&image=Cakes\08-Princess themed cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
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
            src="Cupcakes\01-Butterfly themed cupcake.jpg"
            height="200px"
            width="200px"
          />
          <h3>Butterfly Themed Cupcake</h3>
          <p>Price: ₱ 450-600</p>
          <a href="cupcakeform.php?name=<?php echo urlencode("Butterfly Theme Cupcake"); ?>&price=<?php echo "450-600"; ?>&image=Cupcakes\01-Butterfly themed cupcake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cupcakes\02-Rainbow themed cupcake.jpg"
            height="200px"
            width="200px"
          />
          <h3>Rainbow Themed Cake</h3>
          <p>Price: ₱ 450-600</p>
          <a href="cupcakeform.php?name=<?php echo urlencode("Rainbow Theme Cupcake"); ?>&price=<?php echo "450-600"; ?>&image=Cupcakes\02-Rainbow themed cupcake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cupcakes\04-Cars themed cupcake.jpg"
            height="200px"
            width="200px"
          />
          <h3>CARS Themed Cupcake</h3>
          <p>Price: ₱ 450-600</p>
          <a href="cupcakeform.php?name=<?php echo urlencode("CARS Theme Cupcake"); ?>&price=<?php echo "450-600"; ?>&image=Cupcakes\04-Cars themed cupcake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cupcakes\07-Butterfly themed cupcake.jpg"
            height="200px"
            width="200px"
          />
          <h3>Butterfly Themed Cupcake</h3>
          <p>Price:₱ 450-600</p>
          <a href="cupcakeform.php?name=<?php echo urlencode("Butterfly Theme Cupcake"); ?>&price=<?php echo "450-600"; ?>&image=Cupcakes\07-Butterfly themed cupcake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cupcakes\03-White purple cupcake.jpg"
            height="200px"
            width="200px"
          />
          <h3>White Purple Cupcakes</h3>
          <p>Price: ₱ 450-600</p>
          <a href="cupcakeform.php?name=<?php echo urlencode("White Purple Cupcake"); ?>&price=<?php echo "450-600"; ?>&image=Cupcakes\03-White purple cupcake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Cupcakes\08-Pink gold cupcake.jpg"
            height="200px"
            width="200px"
          />
          <h3>Pink Gold Cupcakes</h3>
          <p>Price: ₱ 450-600</p>
          <a href="cupcakeform.php?name=<?php echo urlencode("Pink Gold Cupcake"); ?>&price=<?php echo "450-600"; ?>&image=Cupcakes\08-Pink gold cupcake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
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
            src="Bentocakes\02-Dinosaur bento cake.jpg"
            height="200px"
            width="200px"
          />
          <h3>Dinosaur Themed Bento Cake</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Dinosaur Themed Bento Cake"); ?>&price=<?php echo "600-700"; ?>&image=Bentocakes\02-Dinosaur bento cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Bentocakes\11-Black butterfly bento combo.jpg"
            height="200px"
            width="200px"
          />
          <h3>Black Butterfly Bento Combo</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Dinosaur Themed Bento Cake"); ?>&price=<?php echo "600-700"; ?>&image=Bentocakes\11-Black butterfly bento combo.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Bentocakes\16-Unicorn bento combo.jpg"
            height="200px"
            width="200px"
          />
          <h3>Unicorn Themed Bento Combo</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Unicorn Themed Bento Cake"); ?>&price=<?php echo "600-700"; ?>&image=Bentocakes\16-Unicorn bento combo.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Bentocakes\07-Purple bento combo.jpg"
            height="200px"
            width="200px"
          />
          <h3>Purple Bento Combo</h3>
          <p>Price:₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Purple Bento Combo"); ?>&price=<?php echo "600-700"; ?>&image=Bentocakes\07-Purple bento combo.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Bentocakes\19-Butterfly bento combo.jpg"
            height="200px"
            width="200px"
          />
          <h3>Butterfly Themed Bento Combo</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Butterfly Themed Bento Cake"); ?>&price=<?php echo "600-700"; ?>&image=Bentocakes\19-Butterfly bento combo.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Bentocakes\05-PinkSilver bento.jpg"
            height="200px"
            width="200px"
          />
          <h3>Pink Silver Bento Cake</h3>
          <p>Price: ₱ 600-700</p>
          <a href="orderform.php?name=<?php echo urlencode("Pink Silver Bento Cake"); ?>&price=<?php echo "600-700"; ?>&image=Bentocakes\05-PinkSilver bento.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
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
            src="Numbercakes\01-Detective conan theme.jpg"
            height="200px"
            width="200px"
          />
          <h3>Detective Conan Theme</h3>
          <p>Price: ₱ 500-600</p>
          <a href="orderform.php?name=<?php echo urlencode("Detective Conan Theme"); ?>&price=<?php echo "600-700"; ?>&image=Numbercakes\01-Detective conan theme.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Numbercakes\02-Alladin theme.jpg"
            height="200px"
            width="200px"
          />
          <h3>Alladin Theme</h3>
          <p>Price: ₱ 500-600</p>
          <a href="orderform.php?name=<?php echo urlencode("Allain Theme"); ?>&price=<?php echo "600-700"; ?>&image=Numbercakes\02-Alladin theme.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Numbercakes\03-Sunflower theme.jpg"
            height="200px"
            width="200px"
          />
          <h3>Sunflower Theme</h3>
          <p>Price: ₱ 500-600</p>
          <a href="orderform.php?name=<?php echo urlencode("Sunflower Theme"); ?>&price=<?php echo "600-700"; ?>&image=Numbercakes\03-Sunflower theme.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Numbercakes\04-Hercules theme.jpg"
            height="200px"
            width="200px"
          />
          <h3>Hercules Theme</h3>
          <p>Price: ₱ 500-600</p>
          <a href="orderform.php?name=<?php echo urlencode("Hercules Theme"); ?>&price=<?php echo "600-700"; ?>&image=Numbercakes\04-Hercules theme.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Numbercakes\05-Paw patrol theme.jpg"
            height="200px"
            width="200px"
          />
          <h3>Paw Patrol Theme</h3>
          <p>Price: ₱ 500-600</p>
          <a href="orderform.php?name=<?php echo urlencode("Paw Patrol Theme"); ?>&price=<?php echo "600-700"; ?>&image=Numbercakes\05-Paw patrol theme.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Numbercakes\06-Donald duck theme.jpg"
            height="200px"
            width="200px"
          />
          <h3>Donald Duck Theme</h3>
          <p>Price: ₱ 500-600</p>
          <a href="orderform.php?name=<?php echo urlencode("Donald Duck Theme"); ?>&price=<?php echo "600-700"; ?>&image=Numbercakes\06-Donald duck theme.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
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
            src="Specials\01-Debut Cake.jpg"
            width="200px"
            height="300px"
          />
          <h3>Purple Debut Cake</h3>
          <p>Price: ₱ 600-800</p>
          <a href="orderform.php?name=<?php echo urlencode("Purple Debut Cake"); ?>&price=<?php echo "600-800"; ?>&image=Specials\01-Debut Cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Specials\02-Fondant cake.jpg"
            width="200px"
            height="300px"
          />
          <h3>Fondant Cake</h3>
          <p>Price: ₱ 600-800</p>
          <a href="orderform.php?name=<?php echo urlencode("Fondant Cake"); ?>&price=<?php echo "600-800"; ?>&image=Specials\02-Fondant cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Specials\07-Chinese new year cake.jpg"
            width="200px"
            height="300px"
          />
          <h3>Chinese New Year Cake</h3>
          <p>Price: ₱ 600-800</p>
          <a href="orderform.php?name=<?php echo urlencode("Chinese New Year Cake"); ?>&price=<?php echo "600-800"; ?>&image=Specials\07-Chinese new year cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Specials\09-Sunflower themed Wedding cake.jpg"
            width="200px"
            height="300px"
          />
          <h3>Sunflower Themed Wedding Cake</h3>
          <p>Price: ₱ 600-800</p>
          <a href="orderform.php?name=<?php echo urlencode("Sunflower Themed Wedding Cake"); ?>&price=<?php echo "600-800"; ?>&image=Specials\09-Sunflower themed Wedding cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Specials\10-Barbie themed twin fondant cake.jpg"
            width="200px"
            height="300px"
          />
          <h3>Barbie Themed Twin Fondant Cake</h3>
          <p>Price: ₱ 600-800</p>
          <a href="orderform.php?name=<?php echo urlencode("Barbie Themed Twin Fondant Cake"); ?>&price=<?php echo "600-800"; ?>&image=Specials\10-Barbie themed twin fondant cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
        <div class="cake-card">
          <img
            src="Specials\04-Money cake.jpg"
            width="200px"
            height="300px"
          />
          <h3>Money Cake</h3>
          <p>Price: ₱ 600-800</p>
          <a href="orderform.php?name=<?php echo urlencode("Money Cake"); ?>&price=<?php echo "600-800"; ?>&image=Specials\04-Money cake.jpg">
          <button class="order-button">
            <span class="order-text">Order Now</span>
            <img
              src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
              width="20"
              height="20"
              alt="Cart Icon"
            />
          </button>
          </a>
        </div>
      </div>
    </section>
    <footer >
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
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-regular fa-envelope"></i></a>
        </div>
      </nav>
    </footer>
<script src="navbar.js"></script>
    <script src="homepage.js"></script>

  </body>
</html>
