<?php
$con = mysqli_connect("localhost", "tranmi", "badcake86", "tranmi_canteen");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" .mysqli_connect_error(); die();
}

else{
    echo"connect to database";
}
$all_lunch_query = "SELECT LunchID, LunchItem FROM lunches";
$all_lunch_result =  mysqli_query($con, $all_lunch_query);

if(isset($_GET['lunch'])){
    $id= $_GET['lunch'];
}else{
    $id= 1;
}

$this_lunch_query = "SELECT LunchItem, Price FROM lunches WHERE LunchID = '" .$id ."'";
$this_lunch_result = mysqli_query($con, $this_lunch_query);
$this_lunch_record = mysqli_fetch_assoc($this_lunch_result);

$this_order_query = "SELECT order. OrderID, Customer.FName, Customer.LName, lunch.LunchItem
FROM customers, order, lunch
WHERE customers.CustomerID = order.CustomerID
AND order.LunchID = lunch.LunchID AND order.OrderID ='" .$_GET['order'] ."'";
$this_order_result = mysqli_query($con, $this_order_query);
$this_order_record = mysqli_fetch_assoc($this_order_result);
?>
<!DOCTYPE html>
<html lang="en">

<!--Website Title and link to css-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> WGC Canteen Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="WGCCanteenHome.css">
</head>

<!--Navbar and background image-->
<div class="background_img">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-canteen">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
                    aria-label="Toggler navigator">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Background image-->
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
    <h2> Lunch Information</h2>

    <?php
    echo "<p> Lunch Name: ". $this_lunch_record['LunchItem']. "<br>";
    echo "<p> Price: ".$this_lunch_record['Price']. "<br>";
    ?>

    <!--Lunch Menu form-->
    <div class="center">
        <form name="lunches_form" id="lunches_form" method="get" action="Menu.php">
            <select id="lunch" name="lunch">
                <!--option-->
                <?php
                while($all_lunch_record = mysqli_fetch_assoc($all_lunch_result)){
                    echo"<option value = '". $all_lunch_record['LunchID'] . "'>";
                    echo $all_lunch_record['LunchItem'];
                    echo "</option>";
                }
                ?>
            </select>
            <input type =submit name="Lunches_button" value="Show lunches information" class="button_card btn btn-light">
        </form>

        <h2> Search for Item</h2>
        <form action="" method="post">
            <input type="text" name="search">
            <input type="submit" name="submit" value="Search">

            <?php
            if(isset($_POST['search'])){
                $search = $_POST['search'];
            }

            $query1 = "SELECT * FROM lunch WHERE LunchItem LIKE '%$search'";
            $query = mysqli_query($con, $query1);
            $count = mysqli_num_rows($query);

            if($count == 0 ) {
                echo "There was no search results";
            }else{
                while ($row=mysqli_fetch_assoc($query)) {

                    echo $row['LunchItem'];
                    echo "<br>";
                }
            }

            ?>

            <?php

            echo "<p> Order Number: ". $this_order_record['OrderID']. "<br>";
            echo "<p> Customer First Name: ". $this_order_record['FName']. "<br>";
            echo "<p> Customer Last Name: ". $this_order_record['LName']. "<br>";
            echo "<p> Lunch: ". $this_order_record['LunchItem']. "<br>";
            ?>

        </form>
    </div>
</main>