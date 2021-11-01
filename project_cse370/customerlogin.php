
<?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: foodlist.php"); 
}
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Login & Resgister Form</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/signinsignupstyle.css">
</head>
<body>
 -->
 <!DOCTYPE html>
<html>

<head>
<title> Login | Fastfood-Cafe </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="css/signinsignupstyle.css">
    <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type = "text/css" href ="css/preloader.css"> -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>

  
</head>
<style>
  .login-page .box {
    background-image: url('images/burger.jpg');
    background-size: 900px;
    background-position: -440px center;
    background-repeat: repeat-x;
    flex: 0 0 900px;
    max-width: 900px;
    min-height: 600px;
    box-shadow: 0 0 30px #FFBF00;
    display: flex;
    flex-wrap: wrap;
    position: relative;
    z-index: 1;
    transition: all 0.5s ease-in-out;
}
  </style>





<body id="home">
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>

    


    <!-- Main Wrapper -->
    <main class="wrapper">

        
        <?php include 'includes/header.php'?>
        <div class="container">
    <div class="jumbotron">
     <h1>Hi <br> Welcome to <span class="edit"> FastFood-Cafe' </span></h1>
     <br>
   <p>Please LOGIN/REGISTER to continue.</p>
    </div>
    </div>
        <form action="" method="POST">
        <div class="login-page" >
            <div class="box" >
                <div class="left">
                    <h3>Create Account</h3>
                    <button type="button" class="register-btn">Register</button>
                </div>
                <div class="right">
                    <h3>Have an Account ?</h3>
                    <button type="button" class="login-btn">Login</button>
                </div>
                <div class="form">
                    <!-- Login form Start -->
                    <div class="login-form">
                        <h3>Log In</h3>
                        <div class="form-group">
                            <!-- <input type="text" placeholder="Email Address*" class="form-control"> -->
                            <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">

                        </div>
                        <div class="form-group">
                            <!-- <input type="password" placeholder="Password*" class="form-control"> -->
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">

                        </div>
                        <div class="form-group">
                            <label>
 			 			<input type="checkbox"> Remember Me
 			 		</label>
                        </div>
                        <!-- <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button> -->

                        <button class="submit-btn" name="submit" type="submit" value=" Login ">Submit</button>
                        <p><a href="#" class="register-btn"></a> </p>
                    </div>
</form>
                    <!-- Login form End -->








                    <!-- Register form Start -->
                    <form role="form" action="customer_registered_success.php" method="POST">

                    <div class="register-form form-hidden">
                        <h3>Register</h3>
                        <div class="form-group">
                            <!-- <input type="text" placeholder="USERNAME*" class="form-control"> -->
                            <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">

                        </div>
                        <div class="form-group">
                            <!-- <input type="text" placeholder="FULL NAME*" class="form-control"> -->
                            <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">

                        </div>
                        <div class="form-group">
                            <!-- <input type="email" placeholder="EMAIL ADDRESS*" class="form-control"> -->
                            <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">

                        </div>



                        <div class="form-group">
                            <!-- <input type="tel" placeholder="MOBILE NUMBER*" class="form-control"> -->
                            <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">

                        </div>
                        <div class="form-group">
                            <!-- <input type="text" placeholder="SHOP NAME*" class="form-control"> -->
                            <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">

                        





                        <div class="form-group">
                            <!-- <input type="password" placeholder="PASSWORD*" class="form-control"> -->
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">

                       

                        
                        <button class="submit-btn" type="submit">Submit</button>
                        
    </form>
                    <!-- Register form End -->

                </div>
            </div>
        </div>
        
































        


    </main>
    <!-- / Main Wrapper -->

    <!-- Top -->
    
    <div class="blank"></div>

   


    
    


</body>

<!-- Theme JS -->
<script src="js/signin_signup_script.js"></script>
    <!-- go to top js -->
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
</html>