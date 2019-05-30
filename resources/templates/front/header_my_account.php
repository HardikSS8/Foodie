<?php  

if(isset($_SESSION['customer_email'])) {

	$userLoggedIn = $_SESSION['customer_email'];
	$user_details_query = mysqli_query($connection, "SELECT * FROM users WHERE customer_email = '$userLoggedIn'");

	$customer_address_query = mysqli_query($connection, "SELECT * FROM users LEFT JOIN user_address ON users.customer_address_id = user_address.customer_address_id WHERE customer_email = '$userLoggedIn'");
	$user_address = mysqli_fetch_array($customer_address_query);

	$user = mysqli_fetch_array($user_details_query);
}else {
	header("Location: sign_up.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Foodie Account</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
	<meta name="description" content="Foodie is a premium food delivery service with the mission to bring affordable and healthy to as many people as possible. ">

	<link rel="stylesheet" type="text/css" href="vendors_foodie/css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendors_foodie/css/grid.css"> 
    <link rel="stylesheet" type="text/css" href="vendors_foodie/css/ionicons.min.css">             
    <link rel="stylesheet" type="text/css" href="resources_foodie/css/my_account.css">
    <link rel="stylesheet" type="text/css" href="resources_foodie/css/queries.css">
	<link href="https://fonts.googleapis.com/css?family=Coming+Soon" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">

</head>
<body>

	<header>
		<nav>
			<div class="row">
				<ul class="main-nav">
			        <li>
			            <a href="#">
							<p class="tooltip"><span class="tooltiptext">Profile</span><?php echo $user['customer_name']; ?></p>
			            </a>
			        </li>
			        <li><a href="index.php?email=<?php echo $userLoggedIn;?>"><i class="fas fa-home fa-lg tooltip"><span class="tooltiptext">HOME</span></i></a></li>
			        <li><a href="index.php?email=<?php echo $userLoggedIn;?>#features"><i class="fas fa-truck fa-lg tooltip"><span class="tooltiptext">HOME DELIVERY</span></i></a></li>
			        <li><a href="index.php?email=<?php echo $userLoggedIn;?>#works"><i class="fas fa-tasks fa-lg tooltip"><span class="tooltiptext">HOW IT WORKS</span></i></a></li>
			        <li><a href="index.php?email=<?php echo $userLoggedIn;?>#cities"><i class="fas fa-hotel tooltip"><span class="tooltiptext">CITIES</span></i></a></li>
			        <li><a href="cart.php"><i class="fas fa-cart-arrow-down fa-lg tooltip"><span class="tooltiptext">FOOD CART</span></i></a></li>
		           <li><a href="#"><i class="fas fa-cog fa-lg tooltip"><span class="tooltiptext">My Account</span></i></a></li>
		            <li><a href="resources/templates/front/logout.php"><i class="fas fa-sign-out-alt fa-lg tooltip"><span class="tooltiptext">LOGOUT</span></i></a></li>
		        </ul>
		        <hr class="line-style">
		        <div class="row">
		        	<a href="index.php?email=<?php echo $userLoggedIn;?>"><img src="resources_foodie/img/FOODIE-logo-1.png" class="logo"></a>
		        </div> 
		    </div>
			</nav>


			<div class="row">
				<i class="fas fa-arrow-circle-down" style="margin-left: 48.5%; color: #22e65e; margin-bottom: 8px; font-size: 30px"></i>
			</div>

			<div class="main_account" id="account">
				<div class="left_column">
						<ul class="vertical_nav_bar">
							<li><img src="<?php echo $user['customer_profile_pic']; ?>"></li>
							<li><a href="#" onclick="show_customer_name()"><?php echo $user['customer_name']; ?></a></li>
							<li><a href="#" onclick="show_profile()">Profile Details</a></li>
							<li><a href="#" onclick="show_change_password()">Change Password</a></li>
							<li><a href="resources/templates/front/logout.php">Logout</a></li>
						</ul>
				</div>

				<div class="right_column">
					<div class="customer_name" id="first" style="display: block;">
						<h1><?php echo $user['customer_name'];?></h1>
					</div>

					<div class="profile" id="second" style="display: none;">
						<h4>Profile Details -></h4>
						<div class="basic_details">
							<div class="a">Name : <?php echo $user['customer_name']; ?></div>
							<div class="b">Email : <?php echo $user['customer_email']; ?></div>
							<div class="c">Mobile No. : <?php echo $user['customer_mobile_no']; ?></div>
							<div class="d">Address : 
								<div class="address">
								<ul>
									<li><?php echo $user_address['flat_no']; ?>,</li>
									<li><?php echo $user_address['building_name']; ?>,</li>
									<li><?php echo $user_address['street_name']; ?>,</li>
									<li><?php echo $user_address['area_name']; ?>,</li>
									<li><?php echo $user_address['city_name']; ?>,</li>
									<li><?php echo $user_address['pincode']; ?>.</li>
								</ul>   
								</div>
							</div>
							<div class="e">Orders :</div>
						</div>
					</div>

					<div class="change_password" id="third" style="display: none;">
						<h4>Change Your Password-></h4>
						<form action="my_account.php" method="POST">
							<div>Current Password<span style="color:red;">*</span> :<input class="input_box" type="password" name="password" value="" required=""></div>
							<div>New Password<span style="color:red;">*</span> :<input class="second_input" type="password" name="password" value="" required=""></div>
							<div>Confirm Password<span style="color:red;">*</span> :<input class="input_box" type="password" name="password" value="" required=""></div>

							<button type="submit">You Sure!</button>
						</form>
					</div>
				</div>


				<script type="text/javascript">

				function show_customer_name() {
					  var p = document.getElementById("first");	
				      var x = document.getElementById("second");
				      var y = document.getElementById("third");
				      if (p.style.display === "none" && x.style.display === "block" && y.style.display === "block") {
				      	p.style.display = "block"
				        x.style.display = "none";
				        y.style.display = "none";
				      } else {
				      	p.style.display = "block";
				      	x.style.display = "none";
				        y.style.display = "none";
				      }
				    }	

				function show_profile() {
					  var p = document.getElementById("first");	
				      var x = document.getElementById("second");
				      var y = document.getElementById("third");
				      if (p.style.display === "block" && x.style.display === "none" && y.style.display === "block") {
				      	p.style.display = "none";
				        x.style.display = "block";
				        y.style.display = "none";
				      } else {
				      	p.style.display = "none";
				        x.style.display = "block";
				        y.style.display = "none";
				      }
				    }

				function show_change_password() {
					  var p = document.getElementById("first");
				      var x = document.getElementById("second");
				      var y = document.getElementById("third");
				      if (p.style.display === "block" && x.style.display === "block" && y.style.display === "none") {
				      	p.style.display = "none";
				      	x.style.display = "none";
				        y.style.display = "block";
				      } else {
				      	p.style.display = "none";
				      	x.style.display = "none";
				        y.style.display = "block";
				      }
				    }
    		</script>

			</div>
	</header>