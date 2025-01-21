<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweet Creations</title>
    <link rel="stylesheet" href="customized.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="logo">
        <a id="logo" href="homepage.php"><img src="Logo\Logo.jpg" alt="Anne" /></a>
        <span>Sweet Creations</span>
      </div>

      <nav>
        <ul class="right">
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
      </div>
    </header>

    <!-- Main Content -->
    <main>
      <section class="intro">
        <h1>Welcome to Sweet Creations</h1>
        <p>At Sweet Creations, we're committed to providing you with a seamless and stress-free experience from start to finish.</p>
        <p>To get started, you can browse a bunch of awesome cake designs for inspiration, or simply fill out our easy-to-use form. Tell us about your event, your flavor preferences, and any design ideas you have in mind. We will review your request and get back to you promptly with a personalized quote and design concept.</p>
        <p>Once you've approved the design and quote, we'll take care of the rest. And we will use only the finest ingredients and the latest techniques to create a cake. Order now and taste the difference.</p>
      </section>

      <!-- Order Box -->
      <section class="order-box">
        <div class="order-content">
          <h2>Want to order your customized cake?</h2>
          <button onclick="window.location.href='customform.php'">Customize Form</button>
          <button onclick="window.location.href='bentocakeform.php'">Bentocake Form</button>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer style="margin-top: 8%">
      <nav>
      <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
          <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="homepage.php">News</a></li>
                <li><a href="TAC.php">Policy</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
          </ul>
      </nav>

      <div class="footerBottom">
        <h3>*NOTE<h3>
        <p style="font-size: 12px"><span class="designer">(Please note that the delivery date is 5–7 days after placing an order.<br> 
          Once the order is submitted, changes to the provided details will not be possible.)</span></p>
        <p style="font-size: 12px"><span class="designer">(*Prices may vary according to location)<br>
        (Additional disclaimer: Actual food presentation in website may vary)</span></p>
        <p style="font-size: 12px">Copyright &copy;2023; Designed by <span class="designer">BINI_BASIC</span></p>
    </div>
    </footer>

    <script src="homepage.js"></script>
  </body>
</html>