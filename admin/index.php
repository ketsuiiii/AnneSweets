<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweet Creations</title>
    <link rel="stylesheet" href="admin.homepage.css" />
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
          <li><a href="index.php">Admin</a></li>
          <li class="dropdown">
            <a href="#cakes">Category</a>
            <div class="dropdown-content">
              <a href="admin.birthcakes.php">Birthday Cakes</a>
              <a href="admin.cupcakes.php">Cupcakes</a>
              <a href="admin.bentocakes.php">Bento Cakes</a>
              <a href="admin.numbers.php">Number Cakes</a>
              <a href="admin.special.php">Specials</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#orders">List of Orders</a>
            <div class="dropdown-content">
              <a href="orderhistory.php">Cakes List</a>
              <a href="cupcakeshistory.php">Cupcakes List</a>
              <a href="bentohistory.php">Bento Cakes List</a>
              <a href="customehistory.php">Custom Cakes List</a>
            </div>
          </li>
          <li><a href="admin.TAC.php">Policy</a></li>
        </ul>
      </nav>
      </div>
    </header>
    <h1 class="animate-heading">SWEET ADMIN</h1>
    <div class="contact-container">
        <div class="owner-info">
            <div class="owner-pic">
                <img src="Logo\Anne.jpg" />
            </div>
            <h2>Anne</h2>
            <p class="big text">Welocome to Sweet Creations Admin Anne!</p> 
            <p class="big text">Manage your orders effortlessly and keep the sweetness flowing. You're in control here at Sweet Creation!.</p>
        </div>

        <div class="contact-info">
            <h2>Contact Us With:</h2>
            <ul>
                <li> <img src="Logo\facebook.png" alt="" class="contact-logo"/> Facebook Page: <a href="https://www.facebook.com/sweetcreationsbyanne14">Sweet Creations</a></li>
                <li> <img src="Logo\email.png" alt="" class="contact-logo"/> Email: <a href="mailto:dinoanne20@gmail.com">dinoanne20@gmail.com</a></li>
                <li> <img src="Logo\facebook.png" alt="" class="contact-logo"/> Facebook Acc: <a href="facebookacclink">Anne</a></li>
            </ul>
        </div>
    </div>
  <footer class="footer">
  	<div class="container">
  	 	<div class="row">
        <div class="logo">
          <img src="Logo\Logo.jpg" alt="Anne" />
  	 		</div>
         <div class="footer-col">
  	 			<ul>
  	 				<li><a href="#"><img src="Logo\home.png" alt="" class="contact-logo"/>Address: Bagong Silang, Camarin, Caloocan City</a></li>
  	 				<li><a href="#"><img src="Logo\viber.png" alt="" class="contact-logo"/>Contact Number: +6399 5343 4236</a></li>
  	 				<li><a href="#"><img src="Logo\location.png" alt="" class="contact-logo"/>Location: Philippines, NCR</a></li>
  	 			</ul>
  	 		</div>
        <div class="footer-col">
  	 			<ul>
  	 				<li><a href="#"><img src="Logo\email.png" alt="" class="contact-logo"/>Email</a></a></li>
  	 				<li><a href="#"><img img src="Logo\facebook.png" alt="" class="contact-logo"/>Facebook</a></li>
  	 				<li><a href="#">Terms and Condition</li>
  	 			</ul>
        </div>
  	 	</div>
  	</div>
  </footer>

    <script src="homepage.js"></script>

  </body>
</html>
