<!DOCTYPE HTML>

<html>
	<head>
		<title>IOT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <style>
            nav{
                color: #000;
                font-size: 24px;
                font-weight: bold;
            }
            #banner p{
                font-weight: bold;
                font-size: 20px;
            }
        </style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">IOT</a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="login.php">Login</a>
						<a href="reg.php">Register</a>  
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h1>Welcome to <b>Prowess</b></h1>
                <p>Let's conserve Energy <b>ASAP.</b></p>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">
						
						<article>
							<header>
								<h3>Prowess means<br>Efficiency</h3>
							</header>
							<p>Here at prowess we assimilate the data of your previos bills and Make an esimated Energy consumtiopn from the partocular individual. Notification of excessive usage will be given.</p>
							<footer>
								
							</footer>
						</article>
                        <article>
							<header>
								<h3>What do<br /> We do</h3>
							</header>
							<p>Track <br>Collaborate<br>Comapare</p>
							<footer>
								Estimate
							</footer>
						</article>
						<article>
							<header>
								<h3>Help yourself<br />Calculate by units </h3>
                                
                            </header>
                             <script>
                                 function check()
                                {
                                var a=0,b=0,c=0;
                                var tot = 0;
                                var tot1=0;
                                var tot2=0;
                                var tot3=0;

                                var a = parseFloat(document.getElementById('bill').value);

                                if(a>200)
                                {
                                    tot1 = 200*4;
                                    b = a - 200;
                                    if(b>200)
                                    {
                                    c= b-200;
                                    tot2 = 200*5;
                                    tot3 = c*6;
                                    tot = tot1 + tot2 + tot3+130;
                                    document.getElementById("new1").innerHTML ="Amount to be paid is : "+tot;
                                    }
                                    else
                                    {
                                    tot1 = 200*4;
                                    tot2 = b*5;
                                    tot3 = c*6;
                                    tot = tot1 + tot2 + tot3+130;
                                    document.getElementById("new1").innerHTML ="Amount to be paid is : "+tot;
                                    }
                                }
                                else
                                {
                                    tot = (a*4)+130;
                                    
                                    document.getElementById("new1").innerHTML ="Amount to be paid is : "+tot;

                                }
                                }
                            </script>
                            Enter NO of units Consumed : <br>
                            <input name="" type="text" value=""  id="bill" /><br>
                                 <div id="new1" >
                                </div>
							<footer><br>
								<a onclick="check()" class="button special">Calculate</a>
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<header>
						<h2>Team of 
                        <BR>ASAP</h2>
					</header>
					<div class="flex flex-4">
						<div class="box person">
							<div class="image round">
								<img src="images/pic03.jpg" alt="Person 1" />
							</div>
							<h3>Ashokkumar</h3>
							<p>Sharma</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic04.jpg" alt="Person 2" />
							</div>
							<h3>Shivam </h3>
							<p>Shukla</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic05.jpg" alt="Person 3" />
							</div>
							<h3>Agrim</h3>
							<p>Singh</p>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/pic06.jpg" alt="Person 4" />
							</div>
							<h3>Prakash</h3>
							<p>Shukla</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper special">
				<div class="inner">
					<header class="align-center">
						<h2>FAQ's</h2>
						<p></p>
					</header>
					<div class="flex flex-2">
						<article>
							<div class="image fit">
								<img src="images/pic01.jpg" alt="Pic 01" />
							</div>
							<header>
								<h3> What kind of a difference does replacing a regular light bulb with an energy-saving bulb really make? </h3>
							</header>
							<p>Replacing one incandescent light bulb with an energy-saving compact fluorescent bulb prevents 1,000 pounds of carbon dioxide from being emitted to the atmosphere from power plants, and saves $67 dollars in energy costs over the bulb's lifetime.</p>
							
						</article>
						<article>
							<div class="image fit">
								<img src="images/pic02.jpg" alt="Pic 02" height=270/>
							</div>
							<header>
								<h3>How about my air-conditioning?</h3>
							</header>
							<p>Save energy by turning your AC off when you are not at home. If the compressor on your air conditioning unit runs for 20 minutes each hour to keep your house at 70º,for 8 hours every day. You'll pay for the electricity to power that compressor and keepthe  cool while nobody is there! The higher the temperature setting, the less time your compressor will run. You may also want to consider turning off the air or raising the thermostat when you will be away all day.</p>
							<footer>
								
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
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

	</body>
</html>