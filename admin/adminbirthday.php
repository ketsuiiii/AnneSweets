<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Creations</title>
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

        span {
            margin-right: 25px;
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            margin-top: 70px; /* Adjust for fixed navbar */
        }

        h1.animate-heading {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
            animation: fadeIn 2s ease-in-out;
        }

        .cake-card {
            display: inline-block;
            width: 200px;
            margin: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .cake-card img {
            width: 100%;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .cake-card h3 {
            font-size: 1.2em;
            color: #555;
            padding: 10px;
        }

        .cake-card:hover {
            transform: translateY(-10px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            section {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
            }
            .cake-card {
                width: 40%;
                height: 250px;
                margin-bottom: 20px;
            }
            h1.animate-heading {
                font-size: 25px;
            }
            img {
                height: 70%;
            }
            .cake-card h3 {
                font-size: 15px;
                margin-top: 0;
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
        <h1 class="animate-heading">Customized Birthday Cakes</h1>
        <section id="latest-birthday-cakes">
            <div class="cake-card">
                <img src="..\Cakes\02-Butterfly themed cake.jpg" height="250px" width="150px" />
                <h3>Butterfly Themed Cake</h3>
            </div>
            <div class="cake-card">
                <img src="..\Cakes\03-Rainbow themed cake.jpg" height="250px" width="150px" />
                <h3>Rainbow Themed Cake</h3>
            </div>
            <div class="cake-card">
                <img src="..\Cakes\01-Cinnamoroll themed cake .jpg" height="250px" width="150px" />
                <h3>Cinnamoroll Themed Cake</h3>
            </div>
            <div class="cake-card">
                <img src="..\Cakes\06-Cars themed cake.jpg" height="250px" width="150px" />
                <h3>CARS Themed Cake</h3>
            </div>
            <div class="cake-card">
                <img src="..\Cakes\05-Paw patrol skye themed cake.jpg" height="250px" width="150px" />
                <h3>Paw Patrol (Skye) Themed Cake</h3>
            </div>
            <div class="cake-card">
                <img src="..\Cakes\08-Princess themed cake.jpg" height="250px" width="150px" />
                <h3>Princess Themed Cake</h3>
            </div>
        </section>
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