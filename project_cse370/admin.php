<?php
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Panel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
        
    <span class='button1'><a href="managerlogin.php"></a></span>
    <span class='button2'><a href="managersignup.php"></a></span>
    </body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
body{
  margin: 0;
  padding: 0;
  display: flex;
  height: 100vh;
  align-items: center;
  justify-content: center;
  background:white;
}

span{
  position: relative;
  display: inline-flex;
  width: 180px;
  height: 55px;
  margin: 0 15px;
  perspective: 1000px;
}
span a{
  font-size: 19px;
  letter-spacing: 1px;
  transform-style: preserve-3d;
  transform: translateZ(-25px);
  transition: transform .25s;
  font-family: 'Montserrat', sans-serif;
}
.button1 a:before,
.button1 a:after{
  position: absolute;
  content: "login";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid black;
  box-sizing: border-box;
}
.button2 a:before,
.button2 a:after{
  position: absolute;
  content: "registration";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid black;
  box-sizing: border-box;
}
span:nth-child(1) a:before{
  color: #fff;
  background: #000;
  transform: rotateY(0deg) translateZ(25px);
}
span:nth-child(1) a:after{
  color: #000;
  transform: rotateX(90deg) translateZ(25px);
}
span:nth-child(2) a:before{
  color: #fff;
  background: black;
  transform: rotateX(-90deg) translateZ(25px);
}
span:nth-child(2) a:after{
  color: #000;
  transform: rotateY(0deg) translateZ(25px);
}
span:nth-child(1) a:hover{
  transform: translateZ(-25px) rotateX(-90deg);
}
span:nth-child(2) a:hover{
  transform: translateZ(-25px) rotateX(90deg);
}
        </style>
</html>