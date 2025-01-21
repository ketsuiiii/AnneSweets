<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweet Creations</title>
    <link rel="stylesheet" href="cupcakes.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="navbar.css">
    <style>
      
      @media screen and (max-width: 768px) {
          nav .right {
              background: #b2ebf2;
          }
          .dropdown-content {
              background: rgba(255, 255, 255, 0.3);
          }
      }
      header {
          background: transparent;
      }
      
          </style>
  </head>
  <body>
  <?php include 'navbar.php'?>
    <h1 class="animate-heading">Customized Cupcakes</h1>
    <!-- Latest Cakes Section -->
    <section id="latest-cupcakes" class="section-background">
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
      <div class="cake-card">
        <img
          src="Cupcakes\01-Butterfly themed cupcake.jpg"
          height="200px"
          width="200px"
        />
        <h3>Butterfly Themed Cupcake</h3>
        <p>Price: ₱ 450-600</p>
        <button class="order-button">
          <span class="order-text">Order Now</span>
          <img
            src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
            width="20"
            height="20"
            alt="Cart Icon"
          />
        </button>
      </div>
      <div class="cake-card">
        <img
          src="Cupcakes\02-Rainbow themed cupcake.jpg"
          height="200px"
          width="200px"
        />
        <h3>Rainbow Themed Cake</h3>
        <p>Price: ₱ 450-600</p>
        <button class="order-button">
          <span class="order-text">Order Now</span>
          <img
            src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
            width="20"
            height="20"
            alt="Cart Icon"
          />
        </button>
      </div>
      <div class="cake-card">
        <img
          src="Cupcakes\04-Cars themed cupcake.jpg"
          height="200px"
          width="200px"
        />
        <h3>CARS Themed Cupcake</h3>
        <p>Price: ₱ 450-600</p>
        <button class="order-button">
          <span class="order-text">Order Now</span>
          <img
            src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
            width="20"
            height="20"
            alt="Cart Icon"
          />
        </button>
      </div>
      <div class="cake-card">
        <img
          src="Cupcakes\07-Butterfly themed cupcake.jpg"
          height="200px"
          width="200px"
        />
        <h3>Butterfly Themed Cupcake</h3>
        <p>Price:₱ 450-600</p>
        <button class="order-button">
          <span class="order-text">Order Now</span>
          <img
            src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
            width="20"
            height="20"
            alt="Cart Icon"
          />
        </button>
      </div>
      <div class="cake-card">
        <img
          src="Cupcakes\03-White purple cupcake.jpg"
          height="200px"
          width="200px"
        />
        <h3>White Purple Cupcakes</h3>
        <p>Price: ₱ 450-600</p>
        <button class="order-button">
          <span class="order-text">Order Now</span>
          <img
            src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
            width="20"
            height="20"
            alt="Cart Icon"
          />
        </button>
      </div>
      <div class="cake-card">
        <img
          src="Cupcakes\08-Pink gold cupcake.jpg"
          height="200px"
          width="200px"
        />
        <h3>Pink Gold Cupcakes</h3>
        <p>Price: ₱ 450-600</p>
        <button class="order-button">
          <span class="order-text">Order Now</span>
          <img
            src="https://cdn.iconscout.com/icon/free/png-512/free-add-to-cart-icon-download-in-svg-png-gif-file-formats--ecommerce-shopping-trolley-miscellaneous-pack-user-interface-icons-1544741.png?f=webp&w=256"
            width="20"
            height="20"
            alt="Cart Icon"
          />
        </button>
      </div>
    </section>

     <!-- Footer -->
     <footer style="margin-top: 5%">
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
  </body>
</html>
