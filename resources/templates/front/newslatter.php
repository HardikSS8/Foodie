<?php

$customer_name = isset($_POST['name']) ? $_POST['name'] : '';
$customer_email = isset($_POST['email']) ? $_POST['email'] : '';
$newslatter = isset($_POST['news']) ? $_POST['news'] : '';
$customer_review = isset($_POST['message']) ? $_POST['message'] : '';
$review_date = isset($_POST['date']) ? $_POST['date'] : '';

$connection = mysqli_connect("localhost", "root", "", "foodie_db");

$query = "INSERT INTO reviews(customer_id, customer_name, customer_email, newslatter, customer_review, review_date) VALUES ('', '$customer_name', '$customer_email', '$newslatter', '$customer_review', NOW())";

    $sql = mysqli_query($connection, $query);

    if(!$sql){
            die("Query Failed" . mysqli_err1or($connection));
    } 


?>

<section class="section-form">
    <div class="row">
        <h2>We're happy to hear from you</h2>
    </div>

    <div class="row">
        <form method="post" action="index.php" class="contact-form">
            <div class="row">
                <div class="col span-1-of-3">
                    <label>Name</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="name" id="name" placeholder="Your name" required>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label>Email</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="email" name="email" id="email" placeholder="Your email" required>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label>How did you find us?</label>
                </div>
                <div class="col span-2-of-3">
                    <select name="find-us" id="find-us">
                        <option value="friends" selected>Friends</option>
                        <option value="search">Search Engine</option>
                        <option value="add">Adds</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label>Newsletter</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="checkbox" name="news" id="news" value="1" checked> Yes, please
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label>Drop us a line</label>
                </div>
                <div class="col span-2-of-3">
                    <textarea name="message" placeholder="Your message" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label>&nbsp;</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="submit" value="Send it!" />
                </div>
            </div>

        </form>
    </div>
</section>