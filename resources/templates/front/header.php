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
<html lang="en">
    <head>
		
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
		<meta name="description" content="Foodie is a premium food delivery service with the mission to bring affordable and healthy to as many people as possible. ">
        
        <link rel="stylesheet" type="text/css" href="vendors_foodie/css/normalize.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="vendors_foodie/css/grid.css"> 
        <link rel="stylesheet" type="text/css" href="vendors_foodie/css/ionicons.min.css">             
        <link rel="stylesheet" type="text/css" href="vendors_foodie/css/animate.css"> 
        <link rel="stylesheet" type="text/css" href="resources_foodie/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources_foodie/css/queries.css">
		<link href="https://fonts.googleapis.com/css?family=Coming+Soon" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title> FOODIE </title>
        
     </head>
	
	<body>
<!-- 	<body onload="myFunction()"> -->
<!--         <div id="loading"></div> -->
        
		<header>
            <nav>
                <?php include(TEMPLATE_FRONT . DS .  "top_nav.php") ?>   
            </nav>
            <div class="hero-text-box">
                <?php include(TEMPLATE_FRONT . DS .  "main_photo_data.php") ?>
            </div>
        </header>
