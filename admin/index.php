<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Creations Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            background-color: #f9f9fb;
            color: #333;
        }

        .navbar {
            background-color: #4a4e69;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .toggle-btn {
            background-color: #22223b;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .toggle-btn:hover {
            background-color: #4a4e69;
        }

        .sidebar {
            background-color: #22223b;
            color: #fff;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            padding-top: 60px;
        }

        .sidebar.active {
            transform: translateX(0);
        }

        span {
            margin-right: 25px;
        }

        .logo {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #4a4e69;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            margin-right: 10px;
            border-radius: 50%;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
            border-bottom: 1px solid #444;
            display: flex;
            align-items: center;
            transition: background-color 0.3s;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .sidebar ul li a i {
            margin-right: 15px;
        }

        .sidebar ul li:hover {
            background-color: #4a4e69;
        }

        .dropdown-content {
            display: none;
            background-color: #333;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content li {
            padding-left: 40px;
            background-color: #333;
        }

        .dropdown-content li:hover {
            background-color: #4a4e69;
        }

        .content {
            padding: 20px;
            flex-grow: 1;
            margin-top: 60px; /* Adjust for fixed navbar */
        }

        h1.animate-heading {
            text-align: center;
            color: #ff6f61;
            animation: fadeIn 2s ease-in-out;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin-top: 20px;
            animation: fadeIn 2s ease-in-out;
        }

        .owner-info,
        .contact-info {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin-bottom: 20px;
        }

        h2,
        p {
            text-align: center;
        }

        .owner-pic img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 10px;
        }

        .contact-logo {
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-right: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (min-width: 600px) {
            .contact-container {
                flex-direction: row;
            }

            .owner-info,
            .contact-info {
                width: 45%;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <button class="toggle-btn" id="toggleBtn">Toggle Sidebar</button>
        <span>Sweet Creations Admin</span>
    </div>

    <div class="sidebar" id="sidebar">
        <div class="logo">
            <a id="logo" href="front.php">
                <img src="../Logo/Logo.jpg" style="width:50px; height:50px" />
            </a>
            <span>Sweet Creations</span>
        </div>
        <ul>
            <li>
                <a href="index.php">
                    <i class="fas fa-home"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#cakes">
                    <i class="fas fa-birthday-cake"></i>
                    <span>Category</span>
                    </a>
                <ul class="dropdown-content">
                    <li><a href="adminbirthday.php"><i class="fas fa-birthday-cake"></i> <span>Birthday Cakes</span></a></li>
                    <li><a href="adminbento.php"><i class="fas fa-box"></i> <span>Bento Cakes</span></a></li>
                    <li><a href="adminnumbers.php"><i class="fas fa-sort-numeric-up"></i> <span>Number Cakes</span></a></li>
                    <li><a href="adminspecial.php"><i class="fas fa-star"></i> <span>Specials</span></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#orders"><i class="fas fa-list"></i> <span>List of Orders</span></a>
                <ul class="dropdown-content">
                    <li><a href="orderhistory.php"><i class="fas fa-list"></i> <span>Cakes List</span></a></li>
                    <li><a href="cupcakeshistory.php"><i class="fas fa-list"></i> <span>Cupcakes List</span></a></li>
                    <li><a href="bentohistory.php"><i class="fas fa-list"></i> <span>Bento Cakes List</span></a></li>
                    <li><a href="customehistory.php"><i class="fas fa-list"></i> <span>Custom Cakes List</span></a></li>
                </ul>
            </li>
            <li><a href="adminpolicy.php"><i class="fas fa-file-alt"></i> <span>Policy</span></a></li>
        </ul>
    </div>

    <div class="content" id="content">
        <h1 class="animate-heading">SWEET ADMIN</h1>
        <div class="contact-container">
            <div class="owner-info">
                <div class="owner-pic">
                    <img src="../Logo/Anne.jpg" />
                </div>
                <h2>Anne</h2>
                <p class="big text">Welcome to Sweet Creations Admin Anne!</p>
                <p class="big text">Manage your orders effortlessly and keep the sweetness flowing. You're in control here at Sweet Creation!</p>
            </div>

            <div class="contact-info">
                <h2>Contact Us With:</h2>
                <ul>
                    <li><img src="../Logo/facebook.png" alt="" class="contact-logo" /> Facebook Page: <a href="https://www.facebook.com/sweetcreationsbyanne14">Sweet Creations</a></li>
                    <li><img src="../Logo/email.png" alt="" class="contact-logo" /> Email: <a href="mailto:dinoanne20@gmail.com">dinoanne20@gmail.com</a></li>
                    <li><img src="../Logo/facebook.png" alt="" class="contact-logo" /> Facebook Acc: <a href="facebookacclink">Anne</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const sidebar = document.getElementById('sidebar');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>
</body>

</html>