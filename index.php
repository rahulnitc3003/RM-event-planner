<!-- HTML and CSS Files included -->
<?php include('common/metaDescription.php'); ?>
<style>
.seminor-login-modal-body .close{
  position: relative;
  top: -5px;
  left: 0px;
  color: #1cd8ad;
  }
  .seminor-login-modal-body .close{
      opacity:0.75;
  }

  .seminor-login-modal-body .close:focus, .seminor-login-modal-body .close:hover {
    color: #39e8b0;
    opacity: 1;
    text-decoration: none;
    outline:0;
  }


  .seminor-login-modal .modal-dialog .modal-content{
      top: 50px;
      border-radius:0px;
  }

  /* form animation */
  .seminor-login-form .form-group {
    position: relative;
    margin-bottom: 1.5em !important;
  }
  .seminor-login-form .form-control{
  border: 0px solid #ced4da !important;
  border-bottom:1px solid #adadad !important;
  border-radius:0 !important;
  }
  .seminor-login-form .form-control:focus, .seminor-login-form .form-control:active{
  outline:none !important;
  outline-width: 0;
  border-color: #adadad !important;
  box-shadow: 0 0 0 0.2rem transparent;
  }
  *:focus {
  outline: none;
  }
  .seminor-login-form{
  padding: 2em 0 0;
  }

  .form-control-placeholder {
  position: absolute;
  top: 0;
  padding: 7px 0 0 13px;
  transition: all 200ms;
  opacity: 0.5;
  border-top: 0px;
  border-left: 0;
  border-right: 0;
  }

  .form-control:focus + .form-control-placeholder,
  .form-control:valid + .form-control-placeholder {
    font-size: 75%;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    opacity: 1;
  }

  
  .btn-check-log .btn-check-login {
    font-size: 16px;
    padding: 10px 0;
  }
  button.btn-check-login:hover {
    color: #fff;
    background-color: #f58220;
    border: 2px solid #f58220;
  }
  .btn-check-login {
    color: #f58220;
    background-color: transparent;
    border: 2px solid #f58220;
    transition: all ease-in-out .3s;
  }
  .btn-check-login {
    display: inline-block;
    padding: 12px 0;
    margin-bottom: 0;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border-radius:50px;
    padding: 1px 15px 3px 2px; 
    width: 100%;
  }
  .forgot-pass-fau a {
      text-decoration: none !important;
      font-size: 14px;
  }
  .text-primary-fau {
      color: #1959a2;
  }
</style>
<body>
    <!-- Navigation -->
    <?php include('common/navigation.php'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/main2.jpg');"></div>
                
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/main1.jpg');"></div>
                
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                
            </div>
        </div>


        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <button class="w3-button w3-black w3-display-left" style="background-color: #5e010b!important; height: 100px; width: 65px;">&#10094;</button>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <button class="w3-button w3-black w3-display-right" style="background-color: #5e010b!important; height: 100px; width: 65px;">&#10095;</button>
        </a>
    </header> -->


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="images/main2.jpg" alt="Los Angeles" style="width:100%;height: 450px;">
            </div>

            <div class="item">
                <img src="images/main1.jpg" alt="Chicago" style="width:100%; height:450px;">
            </div>
            
            <div class="item">
                <img src="images/main2.jpg" alt="New york" style="width:100%; height: 450px;">
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <button class="w3-button w3-black w3-display-left" style="background-color: #5e010b!important; height: 100px; width: 65px;">&#10094;</button>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <button class="w3-button w3-black w3-display-right" style="background-color: #5e010b!important; height: 100px; width: 65px;">&#10094;</button>
        </a>
    </div>



    <div class="modal fade seminor-login-modal" data-backdrop="static" id="sem-reg">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body seminor-login-modal-body">
                    <h5 class="modal-title text-center">CREATE AN ACCOUNT</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    </button>
                    <form class="seminor-login-form" action="account/userSignup.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" autocomplete="off">
                            <label class="form-control-placeholder" for="name">Email address or Mobile</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile" class="form-control" autocomplete="off">
                            <label class="form-control-placeholder" for="name">Phone Number</label>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" required autocomplete="off">
                            <label class="form-control-placeholder" for="password">Password</label>
                        </div>
                        <div class="form-group">
                            <input type="password" name="cpassword" class="form-control" required autocomplete="off">
                            <!-- <input type="password" name="confirmPassword" class="form-control" required autocomplete="off"> -->
                            <label class="form-control-placeholder" for="changePassword">Confirm Password</label>
                        </div>
                        <div class="btn-check-log">
                            <button type="submit" name="submit" class="btn-check-login">SIGN UP</button>
                        </div><br>
                        <div class="text-center pt-3">
                            <a href="#" class="text-primary-fau"><span data-toggle="modal" data-target="#user-sem-login" data-dismiss="modal">Already Have An Account</span></a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade seminor-login-modal" data-backdrop="static" id="admin-sem-login">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body seminor-login-modal-body">
                        <h5 class="modal-title text-center">Admin ACCOUNT</h5>
                        <button type="button" class="close" data-dismiss="modal">
                        <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                        </button>
                        <form class="seminor-login-form" action="index.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" required autocomplete="off">
                                <label class="form-control-placeholder" for="name">Email address</label>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" required autocomplete="off">
                                <label class="form-control-placeholder" for="password">Password</label>
                            </div>
                            
                            <div class="btn-check-log">
                                <button type="submit" class="btn-check-login">LOGIN</button>
                            </div><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade seminor-login-modal" data-backdrop="static" id="user-sem-login">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body seminor-login-modal-body">
                        <h5 class="modal-title text-center">User Account</h5>
                        <button type="button" class="close" data-dismiss="modal">
                        <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                        </button>
                        <form class="seminor-login-form" action="index.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" required autocomplete="off">
                                <label class="form-control-placeholder" for="name">Email address or Mobile</label>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" required autocomplete="off">
                                <label class="form-control-placeholder" for="password">Password</label>
                            </div>
                            
                            <div class="btn-check-log">
                                <input type="submit" name="login" value="login" class="btn-check-login">
                                <!-- <button type="submit" name="login" class="btn-check-login">LOGIN</button> -->
                            </div><br>
                            <div class="forgot-pass-fau text-center pt-3">
                                <a href="#" class="text-primary-fau">
                                    <span data-toggle="modal" data-target="#forget-sem-login" data-dismiss="modal" style="position: absolute;left: 40px;">Forget Password?</span>
                                </a>
                                <a href="#" class="text-primary-fau">
                                    <span data-toggle="modal" data-target="#sem-reg" data-dismiss="modal">New User Account</span>
                                </a>
                                <!-- <a href="#" class="text-secondary">Forgot Your Password?</a> -->
                            </div>
                            <!-- <div class="text-center pt-3">
                                <a href="#" class="text-primary-fau"><span data-toggle="modal" data-target="#sem-reg" data-dismiss="modal">New User</span></a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade seminor-login-modal" data-backdrop="static" id="forget-sem-login">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body seminor-login-modal-body">
                        <h5 class="modal-title text-center">Recover Password</h5>
                        <button type="button" class="close" data-dismiss="modal">
                        <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                        </button>
                        <form class="seminor-login-form">
                            <div class="form-group">
                                <input type="text" class="form-control" required autocomplete="off">
                                <label class="form-control-placeholder" for="name">Enter Registered Phone</label>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" required autocomplete="off">
                                <label class="form-control-placeholder" for="password">OTP</label>
                            </div>
                            
                            <div class="btn-check-log">
                                <button type="submit" class="btn-check-login">Submit</button>
                            </div><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center><h1 class="page-header">Welcome To RM Event Planner</h1></center>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <center><h2 class="page-header">Models and Templates</h2></center>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="images/main2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <hr>

        <!-- Call to Action Section -->
        <center><h2>What our customers say</h2></center>
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel1" class="carousel slide text-center" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                        </ol>
            
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <center><img src="images/rahul.jpg" alt="img" style="width:100px; height:100px; margin-bottom:-55px;"></center>
                                <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
                            </div>
                            <div class="item">
                                <center><img src="images/rahul.jpg" alt="img" style="width:100px; height:100px; margin-bottom:-55px;"></center>
                                <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
                            </div>
                            <div class="item">
                                <center><img src="images/rahul.jpg" alt="img" style="width:100px; height:100px; margin-bottom:-55px;"></center>
                                <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
                            </div>
                        </div>
            
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div><hr>
    </div>
    <?php include('common/footer.php'); ?>
    <script>
        $('#adminLogin').on('click', function() {
            $('#noOperation').bind('click', false);
        });
        $('#userLogin').on('click', function() {
            $('#noOperation').bind('click', false);
        });

        $('.close').on('click', function() {
            $('.nav').show();
            $('#noOperation').unbind('click', false);
        });
    </script>
</body>
</html>



<?php
    include('account/connection.php');
    
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
            $sql = "select * from user where (email='$email' or mobile='$email') and password ='$password'";
            // echo $sql;
            $run = mysqli_query($conn,$sql);
            
            if(mysqli_fetch_array($run)>0)
            {
                echo "<script>alert('Login Sucess')</script>";
                echo "<script>window.open('account/userDashboard.php','_self')</script>";
            }
            else
            { 
                echo "<script>alert('Email or Password is incorrect')</script>";
                // echo "<script>window.open('index.php','_self')</script>";

            }
            // mysqli_close($conn);
        }
    }
?>