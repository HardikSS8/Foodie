<style>

.col:nth-of-type(4n) { margin-left: 0 }
    
</style>
   

<section class="section-testimonials">
    <div class="row">
        <h2>Our customers can't live without us</h2>
    </div>

    <div class="row">
       
       <?php
        
        $testinomials = "SELECT * FROM testinomials";
        $send_testinomials = mysqli_query($connection, $testinomials);
        
        if(!$send_testinomials){
            die("Query Failed" . mysqli_error($connection));
        }
        while($row = mysqli_fetch_array($send_testinomials)) {
       
            echo "
            
            <div class='col span-1-of-3'>
                <blockquote>
                    {$row['customer_testinomial']}
                </blockquote>
                <cite><img src='{$row["customer_image"]}' alt='{$row['customer_name']}'>{$row['customer_name']}</cite>
            </div>
            
            ";
            
        }
            
            ?>
       
    
    </div>
</section>