<?php  

if(isset($_SESSION['customer_email'])) {

    $userLoggedIn = $_SESSION['customer_email'];
    $user_details_query = mysqli_query($connection, "SELECT * FROM users WHERE customer_email = '$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
}else {
    header("Location: sign_up.php");
}

?>


<!DOCTYPE html>
<htmL>

<head>
    <link href="https://fonts.googleapis.com/css?family=Coming+Soon" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="vendors_foodie/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="resources_foodie/css/cart.css" rel="stylesheet" type="text/css">

</head>

<body>

    <section class="top-bar">
        <nav>
            <div class="row-master">
                <a href="index.php?email=<?php echo $userLoggedIn;?>"><img src="resources_foodie/img/FOODIE-logo%20(1)-black.png" alt="foodie logo" class="logo-black"></a>
                <ul class="main-nav list-inline">
                    <li>
                        <a href="my_account.php?email=<?php echo $userLoggedIn; ?>">
                            <span><?php echo $user['customer_name']; ?></span>
                        </a>
                    </li>
                    <li><a href="index.php?email=<?php echo $userLoggedIn;?>"><i class="fas fa-home fa-lg"></i></a></li>
                    <li><a href="index.php?email=<?php echo $userLoggedIn;?>#features"><i class="fas fa-truck fa-lg"></i></a></li>
                    <li><a href="index.php?email=<?php echo $userLoggedIn;?>#works"><i class="fas fa-tasks fa-lg"></i></a></li>
                    <li><a href="index.php?email=<?php echo $userLoggedIn;?>#cities"><i class="fas fa-hotel"></i></a></li>
                    <li><a href="#"><i class="fas fa-cart-arrow-down fa-lg"></i></a></li>
                    <li><a href="my_account.php?email=<?php echo $userLoggedIn; ?>"><i class="fas fa-cog fa-lg"></i></a></li>
                    <li><a href="resources/templates/front/logout.php"><i class="fas fa-sign-out-alt fa-lg"></i></a></li> 
            </ul>

            </div><br><br><br><br><br><br>
        </nav>
    </section>

    <hr class="line-style"><br>