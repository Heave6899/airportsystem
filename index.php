<html>
<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();
include 'script.php';
?>
<head>
    <title>Welcome to the Airport System</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<script src="https://unpkg.com/popper.js@1.15.0/dist/umd/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
<body>
<!--nav-->
<section id="nav" class="navbar" style="position: fixed;padding:0%; width: 100%;">
<div class="navbar">
  <span><a href="index.php"><image src="resources/logo.jpg" width="40px;"></a></span>
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#login" onclick="loginsignup()">Login</a>
  <a href="#contact">Contact</a>
</div>
</section>
<section id="home"></section>
<!--/nav-->
<!--login-->
<section id="login" class="login" style="display: none;">
    <div class="login-container">
        hihihihihi
    </div>           
</section>
<!--/login-->
<!--main-->
<section class="main">
    <!--news-->
    <section id="news">
    <table>
    <thead>
        <tr>
            <th>Flight Code</th>
            <th>Arrival</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody id="newsflash">
    </tbody>
    </table>
    </section>
    <!--/news-->
</section>
<!--/main-->
</body>
</html>