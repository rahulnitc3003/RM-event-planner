<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}


.input_error{
    background-color:#ff6666;
    color: #000;
    text-align: center;
    padding: 5px;
    display: none;
    margin-bottom: 10px;
}
.input_success{
    background-color:green;
    color: #000;
    text-align: center;
    padding: 5px;
    display: none;
    margin-bottom: 10px;
}


</style>


<section class="login-block">
    <div class="container">
	    <div class="row">
		    <div class="col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>
                <div class="input_error"></div>
                <div class="input_success"></div>
		        <form class="login-form" action="adminLogin.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                        <input type="text" class="form-control" placeholder="Enter Your Id" name="admin_id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
                    </div>
                    <div class="form-check">
                        <button type="submit" class="btn btn-login float-right" name="submit">Submit</button>
                    </div>
                </form>
            </div>
    		<div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>	
                            </div>
                        </div>
                    </div>    
		        </div>
	        </div>
        </div>
    </div>
</section>


<?php
	include('connection.php');

	if(isset($_POST['submit']))
	{
		$admin_id = $_POST['admin_id'];
		$password = $_POST['password'];
		$query = "select * from admin where id = '$admin_id' AND password = '$password'";
		$run = mysqli_query($conn,$query);
		if( mysqli_num_rows($run) > 0 )
		{
			// echo "<script>$('.input_success').html('Login Success').show();</script>";
			echo "<script>window.open('allBooking.php','_self')</script>";
		}
		else
		{
            // echo "<script>alert('Admin ID or Password Incorrect')</script>";
            ?>
            <script>
                $('.input_error').html('Incorrect Id or Password').show();
            </script>
            <?php
		}
	}
?>