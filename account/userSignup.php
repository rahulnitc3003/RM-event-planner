<?php
    include('connection.php');
    
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        // echo $cpassword;
        // exit;
        // if ($email == ""){
        //     echo "<script>alert('Please fill email Values')</script>";
        // }
        if ($password != $cpassword) {
            echo "<script>alert('Confirm Password Not Matching')</script>";
            echo "<script>window.open('../index.php', '_self')</script>";
        }
        if($mobile == "" && $password == "" ){
            echo "<script>alert('Please Fill mobile or Email')</script>";
            echo "<script>window.open('../index.php', '_self')</script>";
        }
        
        else {
            $query = "select * from user where email = '$email' or mobile = '$mobile'";
            // echo $query;
            // exit();
            $run = mysqli_query($conn,$query);
            if(mysqli_fetch_array($run)==0) {

                $sql = "INSERT INTO user (email, mobile, password) VALUES ('$email', '$mobile', '$password')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Account Sucessfully Created')</script>";
                    echo "<script>window.open('../index.php', '_self')</script>";
                } else {
                    echo "error in intersion";
                    echo "<script>window.open('../index.php', '_self')</script>";

                }
            }
            else {
                echo "<script>alert('User Already Exited')</script>";
                echo "<script>window.open('../index.php', '_self')</script>";

            }

            mysqli_close($conn);
        }
    }
?>
<!-- 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <br>
    <form action="userSignup.php" method="post">
        EMail: <input type="text" name="email"><br>
        Mobile: <input type="text" name="mobile"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>


</body>
</html> -->