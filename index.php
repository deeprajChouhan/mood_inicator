<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mood Indicator</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style media="screen">
    body{
      background-image: url('images/back5.jpg');
      background-size: cover;
    }
  </style>
  <body>
<?php include 'connection.php';
        session_start();
 ?>
<div class="col-md-12 col-lg-12 col-sm-12 header"></div>
<div class="col-md-12 col-sm-12 col-lg-12">
<div class="col-md-2"></div>
<center><div class="col-md-8 col-lg-12 col-sm-12"><span class="modify" style="color:white;">Please Login</span></div></center>
<div class="col-md-2"></div>
</div>
<div class="clearfix" style="padding-bottom:100px;padding-top:50px;"></div>
<div class="col-md-12 col-lg-12">
<div class="col-md-6 col-lg-6 col-sm-12 login_student">
<center><form  action="search.php" method="GET"><table>
<div class="line"></div>
<th><center><span style="font-family:font1;font-size:30px;color:white;">Student Login</span></center></th>
<tr><td><center><input type="text" name="uname" class="feilds" placeholder="Enter Username"><center></td></tr>
<tr><td>
<center><input type="password" name="pass" placeholder="Enter Password" class="feilds"></center>
</td></tr>
<tr><td><center><input type="submit" name="ssubmit" class="btn btn-success" value="login" style="font-family:font1;font-size:20px;width:300px;"/></center></td></tr>
</table></form></center>
</div>
<div class="col-md-6 col-lg-6 col-sm-12">
<center><table>
  <center><span style="font-family:font1;font-size:30px;color:white;">Welcome Mood Indicator</span></center>
<form action="profile.php"  method="POST">
<table >
<th><center><span style="font-family:font1;font-size:30px;color:white;">Admin Login</span></center></th>
<tr><td><input type="text" class="feilds" name="username" placeholder="Enter Username" style="width:400px;"></td></tr>
<tr><td><input type="password" class="feilds" name="password" placeholder="Enter Password" style="width:400px;"></td></tr>
<tr><td><input type="submit" class="btn btn-danger" name="submit" value="login" style="width:300px;margin-left:60px;font-family:font1;font-size:20px;">
<table>
  </form>
</div>
</div>
</div>
<?php
if (isset($_POST['submit'])) {
  $tname = $_POST['username'];
  $tpass = $_POST['password'];
  $sql = "SELECT name FROM teacher WHERE name = '".md5($tname)."' AND password = '".md5($tpass)."'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res,MYSQLI_NUM);
  if($row > 0){
    header("Location:profile.php");
    echo "success";
  }
}
if(isset($_GET['ssubmit'])){
  $name = $_GET['uname'];
  $pass = $_GET['pass'];
  $_SESSION['username'] = $name;
  $sql = "SELECT name FROM student WHERE name = '".md5($name)."' AND password = '".md5($pass)."'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res,MYSQLI_NUM);
  if($row > 0){
    header("Location:search.php");
  }
}

 ?>
  </body>
</html>
