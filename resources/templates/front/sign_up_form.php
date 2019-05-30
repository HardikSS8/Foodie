<?php


if( isset($_REQUEST['submit_request'])) {
    
    $customer_name = $_REQUEST['name'];
    $customer_email = $_REQUEST['email'];
    $customer_mobile_no =$_REQUEST['mobile_no'];
    $customer_password = $_REQUEST['pass'];
    $customer_confirm_password = $_REQUEST['pass-repeat'];
    
    if($customer_name !='' and $customer_email !='' and $customer_mobile_no !='' and $customer_password !='' and $customer_confirm_password !=''){
 
        if($customer_password != $customer_confirm_password){
            echo "<h3 style='color:rgb(255, 237, 0);'>Both password does not match.</h3>";
        }else{
        
          $connection = mysqli_connect("localhost", "root", "", "foodie_db");

          $insert_query = "INSERT INTO users (customer_id, customer_name, customer_email, customer_mobile_no, customer_password, sign_up_date) VALUES ('', '$customer_name', '$customer_email', '$customer_mobile_no', '$customer_password', NOW())";

          $sql = mysqli_query($connection, $insert_query);
              
        $_SESSION['name'] = $customer_email;     
    
          if(!$sql) {
            die("Query Failed" . mysqli_error($connection));
          }
        }
        
      
    }else{
        echo "<h3 style='color:#22e65e;'>Please fill all the information.</h3>";
    }
    
}
?>


<form action="sign_up.php" method="post">
    <div class="container" id="shadow">
        <h2 class="reg">Register</h2>
        <hr>

        <i class="fa fa-user icon"></i><label id="name">Enter Name</label>
        <input type="text" id="name" name="name" required>

        <i class="fa fa-envelope icon"></i><label id="name">Enter Email</label>
        <input type="text" id="email" name="email" required>

        <i class="fa fa-phone"></i><label id="mobile">Enter Mobile No.</label>
        <input type="text" id="number" name="mobile_no" required>

        <i class="fa fa-key icon"></i><label id="pass">Enter Password</label>
        <input type="password" id="password" name="pass" required>

        <i class="fa fa-unlock"></i><label id="pass">Confirm Password</label>
        <input type="password" id="password" name="pass-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px; margin-top:8px;"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:#22e65e; text-decoration: none; font-weight: 500; font-size: 20px;">Terms & Privacy.</a></p>

        <div class="clearfix">
            <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
            <button type="submit" name="submit_request" value="Sign Up" onsubmit="return validate();" class="signupbtn">Sign Up</button>
        </div>
        <p class="para">Already have an account? <a href="login.php" style="color:rgb(255, 237, 0);">Login here.</a></p>
    </div>
</form>