<?php

ini_set('display_errors', 1);

if( isset($_REQUEST['submit_request'])) {
    
    $customer_email = $_REQUEST['email'];
    $customer_password = $_REQUEST['pass'];
    
    if( $customer_email != '' and $customer_password != ''){
        
            $connection = mysqli_connect("localhost", "root", "", "foodie_db");
            
            $query = "SELECT * from users where customer_email = '$customer_email'";
            
            $sql = mysqli_query($connection, $query);

            $confirm_password = mysqli_fetch_array($sql);
        
            $password_match = $confirm_password['customer_password'];

            if ( mysqli_num_rows($sql) == 0){
                echo "<h3 style='color: rgb(255, 237, 0);'>Sorry no email address existed in the FOODIE.</h3>";
            }else {
                if ($customer_password != $password_match){
                    echo "<h3 style='color: rgb(255, 20, 0);'>Password does not match!! Please try again.</h3>";    
                }else{
                    $_SESSION['customer_email'] = $customer_email;
                    header("Location: index.php?email=$customer_email");
                }
                    
            }

    }else{
echo "<h3 style='color:#22e65e;'>Please fill all the information.</h3>";
}

}
?>

<div class="nav">
    <img src="resources_foodie/img/FOODIE-logo-1.png" class="logo"><br>
</div>

<form action="login.php?action=submit_request" method="post">
    <div class="container" id="shadow">
        <h2 class="reg">Login</h2>
        <hr>

        <i class="fa fa-user icon"></i><label id="email"><b>Email</b></label>
        <input type="text" name="email" required><br><br>

        <i class="fa fa-key icon"></i><label id="pass"><b>Password</b></label>
        <input type="password" name="pass" required><br><br>

        <button type="submit" name="submit_request" value="Login" onclick="clickAlert" class="loginbtn"><a>Login</a></button><br>
        <br>

        <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
        <span class="psw"><a href="#" class="forgot">Forgot password?</a></span>
    </div>
</form>

<p class="para1"><a href="index.php"> Let's Go Order in FOODIE.</a></p>
