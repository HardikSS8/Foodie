<section class="section-cities" id="cities">
    <div class="row">
        <h2>We're currently in these cities</h2>
    </div>

    <div class="row">
        <?php
        
        $cities = "SELECT * FROM cities";
        $send_cities = mysqli_query($connection, $cities);
        
        if(!$send_cities){
            die("Query Failed" . mysqli_error($connection));
        }
        while($row = mysqli_fetch_array($send_cities)) {
            
          echo  "   
                <div class='col span-1-of-4 box'>
                    <img src='{$row["city_image"]}' . alt='Error'/>
                    <h3>{$row['city_name']}</h3> 

                    <div class='city-future'>
                        <i class='ion-ios-person icon-small'></i>
                        {$row['city_customers']}+ happy eaters
                    </div>

                    <div class='city-future'>
                        <i class='ion-ios-star icon-small'></i>
                        {$row['city_chefs']}+ top chefs
                    </div>

                    <div class='city-future'>
                        <i class='ion-social-twitter icon-small'></i>
                    <a href='#'> {$row['city_website']} </a>
                </div>
            </div>
            ";
        }
                
                ?>  

    </div>
</section>