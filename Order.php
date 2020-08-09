<?php include ('process.php') ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> WGC Canteen Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<nav class ="navbar navbar-expand-lg navbar-dar bg-dark">
    <div class="container">
        <img src=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav justify-content-end">
                <li class="nav-item-active">
                    <a class="nav-link active" href="index.php"> Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button"
                       aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-item">
                        <a class="dropdown-item" href="Menu.php">Lunch</a>
                        <a class="dropdown-item" href="">Desert</a>
                        <a class="dropdown-item" href="">Drinks</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.php"> About us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Order.php"> Sign up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <form method="post" action="register.php" id="register_form">
        <h1>Register</h1>
        <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
            <input type="text" name="username" placeholder="Username" value="<?php echo $usernmae; ?>">
            <?php if (isset($name_error)): ?>
                <span><?php echo $name_error; ?></span>
            <?php endif ?>
        </div>
        <div <?php if(isset($email_error)): ?> class="form_error" <?php endif ?> >
            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" >
            <?php if (isset($email)): ?>
            <span><?php echo $email_error; ?></span>
            <?php endif ?>
        </div>
        <div>
            <input type="password" placeholder="Password" name="password">
        </div>
        <div>
            <button type="submit" name="register" id="reg_btn">Register</button>
        </div>
    </form>
</body>
</html>