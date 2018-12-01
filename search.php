<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" type="text/css"href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style media="screen">
@font-face {
    font-family: font5;
    src: url('fonts/powerweld/Powerweld.ttf');
}
  body{
    background-image: url('images/back3.jpg');
    background-size: cover;
  }
</style>
  </head>
  <body>
    <div class="topnav">
    <div class="search-container col-md-12 col-lg-12">
  <div class="col-md-2"></div>
  <form class="col-md-8" style="padding-top:15%;" method="POST"><center>
    <span style="font-family:font5;font-size:45px;color:white;padding-bottom:20px;">SearCheat</span>
    <input type="text" placeholder="Enter your Keyword" name="query" class="feilds" style="width:400px;"><br>
    <center><button type="submit" class="btn btn-success feilds" name = "submit" style="margin-top:10px;">Search</button><center>
  </form></center>
  <div class="col-md-2"></div>
</div>
</div>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
$term = isset($_POST['query'])?$_POST['query']: '';
$term = urlencode($term);
$redirect = "https://www.google.com/search?q=%3A{$term}";;
$search = $_POST['query'];
$var = explode(" ",$search);
for($i=0;$i<count($var);$i++){
  $sql = "SELECT id FROM happy WHERE words = '$var[$i]'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res,MYSQLI_NUM);
  if($row > 0){
    $query = "UPDATE student SET mood='happy' WHERE name = 'Deepraj'";
    if(mysqli_query($conn,$query)){
      echo "done";
    }
  }
}
for($i=0;$i<count($var);$i++){
  $sql = "SELECT id FROM sad WHERE words = '$var[$i]'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res,MYSQLI_NUM);
  if($row > 0){
    $query = "UPDATE student SET mood ='sad' WHERE name ='Deepraj'";
    if(mysqli_query($conn,$query)){
      echo "done";
    }
  }
}
for($i=0;$i<count($var);$i++){
  $sql = "SELECT id FROM nuteral WHERE words = '$var[$i]'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res,MYSQLI_NUM);
  if($row > 0){
    $query = "UPDATE student SET mood ='nuteral' WHERE name ='Deepraj'";
    if(mysqli_query($conn,$query)){
      echo "done";
    }
  }
}
for($i=0;$i<count($var);$i++){
  $sql = "SELECT id FROM exited WHERE words = '$var[$i]'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res,MYSQLI_NUM);
  if($row > 0){
    $query = "UPDATE student SET mood ='excited' WHERE name ='Deepraj'";
    if(mysqli_query($conn,$query)){
      echo "done";
    }
  }
}
for($i=0;$i<count($var);$i++){
  $sql = "SELECT id FROM bored WHERE words = '$var[$i]'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res,MYSQLI_NUM);
  if($row > 0){
    $query = "UPDATE student SET mood ='bored' WHERE name ='Deepraj'";
    if(mysqli_query($conn,$query)){
      echo "done";
    }
  }
}
header("Location: $redirect");
}

 ?>
  </body>
</html>
