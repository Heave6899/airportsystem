<html>
<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();
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
<section id="nav">
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed navbar-top-fixed">
  <a class="navbar-brand" href="#home">AMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#login" onclick="loginsignup();">Login/SignUp</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Website" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</section>
<!--/nav-->
<section id="login" style = "display: none;">
    <div class="container login">
    <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1" id="log">
                    <h3>Login</h3>
                    <form action="#" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd" onclick="signup()">Don't have an account? SignUp</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2" id="signup">
                    <h3>SignUp</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd" value="Login" onclick="logon();">Already have an account? Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>
<section id="flightticket">
<?php
$sql = "SELECT * FROM `city`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["CNAME"]. " ". $row["STATE"]. " " . $row["COUNTRY"] . "<br>";
    }
} else {
    echo "0 results";
}
?>
</section>
</body>
</html>