<?php
    include('connection.php');
    
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email == ""){
            echo "<script>alert('Please fill email Values')</script>";
        }
        if($password == "") {
            echo "<script>alert('Please Fill password')</script>";
        }
        else
        {
            $sql = "select * from user where email='$email' or mobile='$email' and password ='$password'";
            // echo $sql;
            $run = mysqli_query($conn,$sql);
            
            if(mysqli_fetch_array($run)>0)
            {
                echo "<script>alert('Login Sucess')</script>";
                echo "<script>window.open('allBooking.php','_self')</script>";
            }
            else
            { 
                echo "<script>alert('Email or Password is incorrect')</script>";
                echo "<script>window.open('../index.php','_self')</script>";

            }
            // mysqli_close($conn);
        }
    }
?>

<!-- <!DOCTYPE html>
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
    <form action="userLogin.php" method="post">
        EMail: <input type="text" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>


</body>
</html> -->