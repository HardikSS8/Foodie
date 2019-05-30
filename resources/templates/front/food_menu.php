<div class="row fooddiv" id="food">
    <button class="foodbar" onmouseover="show_foodmenu_function()" onmouseout="hide_foodmenu_function()"> FOOD &nbsp; MENU </button>
</div>

<script type="text/javascript">

function show_foodmenu_function() {
      var x = document.getElementById("foodmenuhover");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }

function hide_foodmenu_function() {
      var x = document.getElementById("foodmenuhover");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }


    </script>

<section class="food-menu" id="foodmenuhover">
    <div class="row">
        <img src="resources_foodie/img/frozen_menu_image.jpg" class="frozen_sprite">
        <img src="resources_foodie/img/frozen_coke_menu.jpg" class="frozen_coke">
        <!-- Section starts: Main-Course -->
        <div class="left-menu">
            <!-- Item starts -->
            <div class="menu-section">
                <h2 class="menu-section-title">MAIN COURSE</h2>

                <?php
                
                $food_main_course = "SELECT * FROM food_main_course ORDER BY main_course_food_price";
                $result1 = mysqli_query($connection, $food_main_course);
                
                $food_main_course_description = "SELECT * FROM food_main_course LEFT JOIN food_main_course_description ON food_main_course.food_main_course_description_id = food_main_course_description.food_main_course_description_id ORDER BY main_course_food_price";
                $result2 = mysqli_query($connection, $food_main_course_description);
                
                if(!$result1 and !$result2){
                    die("Query Failed!" . mysqli_error($connection));
                }
                while($row1 = mysqli_fetch_array($result1) and $row2 = mysqli_fetch_array($result2)){
                    
                    echo "
                    
                    <div class='menu-item'>
                        <div class='menu-item-name'>
                            {$row1['main_course_food_name']}
                        </div>
                        <div class='menu-item-price'>
                        {$row1['main_course_food_price']} <i class='fa fa-rupee'></i>
                        </div>
                        <div class='menu-item-description'>
                            <pre>{$row2['food_main_course_description_name']}</pre>
                        </div>
                    </div>
                    
                    ";            
                }
                
                ?>
            </div>
            <!-- Item ends -->
            <!-- Section ends: Main-Course -->
        </div>

        <!-- Section starts: Pizzas -->

           <div class='right-menu'>
                <h2 class='menu-section-title'>PIZZAS</h2>
                <!-- Item starts -->
            <?php 

                $food_pizza = "SELECT * FROM food_pizza ORDER BY pizza_price";
                $result3 = mysqli_query($connection, $food_pizza);

                if(!$result3){
                    die("Query Failed!" . mysqli_error($connection));
                }

                while($row3 = mysqli_fetch_array($result3)) {

                echo "
                        <div class='menu-item'>
                            <div class='menu-item-name'>
                            {$row3['pizza_name']}
                            </div>
                            <div class='menu-item-price'>
                            {$row3['pizza_price']} <i class='fa fa-rupee'></i>
                            </div> 
                        </div>    
                ";

            }
            ?>
             <!-- Item ends -->
        </div>
            <!-- Section ends: Pizzas -->
     </div>

    <!-- Section ends: Appetizers -->
    
    <div class="row">
        <img src="resources_foodie/img/punjabi_dish.jpg" class="punjabi_dish">
        <img src="resources_foodie/img/2.jpg" class="pizza">
        <div class="menu-body">
            <!-- Section starts: Drinks -->
            <div class="menu-section">
                <h2 class="menu-section-title">DRINKS</h2>

               <?php 

                $food_drinks = "SELECT * FROM food_drinks ORDER BY drink_price";
                $result4 = mysqli_query($connection, $food_drinks);

                if(!$result4){
                    die("Query Failed!" . mysqli_error($connection));
                }

                while($row4 = mysqli_fetch_array($result4)) {

                echo "
                       
               <!-- Item starts -->
                    <div class='menu-item'>
                        <div class='menu-item-name'>
                            {$row4['drink_name']}
                        </div>
                        <div class='menu-item-price'>
                            {$row4['drink_price']} <i class='fa fa-rupee'></i>
                        </div>
                    </div>
                <!-- Item ends -->
                       
                ";

            }
            ?>
            </div>
            <!-- Section ends: Drinks -->
        </div>
    </div>
</section>