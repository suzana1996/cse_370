    <?php
include('login_m.php'); // Includes Login Script

if(isset($_SESSION['login_user1'])){
header("location: viewfooditem.php"); //Redirecting to myrestaurant Page
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Admin Login | Fastfood-Cafe </title>
  </head>

  
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/signinsignupstyle.css">

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    

    <?php include 'includes/admin/adminsigninupheader.php'?>

    <div class="container">
    <div class="jumbotron">
     <h1>Hi Admin,<br> Welcome to <span class="edit"> Fastfood-Cafe </span></h1>
     <br>
   <p>Kindly LOGIN to continue.</p>
    </div>
    </div>

    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">
          
        <!-- Login form Start -->
       
        
        <form action="" method="POST">
          
        <div class="login-form">
                        
                        <div class="form-group">
                           
                            <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">

                        </div>
                        <div class="form-group">
                            
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">

                        </div>
                        <div class="form-group">
                            <label>
 			 			<input type="checkbox"> Remember Me
 			 		</label>
                        </div>
                        <!-- <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button> -->

                        <button class="submit-btn" name="submit" type="submit" value=" Login ">Submit</button>
                       
                    </div>
                    <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="managersignup.php">Create a new account.</a></label>
</form>
                    <!-- Login form End -->
        </div>
        
      </div>
      
    </div>
    </div>
    </body>

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