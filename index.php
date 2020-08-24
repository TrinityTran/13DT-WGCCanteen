<?php
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
                <img class="nav-image" width="300" alt="WGC logo" src="WGC_Logo_Transparent_RGB.png">
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

<body>
<div>
    <img src="WGC_School.jpg" class="w-auto h-auto" alt="School image">
</div>

<div class="background-text">
    <h1></h1>
</div>

</body>
<main>
    <div class="container">

    </div>
</main>
<h2> Show Certain Things</h2>

<form action="drinks.php" method="post">
    <input type='submit' name='testquery1' value="Drinks">
</form>

<form action="drinks.php" method="post">
    <input type='submit' name='testquery2' value="Customers">
</form>

<?php
if(isset($_POST['testquery1']))
{
    $result=mysqli_query($con, "SELECT * FROM drinks");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            $id = $test['DrinkID'];
            echo "<table>";
            echo "<tr>";
            echo "<tr>". $test['Item']. "</tr>";
            echo "<tr>". $test['Cost']. "</tr>";
            echo "</tr>";
            echo "</table>";
        }
    }
}
?>


<?php
if(isset($_POST['testquery2']))
{
    $result=mysqli_query($con, "SELECT * FROM customers ");
    if(mysqli_num_rows($result)!=0)
    {
        while($test = mysqli_fetch_array($result))
        {
            $id = $test['CustomerID'];
            echo "<table>";
            echo "<tr>";
            echo "<tr>". $test['FName']. "</tr>";
            echo "<tr>". $test['LName']. "</tr>";
            echo "</tr>";
            echo "</table>";
        }
    }
}
?>


<div class="page-footer">
    <div class="container text-center text-md-left mt-5">
        <div class="row mt-3">
            <div class="logo mx-auto mb-md-0 mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!
                1m3!1d2998.5363311184515!2d174.77800201542235!3d-41.275430479274625!2m3
                !1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38ae2f27710d0d%3A0x2d0763d38f00974b!
                2sWellington%20Girls&#39;%20College!5e0!3m2!1sen!2snz!4v1595291334782!5m2!1sen!2snz"
                        width ="500" height="300" style="border:0; margin-bottom: 1rem;"
                        aria-hidden="false" tabindex="0">

                </iframe>
            </div>

            <div class="col-md-3 col-lg-2 col-x1-2 mx-auto mb-4">




