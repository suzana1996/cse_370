<style>
  .navbar-inverse {
    background-color: #720707;
    border-color: #080808;
    color:white;
}
.navbar-inverse .navbar-nav>li>a {
    color: #fffcfc;
}
.navbar-inverse .navbar-brand {
    color: #c9ff65;
}

</style>
<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Fastfood-Cafe</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="managersignup.php" class="dropdown-toggle active"  role="button" aria-haspopup="true" aria-expanded="false"><span class=" glyphicon-user"></span> Sign Up  </a>
                
            </li>

            <li><a href="managerlogin.php" class="dropdown-toggle active" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login </a>
              
            </li>
          </ul>
        </div>

      </div>
    </nav>