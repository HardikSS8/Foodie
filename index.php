<?php require_once("resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS .  "header.php") ?>   

        <section class="section-features js--section-features" id="features">
            <div class="row">
                
                <h2>Get food fast &mdash; not fast food.</h2>
                <p class="long-copy">
                    Hello, we're foodie, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!
                </p>
            
            </div>
            
            <div class="row">
                <div class="col span-1-of-4 box">
                     <i class="ion-ios-infinite-outline icon-big"></i>
                    <h3>Up to 365 days/year</h3>
                    <p>
                       Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style. 
                    </p>
                </div>
                
            <div class="col span-1-of-4 box">
                    <i class="ion-ios-stopwatch-outline icon-big"></i>
                    <h3>Ready in 20 minutes</h3>
                    <p>
                        You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                    </p>
                </div>
                
            <div class="col span-1-of-4 box">
                    <i class="ion-ios-nutrition-outline icon-big"></i>
                    <h3>100% organic</h3>
                    <p>
                       All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better! 
                    </p>
                </div>
                
            <div class="col span-1-of-4 box">
                    <i class="ion-ios-cart-outline icon-big"></i>
                    <h3>Order anything</h3>
                    <p>
                       We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                    </p>
                </div>    
            </div>
        </section>
        
        <section class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources_foodie/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources_foodie/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources_foodie/img/3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources_foodie/img/4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
             
            
             <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources_foodie/img/5.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources_foodie/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources_foodie/img/7.jpg" alt="Burger with cheddar and bacon">
                    </figure>
                </li>
                
                <li>
                    <figure class="meal-photo">
                        <img src="resources_foodie/img/8.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
            
        </section>
        
        <?php include(TEMPLATE_FRONT . DS . "food_menu.php"); ?>
        
        <section class="section-steps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources_foodie/img/app-iphone%20copy.png" alt="Foodie app on iphone" class="app-screen">
                </div>
                
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                     </div>   
                    
                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>
                    
                    <a href="#" class="btn-app">
                        <img src="resources_foodie/img/apple.png" alt="App store Button">
                        <img src="resources_foodie/img/download-app-android.png" alt="Playstore store Button">
                    </a>
                </div>
            </div>
        </section>
         
        <?php include(TEMPLATE_FRONT . DS .  "cities.php") ?>   
        <?php include(TEMPLATE_FRONT . DS . "testimonials.php")?>
        
          
         <section class="section-plans" id="plans">
                <div class="row">
                    <h2>Start eating healthy today</h2>
                </div>
                
                <div class="row">
                    <div class="col span-1-of-3">
                        <div class="plan-box">
                            <div>
                                <h3>Premium</h3>
                                <p class="plan-price">54,750 <i class="fa fa-rupee"></i><span>/ month</span></p>
                                <p class="plan-price-meal">That's only 150 <i class="fa fa-rupee"></i> per meal</p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                                </ul>
                            </div>
                            <div>
                                <a href="sign_up.php" class="btn btn-full"> Sign up now</a>
                            </div>
                        </div> 
                    </div>    
                        
                    <div class="col span-1-of-3">
                        <div class="plan-box">
                            <div>
                                <h3>Pro</h3>
                                <p class="plan-price">5,400 <i class="fa fa-rupee"></i> <span>/ month</span></p>
                                <p class="plan-price-meal">That's only 180 <i class="fa fa-rupee"></i> per meal</p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10 days/month</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                                </ul>
                            </div>
                            <div>
                                <a href="sign_up.php" class="btn btn-ghost"> Sign up now</a>
                            </div>
                        </div>   
                    </div>
                            
                            
                    <div class="col span-1-of-3">
                        <div class="plan-box">
                            <div>
                                <h3>Starter</h3>
                                <p class="plan-price">210 <i class="fa fa-rupee"></i><span>/ meal</span></p>
                                <p class="plan-price-meal">&nbsp;</p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i> 1 meal</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 am</li>
                                    <li><i class="ion-ios-close-empty icon-small"></i> </li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                                </ul>
                            </div>    
                            <div>
                                <a href="sign_up.php" class="btn btn-ghost"> Sign up now</a>
                            </div>
                        </div>    
                    </div>
                </div>
        </section>
        
<?php include(TEMPLATE_FRONT . DS .  "newslatter.php") ?>            

<?php include(TEMPLATE_FRONT . DS .  "footer.php") ?>        
