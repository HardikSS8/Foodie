<nav>
    <div class="row">
        <img src="resources_foodie/img/FOODIE-logo-1.png" alt="Foodie logo" class="logo">
        <a href="#"><img src="resources_foodie/img/FOODIE-logo%20(1)-black.png" alt="Foodie logo" class="logo-black"></a>
        <ul class="main-nav">
            <li>
                <a href="my_account.php?email=<?php echo $userLoggedIn; ?>">
				    <p class="tooltip"><span class="tooltiptext">Profile</span><?php echo $user['customer_name']; ?></p>
                </a>
            </li>
            <li><a href="#"><i class="fas fa-home fa-lg tooltip"><span class="tooltiptext">HOME</span></i></a></li>
            <li><a href="#features"><i class="fas fa-truck fa-lg tooltip"><span class="tooltiptext">HOME DELIVERY</span></i></a></li>
            <li><a href="#works"><i class="fas fa-tasks fa-lg tooltip"><span class="tooltiptext">HOW IT WORKS</span></i></a></li>
            <li><a href="#cities"><i class="fas fa-hotel tooltip"><span class="tooltiptext">CITIES</span></i></a></li>
            <li><a href="cart.php"><i class="fas fa-cart-arrow-down fa-lg tooltip"><span class="tooltiptext">FOOD CART</span></i></a></li>
            <li><a href="my_account.php"><i class="fas fa-cog fa-lg tooltip"><span class="tooltiptext">My Account</span></i></a></li>
            <li><a href="resources/templates/front/logout.php"><i class="fas fa-sign-out-alt fa-lg tooltip"><span class="tooltiptext">LOGOUT</span></i></a></li> 
        </ul>
    </div>
</nav>