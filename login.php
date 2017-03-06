<?php
session_start();

error_reporting(E_ALL ^ E_NOTICE);
//require 'profile.php';
require('./connect.php');
if($_POST['sub']){
    $email = $_POST['email'];
    
    $pass = $_POST['pass'];
    
        if($email == '' || $pass == ''){
            $errormsg = 1;
        }
        else{
            
            $pass = md5($pass);
             $sql1 = "SELECT * FROM user_info WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $email_check = $row["email"];
                    $username = $row["name"];
                   $pass_check = $row["password"];
                    $area = $row["area"];
                    $room = $row["room"];
                    $res = $row["residence"];
                    $id = $row["id"];
                    
                    $_SESSION['name'] = $username;
                    $_SESSION['room'] = $room;
                    $_SESSION['res'] = $res;
                    $_SESSION['area'] = $area;
                    $_SESSION['id'] = $id;
                    $_SESSION['email'] = $email_check;
                    
                    
                    
                    
                }
        
        }
            
//            
            if($email_check == $email && $pass_check == $pass){
                echo '<script type="text/javascript">window.location.replace("profile.php");</script>';
            }
            else{
                $errormsg = 2;
            }
        }   
        
    }
    

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>IOT - login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <style>
            h2{
                font-weight: bold;
                font-size: 40px;
                padding-top: 40px;
                padding-bottom: 20px;
            }
            .new1{
                padding-top: 10px;
                padding-bottom: 10px;
            }
           .new1 input{
               margin-top: 20px;
                width: 500px;
               color: #000;
            }
            .new1 select{
                color: #000;
                 width: 500px;
               margin-top: 20px;
            }
        
        </style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Prowess</a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="login.php">Login</a>
						<a href="reg.php">Register</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
                
        <section>
                <center>
                    <header class="align-center">
                        <h2>Login</h2>
                    </header>
                    <form method="post" action="login.php">
                    <div class="6u 12u$(xsmall) new1">
				        
                        <input type="email" name="email" id="email" value="" placeholder="email" />
                        
                        <input type="password" name="pass" id="pass" value="" placeholder="Password" />
                        
                        <input type="submit" name="sub" class="button special" value="Login">
                        <div class="res">
                            <?php
                            if($_POST['sub']){
                                if($errormsg == 2){
                                    echo "User or password is wrong";
                                }
                                else if($errormsg == 1){
                                    echo "Please fill out all credentials";
                                }
                                
                            }
                            ?>
                        </div>
                        
                    </div></form>
                </center>
        
        
        </section>
            <!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; ASAP</a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="assets/js/reg.js"></script>
	</body>
</html>