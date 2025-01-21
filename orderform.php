<?php

require_once('backend/DB.php');
include "backend/ordertbl.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // die ($_SERVER['REQUEST_METHOD'] == 'POST');
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $Caption = $_POST["Caption"];
    $addresss = $_POST["addresss"];
    $theme = $_POST["theme"];
    $date_to_delivered = $_POST["date_to_delivered"];

    $create_db_query = "INSERT INTO ordertbl (fullname, email, contact, Caption, addresss, theme, date_to_delivered) VALUES 
    ('$fullname', '$email', '$contact', '$Caption', '$addresss', '$theme', '$date_to_delivered')";

    if ($connect->query($create_db_query) === TRUE) {
        echo '<div class="alert alert-success" role="alert">New record created successfully.</div>';
        header('location: notif.php');
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $connect->error . '</div>';
    }
}

$message = isset($_SESSION["message"]) ? $_SESSION["message"] : '';
unset($_SESSION["message"]);
?>

<?php 

    if(!empty($_POST["send"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $Caption = $_POST["Caption"];
        $addresss = $_POST["addresss"];
        $theme = $_POST["theme"];
        $date_to_delivered = $_POST["date_to_delivered"];
        $toEmail = "sweetcreationanne@gmail.com";

        $emailHeaders = "Name: " . $fullname .
        "r/n/ Email: " . $email .
        "r/n/ COntact: " . $contact .
        "r/n/ Greetings: " . $Caption .
        "r/n/ Adress: " . $addresss .
        "r/n/ Theme: " . $theme .
        "r/n/ Delivery Date: " . $date_to_delivered . "r/n/";

        if(mail($toEmail, $fullname, $emailHeaders)) {
            $message = "Your Information is Received Success";
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="orderformstyle.css">
</head>
<body>

<?php
$name = $_GET['name'];
$price = $_GET['price'];
$image = $_GET['image'];
?>
<div class="product-container">
        <img src="<?php echo $image ?>" class="product-image">
        <div class="product-details">
            <h2 class="product-name"><?php echo $name; ?></h2>
            <p class="product-price">₱ <?php echo $price; ?></p>
            <h4>Description:</h4>
            <p style="text-align: left;">It often features intricate decorations, custom themes, or vibrant colors to match the event, such as birthdays, weddings, anniversaries, or holidays. Special cakes can include layers of different flavors, decadent fillings, and artistic elements like fondant sculptures, edible flowers, or hand-piped details.</p>
        </div>
    </div>
    <div class="container">
        <h1>Order Form</h1>
        <form action="orderform.php" method="POST">
            <input type="text" id="theme" name="theme" value="<?php echo $name?>"hidden> 
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="contact" required>
            </div>

            <div class="form-group">
                <label for="Caption">Greetings:</label>
                <input type="text" id="Caption" name="Caption" required>
            </div>

            <div class="form-group">
                <label for="address">Delivery Address:</label>
                <textarea id="address" name="addresss" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="date to delivered">Date to be Delivered:</label>
                <textarea name="date to delivered" id="date to delivered" rows="5" required></textarea>
            </div>

            <button type="submit" name="send" value="Submit">Submit Order</button>
            <?php if(!empty($message)) { ?>
                <strong><?php echo $message; ?></strong>
            <?php }?>
        </form>
        <a href="homepage.php" style="text-decoration: none;"><button type="submit">Cancel</button></a>
        <div id="confirmationMessage"></div>
    </div>
    <script src="javascript/orderformscript.js"></script>
</body>
</html>