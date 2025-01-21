<?php 

require_once('fetchdata.php');
$query = "select * from bentotbl";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Order History</title> 
    </head>

<body class="bg-dark">
    <div class="container">
        <div class="row mt-5"> 
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="dislay-6 text-center">History from Bento Form</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered  text-center">
                            <tr class="table-dark text-white">
                                <td> FullName </td>
                                <td> Email </td>
                                <td> Contact </td>
                                <td> cakeflavors </td>
                                <td> toppings </td>
                                <td> suggestions </td>
                                <td> w_cupcakes  </td>
                                <td> colors </td>
                                <td> themes </td>
                                <td> addresss </td>
                                <td> date_to_delivered </td>
                            </tr>
                            <tr>
                            <?php

                                while($row = mysqli_fetch_assoc($result)) 
                                {
                            ?>
                                <td><?php echo $row['fullname']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['contact']?></td>
                                <td><?php echo $row['cakeflavors']?></td>
                                <td><?php echo $row['toppings']?></td>
                                <td><?php echo $row['suggestions']?></td>
                                <td><?php echo $row['w_cupcakes']?></td>
                                <td><?php echo $row['colors']?></td>
                                <td><?php echo $row['themes']?></td>
                                <td><?php echo $row['addresss']?></td>
                                <td><?php echo $row['date_to_delivered']?></td>
                            </tr>   
                            <?php
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>