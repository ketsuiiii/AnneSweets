<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweet Creations</title>
    <style>
      body {
        font-family: "Times New Roman", Times, serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f5f5f5;
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 400px;
        text-align: center;
        cursor: pointer;
        animation: fadeIn 2s ease-in;
      }

      .container:hover {
        transform: scale(1.05);
        opacity: 0.9;
      }

      a {
        text-decoration: none;
        align-items: center;
      }

      button {
        align-items: center;
        display: flex;
        justify-content: center;
      }

      .button-notif {
        display: flex;
        align-items: center;
        margin: 10px 0;
        padding: 10px 20px;
        background-color: #0288d1;
        color: white;
        border: none;
        border-radius: 15px;
        font-weight: bold;
        font-size: 1em;
        cursor: pointer;
        animation: fadeIn 2s ease-in;
        justify-content: center;
        text-decoration: none;
        font-family: 'Times New Roman', Times, serif;
      }

      .button-notif:hover {
        background-color: #0277bd;
        transform: scale(1.05);
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      /* Responsive styles */
      @media (max-width: 600px) {
        .container {
          width: 80%;
          padding: 15px;
        }

        .button-notif {
          font-size: 0.9em;
          padding: 8px 16px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="notif">
        <h2>Thank you for your order!</h2>
        <p>
          We've received it and will send you updates shortly via email. We
          appreciate your business!
        </p>
        <br />
        <p>
          You'll receive a payment notification for your down payment within the
          next 24 hours.
        </p>
        <center>
        <a href="product.php">
          <button type="submit" name="notif" class="button-notif">Close</button>
        </a>
        </center>
      </div>
    </div>
  </body>
</html>