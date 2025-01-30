<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sweet Creations</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      margin: 0;
      padding: 0;
      background-color: #b3cde0; /* Warm blue background */
      text-align: center;
    }

    @keyframes slideInFromLeft {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }

      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }

    .animate-heading {
      animation: slideInFromLeft 1s ease-out;
      text-align: center;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: rgba(173, 216, 230, 0.8); /* Light blue */
      backdrop-filter: blur(10px);
      position: sticky;
      top: 0;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      animation: slideDown 0.5s ease-out;
    }

    @keyframes slideDown {
      from {
        transform: translateY(-100%);
      }

      to {
        transform: translateY(0);
      }
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
    }

    .logo img {
      height: 50px;
      margin-right: 10px;
      animation: fadeIn 1s ease-in;
      width: 100%;
      height: 100%;
      object-fit: cover;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      overflow: hidden;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes bounce {
      0%,
      20%,
      50%,
      80%,
      100% {
        transform: translateY(0);
      }

      40% {
        transform: translateY(-20px);
      }

      60% {
        transform: translateY(-10px);
      }
    }

    h1 {
      font-size: 3em;
      color: #4682b4; /* Steel blue */
      margin-bottom: 10px;
    }

    nav ul {
      list-style: none;
      display: center;
      gap: 15px;
    }

    nav a {
      text-decoration: none;
      color: #333;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.3s;
    }

    nav a:hover {
      background-color: rgba(135, 206, 250, 0.3); /* Light sky blue */
      transform: scale(1.1);
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: rgba(173, 216, 230, 0.8); /* Light blue */
      backdrop-filter: blur(10px);
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      animation: fadeIn 0.5s ease-in;
    }

    .dropdown-content a {
      display: block;
      padding: 10px;
      color: #333;
    }

    nav li {
      text-align: left;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .button {
      display: inline-block;
      margin: 20px 0;
      padding: 10px 20px;
      background-color: #4682b4; /* Steel blue */
      color: white;
      text-decoration: none;
      border-radius: 25px;
      font-weight: bold;
      transition: background-color 0.3s, transform 0.3s;
      animation: fadeIn 2s ease-in;
    }

    .button:hover {
      background-color: #87ceeb; /* Sky blue */
      transform: translateY(-3px);
    }

    h3 {
      font-size: 1.5em;
      color: #555;
      margin-bottom: 5px;
      animation: fadeIn 2s ease-in;
    }

    h2 {
      font-size: 2em;
      color: #5f9ea0; /* Cadet blue */
      margin: 10px 0;
      animation: fadeIn 2s ease-in;
    }

    p {
      font-size: 1.2em;
      line-height: 1.6;
      max-width: 800px;
      margin: 0 auto;
      padding: 0 20px;
      animation: fadeIn 2s ease-in;
      margin-bottom: 25px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 15px;
      float: right;
    }

    nav a {
      text-decoration: none;
      color: #333;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.3s;
    }

    nav a:hover {
      background-color: rgba(135, 206, 250, 0.3); /* Light sky blue */
      transform: scale(1.1);
    }

    footer {
      background-color: rgb(224, 255, 255); /* Light cyan */
      color: rgb(0, 0, 0);
      padding: 20px;
      text-align: center;
    }

    footer nav ul {
      justify-content: center;
    }

    footer a {
      color: rgb(0, 0, 0);
      margin: 0 10px;
    }

    .right {
      float: right;
      padding: 10x;
      width: 150x;
    }

    /* Responsive styles for mobile devices */
    @media (max-width: 600px) {
      h1 {
        font-size: 2em;
      }

      h2 {
        font-size: 1.3em;
        margin: 10px 8px;
      }

      h3 {
        font-size: 1.1em;
      }

      p {
        font-size: 1em;
      }

      .button {
        padding: 8px 16px;
      }
    }
  </style>
  <link rel="stylesheet" href="CSS/navbars.css">
</head>

<body>
  <?php include 'navbar.php' ?>

  <h1>Sweet Creations</h1>
  <a href="product.php" class="button">Let's get started</a>
  <h3>By Anne</h3>
  <h2>Customized Cakes, Cupcakes & Pastries</h2>
  <h2>Unleash your imagination with our custom cakes!</h2>
  <p>
    Our bakery is a haven for cake lovers seeking unique and personalized
    treats. We blend exquisite taste with artistic flair to create edible
    masterpieces tailored to your desires. Whether it's a lavish wedding cake,
    a playful kids' birthday cake, or a corporate event centerpiece, we'll
    bake your vision to perfection. Savor every moment with our handcrafted,
    custom-made cakes.
  </p>
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
        <a href="https://www.facebook.com/sweetcreationsbyanne14"><i class="fa-brands fa-facebook"></i></a>
        <a href="mailto:sweetcreations@gmail.com"><i class="fa-regular fa-envelope"></i></a>
        <a href="https://annesweets.xyz"><i class="fa-brands fa-google-plus"></i></a> <!-- Ensure this is a valid URL -->
      </div>
    </nav>
  </footer>
  <script src="CSS/navbar.js"></script>
</body>

</html>