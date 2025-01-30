<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Creations Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
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
            padding-top: 60px; /* Adjust for fixed navbar */
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
            max-width: 800px;
            margin: 100px auto 40px; /* Adjust for fixed navbar */
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-left: 250px; /* Adjust for sidebar */
        }
        h2 {
            color: #e67e22;
            text-align: center;
            margin-bottom: 25px;
            font-size: 2em;
        }
        p {
            margin-bottom: 20px;
            font-size: 1.1em;
            line-height: 1.8;
        }
        p[style*="font-weight: BOLD"] {
            font-weight: bold;
            color: #c0392b;
            font-size: 1.2em;
        }
        @media (max-width: 600px) {
            .content {
                padding: 20px;
                margin-left: 0; /* Adjust for sidebar */
            }
            h2 {
                font-size: 1.8em;
            }
            p {
                font-size: 1em;
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
            <li><a href="adminpolicy.php"><i class="fas fa-file-alt"></i> <span>Policy</span></a></li>
        </ul>
    </div>

    <div class="content" id="content">
        <div class="contact-container">
            <div class="owner-info">
                <h2>Terms and Condition</h2>
                <br />
                <p>
                    By placing an order, you agree to comply with our terms and
                    conditions, including payment, delivery, cancellation, and return
                    policies as outlined.
                </p>
                <p style="font-weight: BOLD">ORDER YOUR CAKE IN ADVANCE!</p>
                <p>
                    Please book your cake 5-7 days ahead of time to ensure we have
                    enough time to prepare. Please ensure that any changes or additional
                    requests are communicated to us within 24- 48 hours upon placing
                    your order.
                </p>
                <br /><br />
                <p style="font-weight: BOLD">STRICT POLICY:</p>
                <p>
                    • No Rush Orders: Please ensure you place your orders with adequate
                    time for processing and delivery.
                </p>
                <p>
                    • No Cancellations or Refunds: Once an order is submitted, it is
                    final and cannot be canceled or refunded.
                </p>
                <p style="font-weight: BOLD">DELIVERY AND PAYMENT POLICY:</p>
                <p>
                    • We accept COD (Cash on Delivery) as the mode of payment for
                    regular customers only. A 50% downpayment is required for all new or
                    non-regular customers.
                </p>
                <p>
                    • Our deliveries are handled directly to the client's location or
                    designated venue on the specified date through Car or Grab car, we
                    also accept Pick-up services.
                </p>
                <p>
                    • A shipping fee (Grab rate) will be applied for deliveries outside
                    Bagong Silang, depending on the delivery location.
                </p>
                <p>Thank you for your understanding and cooperation!</p>
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