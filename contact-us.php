<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sweet Creations</title>
  <!-- <link rel="stylesheet" href="contact-us.css" /> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- <link rel="stylesheet" href="navbar.css"> -->
  <style>
    /* Mobile Navigation Styles */
    .mobile-nav-toggle {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      padding: 0.5rem;
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      z-index: 100;
      width: 40px;
      height: 40px;
    }

    .hamburger-icon {
      display: block;
      position: relative;
      width: 24px;
      height: 2px;
      background: #333;
      margin: 0 auto;
      transition: all 0.3s ease-in-out;
    }

    .hamburger-icon::before,
    .hamburger-icon::after {
      content: '';
      position: absolute;
      width: 24px;
      height: 2px;
      background: #333;
      left: 0;
      transition: all 0.3s ease-in-out;
    }

    .hamburger-icon::before {
      top: -8px;
    }

    .hamburger-icon::after {
      bottom: -8px;
    }

    /* Hamburger Animation */
    .mobile-nav-toggle.active .hamburger-icon {
      background: transparent;
    }

    .mobile-nav-toggle.active .hamburger-icon::before {
      top: 0;
      transform: rotate(45deg);
    }

    .mobile-nav-toggle.active .hamburger-icon::after {
      bottom: 0;
      transform: rotate(-45deg);
    }

    /* Mobile Menu Styles */
    @media screen and (max-width: 768px) {
      .mobile-nav-toggle {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      nav .right {
        display: none;
        position: fixed;
        top: 70px;
        left: 0;
        right: 0;
        background: white;
        padding: 1rem;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 99;
      }

      nav .right.active {
        display: block;
      }

      nav .right li {
        display: block;
        margin: 1rem 0;
        /* text-align: center; */
      }

      .dropdown-content {
        position: static;
        display: none;
        box-shadow: none;
        padding-left: 1rem;
        background: #f9f9f9;
        margin: 0.5rem 0;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
    }

    /* Header Layout */
    /* Update the header styles */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem;
      position: sticky;
      /* Change from 'relative' to 'sticky' */
      top: 0;
      /* Add this to stick to the top */
      background: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      /* Add a high z-index to ensure it stays above other content */
    }


    .logo {
      display: flex;
      align-items: center;
      gap: 1rem;
    }
  </style>
</head>

<body>
  <header>
    <div class="logo">
      <a id="logo" href="homepage.php"><img src="Logo\Logo.jpg" alt="Anne" /></a>
      <span>Sweet Creations</span>
    </div>

    <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
      <span class="hamburger-icon"></span>
    </button>

    <nav>
      <ul class="right" id="primary-navigation">
        <li><a href="index.php">Front</a></li>
        <li><a href="homepage.php">Products</a></li>
        <li class="dropdown">
          <a href="#cakes">Category</a>
          <div class="dropdown-content">
            <a href="birthdaycakes.php">Birthday Cakes</a>
            <a href="cupcakes.php">Cupcakes</a>
            <a href="bentocakes.php">Bento Cakes</a>
            <a href="numbercakes.php">Number Cakes</a>
            <a href="specialcakes.php">Specials</a>
          </div>
        </li>
        <li><a href="customized.php">Customize</a></li>
        <li><a href="TAC.php">Policy</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </nav>
  </header>
  <!-- <div class="contact-container">
    <div class="owner-info">
      <h2>About Us</h2>
      <div class="owner-pic">
        <img src="Logo\Anne.jpg" />
      </div>
      <h2>Anne</h2>
      <p class="big text">Here you can add some information about the owner or the business.</p>
      <ul>
        <li><img src="Logo\home.png" alt="" class="contact-logo" />Address: Bagong Silang, Camarin, Caloocan City</li>
        <li><img src="Logo\viber.png" alt="" class="contact-logo" />Contact Number: +6399 5343 4236</li>
        <li><img src="Logo\location.png" alt="" class="contact-logo" />Location: Philippines, NCR</li>
      </ul>
    </div>

    <div class="contact-info">
      <h2>Contact Us With:</h2>
      <ul>
        <li> <img src="Logo\facebook.png" alt="" class="contact-logo" /> Facebook Page: <a href="https://www.facebook.com/sweetcreationsbyanne14">Sweet Creations</a></li>
        <li> <img src="Logo\email.png" alt="" class="contact-logo" /> Email: <a href="mailto:dinoanne20@gmail.com">dinoanne20@gmail.com</a></li>
        <li> <img src="Logo\facebook.png" alt="" class="contact-logo" /> Facebook Acc: <a href="facebookacclink"">Anne</a></li>
                <li> <img src="" alt="">Discord: Your Discord ID</li>
            </ul>

            <p>Want to see more cakes?</p>
            <a href=" homepage.php"><button class="custom-button">Browse more cakes</button></a>
          <p>Want to customized your ideal cake?</p>
          <a href="customized.php"><button class="custom-button">Customize your cake</button></a>
    </div>
  </div>

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
  </footer>-->
  <script src="navbar.js"></script>
</body>

</html>