<div id="mobile-form" style="display:block">
    <form action="forgetPassword.php" method="post">
        <input type="text" name="mobile" placeholder="Enter Mobile">
        <input type="submit" name="submitMobile" value="Send OTP">
    </form>
</div>

<div id="otp-form" style="display:none">
    <form action="forgetPassword.php" method="post">
        <input type="text" name="otp" placeholder="Enter OTP">
        <input type="submit" name="submitOtp" value="Enter">
    </form>
</div>
<?php
    include('connection.php');
    // $GLOBALS['user_id'] = "";
    if (isset($_POST['submitMobile'])) {
        $mobile = $_POST['mobile'];

        $query = "SELECT * FROM `user` WHERE mobile = '$mobile'";
        $run = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($run);
        if($row==0) {
            echo "<script>alert('No Record Found')</script>";
        }
        else{
            $user_id = $row['user_id'];

            $otpValue = rand(100,1000);
            $date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
            $generateDate = $date->format('Y-m-d H:i:s');
            
            $query1 = "update user SET verification_code = '$otpValue', otp_generate_time = '$generateDate', code_active = 1  WHERE user_id = '$user_id'";
            echo $query1;
            if(mysqli_query($conn,$query1))
            {
                ?>
                <script>document.getElementById("mobile-form").style.display='none';document.getElementById("otp-form").style.display='block';</script>
                <?php
            }         
        }
    }
    
    if(isset($_POST['submitOtp'])) {
        $otp = $_POST['otp'];

        $validateDate = new DateTime(null, new DateTimezone("Asia/Kolkata"));
        $NewDate = $validateDate->format('Y-m-d H:i:s');

        $query2 = "SELECT * FROM `user` WHERE verification_code = '$otp' and code_active = 1 and TIMEDIFF(CURRENT_TIMESTAMP(),otp_generate_time ) < '00:00:20'";
        // echo $query2;
        // exit;
        
        $run2 = mysqli_query($conn,$query2);
        $row2 = mysqli_fetch_array($run2);
        if($row2 > 0) {
            echo "<script>alert('Account Accessed')</script>";
            $query3 = "update user SET code_active = '0' WHERE verification_code = '$otp'";
            
            if(mysqli_query($conn,$query3))
            {
            echo "<script>alert('Value Updated')</script>";
            }    
        }
        else {
            echo "<script>alert('OTP Incorrect')</script>";            
        }
    }
?>