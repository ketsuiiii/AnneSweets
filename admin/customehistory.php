<?php 

require_once('fetchdata.php');
$query = "select * from customtbl";
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
        <link rel="stylesheet" href="sidebar.css">
  </head>
  <body>
<?php include 'sidebar.php';?> 
    <!-- Main Content -->
    <div class="content" id="content">
    <div class="container">
        <div class="row mt-5"> 
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="dislay-6 text-center">History from Custom Form</h2>
                    </div>
                    <div class="card-body overflow-auto">
                        <table class="table table-bordered  text-center">
                            <tr class="table-dark text-white">
                                <td> FullName </td>
                                <td> Email </td>
                                <td> Contact </td>
                                <td> cakeflavors </td>
                                <td> cakesize </td>
                                <td>cakeshapes</td>
                                <td> sugarlevel </td>
                                <td> toppings  </td>
                                <td> suggestions </td>
                                <td> layers </td>
                                <td> colors </td>
                                <td> themes </td>
                                <td> addresss </td>
                                <td> Delivery Date </td>
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
                                <td><?php echo $row['cakesize']?></td>
                                <td><?php echo $row['cakeshapes']?></td>
                                <td><?php echo $row['sugarlevel']?></td>
                                <td><?php echo $row['toppings']?></td>
                                <td><?php echo $row['suggestions']?></td>
                                <td><?php echo $row['layers']?></td>
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
    </div>
    <script src="sidebar.js"></script>
</body>
</html>