<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

    
require('./connect.php');
if($_POST['sub']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $pass = $_POST['pass'];
    $con_pass = $_POST['con-pass'];
    $area_no = $_POST['area'];
    $residence_no = $_POST['soc1'];
     if($area_no == '1'){
            $area = 'Andheri';
        }
    else if($area_no == '2'){
            $area = 'Borivali';
        }
    else if($area_no == '3'){
            $area = 'Churchgate';
        }
    else if($area_no == '4'){
            $area = 'Dadar';
        }
    else if($area_no == '5'){
            $area = 'Goregaon';
        }
    else if($area_no == '6'){
            $area = 'Kandivali';
        }
    else if($area_no == '7'){
            $area = 'Malad';
        }
    else if($area_no == '8'){
            $area = 'Mumbai Central';
        }
    else if($area_no == '9'){
            $area = 'Ram Mandir';
        }
    else if($area_no == '10'){
            $area = 'Santacruz';
        }
    
    if($residence_no == '11'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '12'){
            $residence = 'Goodness Society';
        }
    else if($residence_no == '13'){
            $residence = 'Sai Dham Chs Ltd';
        }
    else if($residence_no == '14'){
            $residence = 'Reg Society';
        }
    else if($residence_no == '15'){
            $residence = 'Suhas Society';
        }
    else if($residence_no == '21'){
           $residence = 'Good Society';
        }
    else if($residence_no == '22'){
            $residence = 'Universal Pride';
        }
    else if($residence_no == '23'){
            $residence = 'Neighbourhood Society';
        }
    else if($residence_no == '24'){
           $residence = 'Privet Society';
        }
    else if($residence_no == '25'){
            $residence = 'Brahmand Society';
        }
    else if($residence_no == '31'){
            $residence = 'Gokul Society';
        }
    else if($residence_no == '32'){
            $residence = 'Amber Society';
        }
    else if($residence_no == '33'){
            $residence = 'Chetas Society';
        }
    else if($residence_no == '34'){
            $residence = 'Rumor Heights';
        }
    else if($residence_no == '35'){
            $residence = 'Sheetal Heights';
        }
    else if($residence_no == '41'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '42'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '43'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '44'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '45'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '51'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '52'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '53'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '54'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '55'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '61'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '62'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '63'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '64'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '65'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '71'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '72'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '73'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '74'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '75'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '81'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '82'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '83'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '84'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '85'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '91'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '92'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '93'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '94'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '95'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '101'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '102'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '103'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '104'){
            $residence = 'Whispering Heights';
        }
    else if($residence_no == '105'){
            $residence = 'Whispering Heights';
        }
    
    
    
    
    $room = $_POST['room'];
    
    if($con_pass == $pass){
        if($name == '' || $email == '' || $contact == '' || $pass == '' || $area_no == '' || $residence_no == '' || $room == ''){
            $errormsg = 1;
        }
        else{
            $pass = md5($pass);
            $sql = "INSERT INTO user_info (name, email, contact, password, area, residence, room, id)
            VALUES('$name', '$email','$contact', '$pass', '$area','$residence', '$room', NULL)";

                if ($conn->query($sql) === TRUE) {
                    $success = 1;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            
           $sql2 = "INSERT INTO bill_stats (id, m1, m2, m3, m4, m5, d1, d2, d3, d4, d5, d6, d7)
            VALUES(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";

                if ($conn->query($sql2) === TRUE) {
                    $success = 1;
                    echo '<script type="text/javascript">alert("Success!!You will be redirected to login page.");</script>';
                    echo '<script type="text/javascript">window.location.replace("login.php");</script>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 
        }
    }
    else{
        $trig = 1;
    }
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>IOT - Register</title>
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
                        <h2>Register</h2>
                    </header>
                    <form method="post" action="reg.php">
                    <div class="6u 12u$(xsmall) new1">
				        <input type="text" name="name" id="name" value="" placeholder="Name" />
                        <input type="email" name="email" id="email" value="" placeholder="email" />
                        <input type="text" name="contact" id="contact" value="" placeholder="Contact No" />
                         <select name="area" id="area" value="" onchange="getValue(this)">
                            <option value="">-Choose your area-</option>
                            <option value="1">Andheri</option>
                            <option value="2">Borivali</option>
                            <option value="3">Churchgate</option>
                            <option value="4">Dadar</option>
                            <option value="5">Goregaon</option>
                            <option value="6">Kandivali</option>
                            <option value="7">Malad</option>
                            <option value="8">Mumbai Central</option>
                            <option value="9">Ram Mandir</option>
                            <option value="10">Santacruz</option>
                        </select>
                        <select name="soc1" id="soc1" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="11">Whisperings Heights </option>
                            <option value="12">Goodness Society</option>
                            <option value="13"> Sai Dham Chs Ltd </option>
                            <option value="14">Reg Society</option>
                            <option value="15"> Suhas Society </option>
                        </select>

                        <!--select name="soc1" id="soc2" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="21">Good Society </option>
                            <option value="22">Universal Pride</option>
                            <option value="23">Neighbourhood Society </option>
                            <option value="24">Privet Society</option>
                            <option value="25">Brahmand Society</option>
                        </select>
                        <select name="soc1" id="soc3" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="31">Gokul Society</option>
                            <option value="32">Amber Society</option>
                            <option value="33">Chetas Society</option>
                            <option value="34">Rumor Heights</option>
                            <option value="35">Sheetal Heights</option>
                        </select>
                        <select name="soc1" id="soc4" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="41">Poonam Cluster</option>
                            <option value="42">Skyline</option>
                            <option value="43">Panchkutir Society</option>
                            <option value="44">Aadarsh Society</option>
                            <option value="45">Raghu Plaza</option>
                        </select>
                        <select name="soc1" id="soc5" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="51">Anjali Apt</option>
                            <option value="52">Shantiwan Society</option>
                            <option value="53">LOdha Aqua</option>
                            <option value="54">Rashmi Tower</option>
                            <option value="55">Queens Apt</option>
                        </select>
                        <select name="soc1" id="soc6" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="61">Sheetal Sarovar</option>
                            <option value="62">Safalya Society</option>
                            <option value="63">Khandare Heights</option>
                            <option value="64">Megha Lights Apt</option>
                            <option value="65">Green Society</option>
                        </select>
                        <select name="soc1" id="soc7" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="71">Abhilash Society</option>
                            <option value="72">Sawant Apt</option>
                            <option value="73">Singhs Apt</option>
                            <option value="74">Jhangir Apt</option>
                            <option value="75">Awesome Heights</option>
                        </select>
                        <select name="soc1" id="soc8" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="81">ASAP Tower</option>
                            <option value="82">Vindya Society</option>
                            <option value="83">Mallika Society</option>
                            <option value="84">Jheel Paradise</option>
                            <option value="85">Priyanka Society</option>
                        </select>
                        <select name="soc1" id="soc9" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="91">Mathura Complex</option>
                            <option value="92">Sharma Tower</option>
                            <option value="93">Apex Tower</option>
                            <option value="94">Thakur Complex</option>
                            <option value="95">Andhera Society</option>
                        </select>
                        <select name="soc1" id="soc10" value="">
                            <option value="">-Choose your residence-</option>
                            <option value="101">Maha Society</option>
                            <option value="102">Dhruvi Society</option>
                            <option value="103">Khanjan Tower</option>
                            <option value="104">Shonali Society</option>
                            <option value="105">Shukla Bros Apts</option>
                        </select-->
                        <input type="text" name="room" id="room" value="" placeholder="Room no." />
                        <input type="password" name="pass" id="pass" value="" placeholder="Password" />
                        <input type="password" name="con-pass" id="con-pass" value="" placeholder="Confirm Password" />
                        <input type="submit" name="sub" class="button special" value="Register">
                        <div class="res">
                            <?php
                            if($_POST['sub']){
                                if($trig == 1){
                                    echo "Please enter the correct password twice";
                                }
                                else if($errormsg == 1){
                                    echo "Please fill out all credentials";
                                }
                            }
                            ?>
                        </div>
                        </form>
                    </div>
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