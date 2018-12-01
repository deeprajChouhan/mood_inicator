<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teacher's</title>

  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style media="screen">

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #2e2e2e;
  opacity:1;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
.sidenav {padding-top: 15px;}
.sidenav a {font-size: 18px;}
}
</style>
</head>
  <body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "25%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
    <div class="col-md-12 col-lg-12 jumbotron" style="padding-top:20%;"><center>
        <?php
            include 'connection.php';
            $sql = "SELECT * FROM student";
            $res = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($res)) {
                echo "<h1>".$row['name']."</h1>";
              }?>

              <span style="font-family:font1;">
          <?php
          $sql = "SELECT * FROM student";
          $res = mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_array($res)) {
          echo "<h3>Current Mood</h3><h3>".$row['mood']."</h3>";
          }
          ?>
        </span></center>
    </div>
  </body>
</html>
