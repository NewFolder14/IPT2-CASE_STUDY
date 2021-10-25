<?php 
    include_once 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="d-flex flex-column navbar navbar-expand-lg navbar-light back-ground-color">
        <div class="d-flex container justify-content-end">
            <ul class="nav justify-content-end">
                <?php if(isset($_SESSION['Username'])){?>
                    <li class="d-flex flex-row nav-item" style="font-size: 1.2em; color: white;">
                        <a class="nav-link text-white" href="">
                            <i class="bi bi-bell-fill d-flex align-items-center">Notification</i>
                        </a>
                    </li>
                <?php } else {
                    //None 
                }?>
                    <li class="d-flex flex-row nav-item" style="font-size: 1.2em; color: white;">
                        <a class="nav-link text-white" href="">
                            <i class="bi bi-info-circle-fill">Help</i>
                        </a>
                    </li>
                <?php if(isset($_SESSION['Username'])){?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php" style="font-size: 1.2em; ">Logout</a>
                    </li>
                <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php" style="font-size: 1.2em; ">Login | Sign Up</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="d-flex container justify-content-between">
            <a href="index.php" class="text-decoration-none">
                <div class="d-flex flex-row">
                    <div class="img-fluid">
                        <img src="Image/tempLogo33.png" alt="temp-logo">
                    </div>
                    <div class="d-flex flex-column justify-content-center text-center">
                        <h2 class="text-white">Filipino Cuisine</h2>
                        <h4 class="text-white align-content-center">Since 2020</h4>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <a href="cart.php" class="d-flex flex-row text-decoration-none align-items-center">
                        <h4 class="d-flex text-white align-items-center mx-2">Cart</h4>
                        <i class="bi bi-cart4" style="font-size: 2.5em; color: white;"></i>
                    </a>
                </div>
            </a>
        </div>
        <div class="d-flex container justify-content-center h5">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-white"  href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white"  href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white"  href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white"  href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white"  href="contact.php">Contacts</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>