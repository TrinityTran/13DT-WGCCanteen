<?php

$con = mysqli_connect("localhost", "tranmi", "badcake86", "tranmi_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" .mysqli_connect_error(); die();
}

else{
    echo"connect to database";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> WGC Canteen Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="WGCCanteenHome.css">
</head>

<div class="background_img">
    <nav class="navbar navbar-expand-lg navbar-dark bg-canteen">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
                    aria-label="Toggler navigator">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="index.php">
                <img class="nav-image" width="auto" alt="WGC logo" src="WGC_Logo_Transparent_RGB.png">
            </a>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item-navactive">
                        <a class="nav-title" href="index.php">Home</a>
                    </li>

                    <li class="nav-item hover">
                        <a class="nav-title" href="Menu.php">Menu</a>
                    </li>

                    <li class="nav-item hover">
                        <a class="nav-title" href="AboutUs.php">About Us</a>
                    </li>

                    <li class="nav-item hover">
                        <a class="nav-title" href="Order.php">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<main>
    <form name="order_form" id="order_form" method="get" action="order.php">
        <select id = "Order" name="order">
            <?php
            while ($all_order_record = )
            ?>
        </select>
    </form>
</main>