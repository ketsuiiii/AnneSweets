<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .toggle-btn {
            background-color: #444;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .toggle-btn:hover {
            background-color: #555;
        }
        .sidebar {
            background-color: #222;
            color: #fff;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
        }
        .sidebar.active {
            transform: translateX(0);
        }
        .logo {
            display: flex;
            align-items: center;
            padding: 20px;
        }
        .logo img {
            margin-right: 10px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 10px 20px;
            border-bottom: 1px solid #444;
            height: 50px;
            display: flex;
            align-items: center;
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
            margin-right: 10px;
        }
        .sidebar ul li:hover {
            background-color: #333; /* Reduced hover effect */
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
        }
        .dropdown-content li:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <span>Sweet Creations Admin</span>
        <button class="toggle-btn" id="toggleBtn">Toggle Sidebar</button>
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
                    <li><a href="admin.birthcakes.php"><i class="fas fa-birthday-cake"></i> <span>Birthday Cakes</span></a></li>
                    <li><a href="admin.cupcakes.php"><i class="fas fa-cookie"></i> <span>Cupcakes</span></a></li>
                    <li><a href="admin.bentocakes.php"><i class="fas fa-box"></i> <span>Bento Cakes</span></a></li>
                    <li><a href="admin.numbers.php"><i class="fas fa-sort-numeric-up"></i> <span>Number Cakes</span></a></li>
                    <li><a href="admin.special.php"><i class="fas fa-star"></i> <span>Specials</span></a></li>
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
            <li><a href="admin.TAC.php"><i class="fas fa-file-alt"></i> <span>Policy</span></a></li>
        </ul>
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