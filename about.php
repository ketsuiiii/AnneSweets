<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Creations</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="contact-us.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .owner-info, .contact-info {
            flex: 1 1 300px;
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .owner-pic img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

        .contact-logo {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .custom-button {
            /* background-color: #4CAF50; */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .custom-button:hover {
            /* background-color: #45a049; */
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
                align-items: center;
            }

            .owner-info, .contact-info {
                width: 90%;
            }
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
                <li><a href="about.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="contact-container">
        <div class="owner-info">
            <h2>About Us</h2>
            <div class="owner-pic">
                <img src="Logo\Anne.jpg" />
            </div>
            <h2>Anne</h2>
            <p class="big text">Anne is the owner and baker behind Sweet Creations, specializing in customized cakes and pastries.</p>
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
    </footer>
    <script src="navbar.js"></script>
</body>

</html>