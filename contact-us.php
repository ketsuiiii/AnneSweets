<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweet Creations</title>
    <link rel="stylesheet" href="contact-us.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="navbar.css">

  </head>
  <body>
  <?php include 'navbar.php'?>
    <div class="contact-container">
        <div class="owner-info">
            <h2>About Us</h2>
            <div class="owner-pic">
                <img src="Logo\Anne.jpg" />
            </div>
            <h2>Anne</h2>
            <p class="big text">Here you can add some information about the owner or the business.</p>
            <ul>
                <li><img src="Logo\home.png" alt="" class="contact-logo"/>Address: Bagong Silang, Camarin, Caloocan City</li>
                <li><img src="Logo\viber.png" alt="" class="contact-logo"/>Contact Number: +6399 5343 4236</li>
                <li><img src="Logo\location.png" alt="" class="contact-logo"/>Location: Philippines, NCR</li>
            </ul>
        </div>

        <div class="contact-info">
            <h2>Contact Us With:</h2>
            <ul>
                <li> <img src="Logo\facebook.png" alt="" class="contact-logo"/> Facebook Page: <a href="https://www.facebook.com/sweetcreationsbyanne14">Sweet Creations</a></li>
                <li> <img src="Logo\email.png" alt="" class="contact-logo"/> Email: <a href="mailto:dinoanne20@gmail.com">dinoanne20@gmail.com</a></li>
                <li> <img src="Logo\facebook.png" alt="" class="contact-logo"/> Facebook Acc: <a href="facebookacclink"">Anne</a></li>
                <li> <img src="" alt="">Discord: Your Discord ID</li>
            </ul>

            <p>Want to see more cakes?</p>
            <a href="homepage.php"><button class="custom-button">Browse more cakes</button></a>
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
    </footer>
    </div>
    </footer>
    <script src="navbar.js"></script>
  </body>
</html>
