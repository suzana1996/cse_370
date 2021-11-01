<?php
session_start();
?>

<html>

  <head>
    <title> Home | Fastfood-Cafe </title>
  </head>


  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  

  <body>
    <div class="body">

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


    <?php include 'includes/header.php'?>

    <div>
      <video autoplay="" loop="" muted="" style="margin-top: -10%;padding: 0; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity: 1; width: 100%; height: 556px; object-fit: fill;"><source src="videos/Restaurant-Dishes.mp4.mp4" type="video/mp4"><source src="videos/Restaurant-Dishes.webmhd.webm" type="video/webm"><source src="videos/Restaurant-Dishes.oggtheora.ogv" type="video/ogg"></video>
    </div>

    <div class="wide">
    


    </div>
    <br>
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center>
      <div class="orderbtn">
          <a href="customerlogin.php" role="button">
        <span></span>
        <span></span>
        <span></span>
        <span></span> Order Now
    </a>
    </div>
  </center>
    </div>
    </div>

    
  
</body>
<style>
    body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #170101 !important;
}
.orderblock h2 {
    color: #fff;
}
.orderbtn a {
    text-decoration: none;
    font-family: consolas;
    text-transform: uppercase;
    letter-spacing: 4px;
    font-size: 24px;
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: #2196f3;
    overflow: hidden;
    transition: .1s;
}

.orderbtn a:hover {
    color: white;
    background: #2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 40px #2196f3;
    transition-delay: 1s;
}

.orderbtn a span {
    position: absolute;
    display: block;
}

.orderbtn a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #2196f3);
}

.orderbtn a:hover span:nth-child(1) {
    left: 100%;
    transition: 1s;
}

.orderbtn a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #2196f3);
}

.orderbtn a:hover span:nth-child(2) {
    top: 100%;
    transition: 1s;
    transition-delay: 0.25s;
}

.orderbtn a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #2196f3);
}

.orderbtn a:hover span:nth-child(3) {
    right: 100%;
    transition: 1s;
    transition-delay: 0.5s;
}

.orderbtn a span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(-360deg, transparent, #2196f3);
}

.orderbtn a:hover span:nth-child(4) {
    bottom: 100%;
    transition: 1s;
    transition-delay: 0.75s;
}
</style>
</html>
