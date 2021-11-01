<?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: foodlist.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Guest Login | Fastfood-Cafe </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
<!DOCTYPE html>
<html>

<head>
    <title>Demo Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <!-- Main Css -->
   
    <link rel="stylesheet" type="text/css" href="css/signinsignupstyle.css">

   
</head>

<body id="home">
    <!-- Preloader -->
    


    <!-- Main Wrapper -->
    <main class="wrapper">

        
    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Le Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
      
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
   
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
    <div class="jumbotron">
     <h1> Welcome to <span class="edit"> Le Cafe' </span></h1>
     <br>
   <p>Please LOGIN to continue.</p>
    </div>
    </div>
        <div class="login-page">
            <div class="box">
                <div class="left">
                    <h3>Create Account</h3>
                    <button type="button" class="register-btn">Register</button>
                </div>
                <div class="right">
                    <h3>Have an Account ?</h3>
                    <button type="button" class="login-btn">Login</button>
                </div>




                <form action="" method="POST">

<div class="form">
                <h3>Log In</h3>
                <div class="form-group">
                <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
                  </div>
                <div class="form-group">
                    
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">

                </div>
                <div class="form-group">
                    <label>
                  <input type="checkbox"> Remember Me
              </label>
                </div>
                <button class="submit-btn" name="submit" type="submit" value=" Login ">Submit</button>
                <p><a href="customersignup.php" class="register-btn">Register</a> </p>
            </div>




</form>
                <!-- <div class="form">
                     Login form Start -->
                    <!-- <div class="login-form">
                        <h3>Log In</h3>
                        <div class="form-group">
                            <input type="text" placeholder="Email Address*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password*" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>
 			 			<input type="checkbox"> Remember Me
 			 		</label>
                        </div>
                        <button type="button" class="submit-btn">Login</button>
                        <p><a href="#" class="register-btn">Register</a> | <a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
                    </div> --> -->
                    <!-- Login form End -->



					
                    <!-- Register form Start
                    <div class="register-form form-hidden">
                        <h3>Register</h3>
						<div class="form-group">
                            <input type="text" placeholder="FULL NAME*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="USERNAME*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="EMAIL ADDRESS*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="MOBILE NUMBER*" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" placeholder="ADDRESS*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="PASSWORD*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="CONFIRM PASSWORD*" class="form-control">
                        </div>

                        <button type="button" class="submit-btn">Register</button>
                        <p><a href="#" class="login-btn">Login</a> | <a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
                    </div> -->
                    <!-- Register form End -->

                    <!-- Lost Password form Start -->
                    <!-- <div class="lost-password-form form-hidden">
                        <h3>Lost Your Password ?</h3>
                        <h5>You will receive a link to create a new password via email.</h5> -->

                        <!-- <div class="form-group">
                            <input type="text" placeholder="Email Address*" class="form-control">
                        </div>


                        <button type="button" class="submit-btn">Reset Password</button>
                        <p><a href="#" class="login-btn">Login</a> | <a href="#" class="register-btn">Register</a></p>
                    </div> -->
                    <!-- Lost Password form End -->

                </div>
            </div>
        </div>
        <div class="blank"></div>
































        <footer>
            <div class="footer-main pad-120 white-clr">
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 footer-widget">
                            <a href="#"> <img class="logo" alt="#" src="assets/img/logo/logo-white.png" /> </a>
                        </div>
                        <div class="col-md-3 col-sm-6 footer-widget">
                            <h2 class="title-1 fw-900">quick links</h2>
                            <ul>
                                <!-- <li> <a href="#">sitemap</a> </li> -->
                                <li> <a href="#">pricing</a> </li>
                                <li> <a href="#">payment method</a> </li>
                                <!-- <li> <a href="#">support</a> </li> -->
                            </ul>
                        </div>
                        <!-- <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">important links</h2>
                                <ul>
                                    <li> <a href="#">themeforest</a> </li>
                                    <li> <a href="#">envato</a> </li>
                                    <li> <a href="#">audiojungle</a> </li>
                                    <li> <a href="#">videohibe</a> </li>
                                </ul>
                            </div> -->
                        <div class="col-md-3 col-sm-6 footer-widget" align="">
                            <h2 class="title-1 fw-900">get in touch</h2>
                            <ul class="social-icons list-inline">
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s">
                                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                                </li>
                                <!-- <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#" class="fa fa-google-plus"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li> -->
                            </ul>
                            <ul class="payment-icons list-inline">
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s">
                                    <a href="#"> <img alt="#" src="assets/img/icons/payment-1.png" /> </a>
                                </li>
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s">
                                    <a href="#"> <img alt="#" src="assets/img/icons/payment-2.png" /> </a>
                                </li>
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s">
                                    <a href="#"> <img alt="#" src="assets/img/icons/payment-3.png" /> </a>
                                </li>
                                <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s">
                                    <a href="#"> <img alt="#" src="assets/img/icons/payment-4.png" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="theme-container container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p> © Copyright 2021, All rights reserved by CodeMistri </p>
                        </div>
                        <!-- <div class="col-md-6 col-sm-6 text-right">
                                <p> Design and <span class="theme-clr fa fa-heart"></span>  by <a href="#" class="main-clr"> jThemes Studio </a> </p>
                            </div>
 --></div>
                </div>
            </div>
        </footer>
        <!-- /.Footer -->


    </main>
    <!-- / Main Wrapper -->

    <!-- Top -->
    <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

    <!-- Popup: Login -->
    <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

            <div class="modal-content">
                <div class="login-wrap text-center">
                    <h2 class="title-3"> sign in </h2>
                    <p> Sign in to <strong> GO </strong> for getting all details </p>

                    <div class="login-form clrbg-before">
                        <form class="login">
                            <div class="form-group"><input type="text" placeholder="Email address" class="form-control"></div>
                            <div class="form-group"><input type="password" placeholder="Password" class="form-control"></div>
                            <div class="form-group">
                                <button class="btn-1 " type="submit"> Sign in now </button>
                            </div>
                        </form>
                        <a href="#" class="gray-clr"> Forgot Passoword? </a>
                    </div>
                </div>
                <div class="create-accnt">
                    <a href="#" class="white-clr"> Don’t have an account? </a>
                    <h2 class="title-2"> <a href="#" class="green-clr under-line">Create a free account</a> </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Popup: Login -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div>
            <div class="popup-box-inner">
                <form>
                    <input class="search-query" type="text" placeholder="Search and hit enter" />
                </form>
            </div>
        </div>
        <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
    </div>
    <!-- / Search Popup -->
    <script src="js/signin_signup_script.js"></script>

</body>


</html>