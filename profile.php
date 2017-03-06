<?php
error_reporting(E_ALL ^ E_NOTICE);
    session_start(); 
require('./connect.php');
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$res = $_SESSION['res'];
$area = $_SESSION['area'];
$room = $_SESSION['room'];
$addr = "$room".","." $res".","." $area";
$id = $_SESSION['id'];

    $sql1 = "SELECT * FROM bill_stats WHERE id='$id'";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $status = $row["m1"];
                     
                }
        
        }
            if($status == NULL){        
                $m1 = (rand(1000, 3000)) / 10;
                $m2 = (rand(1000, 3000)) / 10;
                $m3 = (rand(1000, 3000)) / 10;
                $m4 = (rand(1000, 3000)) / 10;
                $d1 = (rand(100, 150)) / 10;
                $d2 = (rand(100, 150)) / 10;
                $d3 = (rand(100, 150)) / 10;
                $d4 = (rand(100, 150)) / 10;
                $d5 = (rand(100, 150)) / 10;
                $d6 = (rand(100, 150)) / 10;
                $d7 = (rand(100, 150)) / 10;
                $m5 = ($d1 + $d2 + $d3 + $d4 + $d5 + $d6 + $d7);
                
                    
        $sql12 = "UPDATE `bill_stats` SET 
  `m1`= '$m1', 
  `m2`= '$m2', 
  `m3`= '$m3',  
  `m4`= '$m4',
  `m5`= '$m5',
  `d1`= '$d1', 
  `d2`= '$d2', 
  `d3`= '$d3',  
  `d4`= '$d4',
  `d5`= '$d5', 
  `d6`= '$d6',
  `d7`= '$d7'
WHERE `id`='$id'";
            
        if ($conn->query($sql12) === TRUE) {
                    $success = 1;
               } else {
                    echo "Error: " . $sql12 . "<br>" . $conn->error;
                }
            }
        else{
            //do nothing
            
        }

        $sqlnew = "SELECT * FROM bill_stats WHERE id='$id'";
        $result = mysqli_query($conn, $sqlnew);
        if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $month1 = $row["m1"];
                    $month2 = $row["m2"];
                    $month3 = $row["m3"];
                    $month4 = $row["m4"];
                    $month5 = $row["m5"];
                    $day1 = $row["d1"];
                    $day2 = $row["d2"];
                    $day3 = $row["d3"];
                    $day4 = $row["d4"];
                    $day5 = $row["d5"];
                    $day6 = $row["d6"];
                    $day7 = $row["d7"];
                    $x=($month2+$month3+$month4+$month5)/4;
                    $x1=$x/30; 
                }
        
        }
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>IOT - Profile</title>
		<meta charset="utf-8" />
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <style>
            h2{
                font-weight: bold;
                font-size: 30px;
                padding-top: 55px;
                padding-bottom: 2px;
                padding-left: 80px;
            }
            h1{
                padding-left: 80px;
                font-size: 15px;
                font-weight: bold;
            }
            p{
                font-size: 20px;
                font-weight: 500;
                padding-left: 100px;
                color: #000;
            }
            .tab{
                padding-bottom: 50px;
                padding-left: 90px;
            }
            h3{
                padding-left: 80px;
                font-weight: bold;
            }
            #container, #container1 {
                min-width: 310px;
                max-width: 800px;
                height: 400px;
                margin: 0 auto;
                }
            #container1 {
                min-width: 310px;
                width: 800px;
                height: 400px;
                margin: 0 auto;
                }
            #container2 {
                 min-width: 310px;
                width: 800px;
                height: 400px;
                margin: 0 auto;
                }
            table{
                font-size: 15px;
                font-weight: bold;
                text-align: center;
            }
            thead th{
                text-align: center;
            }
        </style>
        <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Prowess</a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="login.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
                
        <section>
             
               <h2><?php echo $name; ?></h2>
               <h1><?php echo $addr; ?></h1>
                <hr />
                
              <h1 style="color: red;"><?php echo "Monthly Threshold -". $x." Units"?></h1>
            <h1 style="color: red;"> <?php echo "Weekly Threshold - ". $x1." Units"?></h1>
            <p>Bill Stats</p>
 <div class="tab">
     <a href="javascript:void(0)" class="tablinks button special" onclick="openCity(event, 'Monthly')">Monthly</a>
  <a href="javascript:void(0)" class="tablinks button special" onclick="openCity(event, 'Weekly')">Weekly</a>
     <a href="javascript:void(0)" class="tablinks button special" onclick="openCity(event, 'Apply')">Appliances</a>
  
  </div>
            <div id="Monthly" class="tabcontent">
                
              <h3><?php
                    function caBill($a)
                                {
                                $b=0;
                                $c=0;
                                $tot = 0;
                                $tot1=0;
                                $tot2=0;
                                $tot3=0;
                                if($a>200)
                                {
                                    $tot1 = 200*4;
                                    $b = $a - 200;
                                    if($b>200)
                                    {
                                    $c= $b-200;
                                    $tot2 = 200*5;
                                    $tot3 = c*6;
                                    $tot = $tot1 + $tot2 + $tot3+130;
                                    echo $tot;
                                        return $tot;
                                    }
                                    else
                                    {
                                    $tot1 = 200*4;
                                    $tot2 = $b*5;
                                    $tot3 = $c*6;
                                    $tot = $tot1 + $tot2 + $tot3+130;
                                    echo $tot;
                                        return $tot;
                                    }
                                }
                                else
                                {
                                    $tot = ($a*4)+130;
                                    echo $tot;
                                    return $tot;

                                }
                                }
                  function colIt($a,$x){
                    
                      if($a >= $x){
                          $a = '<span style="color: red">'.$a.' Threshold reached.</span>';
                            $to = $email;
                            $subject = "Prowess - Warning";
                            $headers = 'From : asap@prowess.in';
                            $message = "Your threshold has been reached. Please optimise your use.";
                            mail($to, $subject, $message, $headers);
                      }
                      echo $a;
                  }
                        echo " - FEB".colIt($month5,$x)." Ongoing "."<span style='color: green'>Estimated bill - </span>".caBill($month5)." <span style='color: green'>Untill now</span>" ."<br/>";
                        echo " - JAN ".colIt($month4,$x)."<span style='color: green'>Estimated bill - </span>".caBill($month4) ."<br/>";
                        echo " - DEC ".colIt($month3,$x)."<span style='color: green'>Estimated bill - </span>".caBill($month3) ."<br/>";
                        echo " - NOV ".colIt($month2,$x)."<span style='color: green'>Estimated bill - </span>".caBill($month2) ."<br/>";
                        echo " - OCT ".colIt($month1,$x)."<span style='color: green'>Estimated bill - </span>".caBill($month1) ."<br/>";
                        
                  ?></h3>
              <div id="container"></div>
                
            </div>
            <div id="Weekly" class="tabcontent">
              <h3><?php
                  function colIta($a, $b , $x1){
                      if($a >= $x1){
                          $a = '<span style="color: red">'.$b.' Threshold reached.</span>';
                      }
                      echo $a;
                  }
                        echo " - Day1 ".colIta($day7, $day7, $x1)." Ongoing"."<br />";
                        echo " - Day2 ".colIta($day6, $day6,$x1)."<br />";
                        echo " - Day3 ".colIta($day5, $day5,$x1)."<br />";
                        echo " - Day4 ".colIta($day4, $day4,$x1)."<br />";
                        echo " - Day5 ".colIta($day3, $day3,$x1)."<br />";
                        echo " - Day6 ".colIta($day2, $day2,$x1)."<br />";
                        echo " - Day7 ".colIta($day1, $day1,$x1)."<br />";
                        
                  ?></h3>
                <div id="container1"></div>
            </div>
            <div id="Apply" class="tabcontent">
                <div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>Appliance</th>
												<th>Unit Consumed</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Air-Condition</td>
												<td><?php $avg = ($month1 + month2 + $month3 + $month4 + $month5) / 5; echo $avg;?></td>
											</tr>
											<tr>
												<td>Refrigerator </td>
												<td><?php $avg = ($month1 + month2 + $month3 + $month4 + $month5) / 3; echo $avg;?></td>
											</tr>
											<tr>
												<td>T.V </td>
												<td><?php $avg = ($month1 + month2 + $month3 + $month4 + $month5) / 4.5; echo $avg;?></td>
											</tr>
											<tr>
												<td>Light, fans </td>
												<td><?php $avg = ($month1 + month2 + $month3 + $month4 + $month5) / 4; echo $avg;?></td>
											</tr>
											<tr>
												<td>Geyser </td>
												<td><?php $avg = ($month1 + month2 + $month3 + $month4 + $month5) / 7; echo $avg;?></td>
											</tr>
										</tbody>
									</table>
								</div>
                <div id="container2"></div>
            </div>

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
            <script type="text/javascript">
                $('#Weekly').css('display', 'none');
                $('#Apply').css('display', 'none');
               function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;

    
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

    

                    document.getElementById(cityName).style.display = "block";
                    
}
            </script>
    <script type="text/javascript">
        var m1 = <?php echo $month1 ?>;
         var m2 = <?php echo $month2 ?>;
          var m3 = <?php echo $month3 ?>;
           var m4 = <?php echo $month4 ?>;
            var m5 = <?php echo $month5 ?>;
            Highcharts.chart('container', {

    title: {
        text: 'Monthly Electricity Consumption'
    },

    subtitle: {
        text: 'Last 5 Months'
    },

    yAxis: {
        title: {
            text: 'Units of Energy consumed'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            pointStart: 1
        }
    },

    series: [{
        name: 'Units Price',
        data: [m1, m2, m3, m4, m5]
    }]

});
    
    </script>
    <script type="text/javascript">
        var d1 = <?php echo $day1 ?>;
         var d2 = <?php echo $day2 ?>;
          var d3 = <?php echo $day3 ?>;
           var d4 = <?php echo $day4 ?>;
            var d5 = <?php echo $day5 ?>;
            var d6 = <?php echo $day6 ?>;
            var d7 = <?php echo $day7 ?>;
            Highcharts.chart('container1', {

    title: {
        text: 'Weekly Electricity Consumption'
    },

    yAxis: {
        title: {
            text: 'Units of Energy consumed per week'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            pointStart: 1
        }
    },

    series: [{
        name: 'Units Price',
        data: [d1, d2, d3, d4, d5, d6, d7]
    }]

});
    
    </script>
    <script type="text/javascript">
        var m1 = <?php echo $month1 ?>;
         var m2 = <?php echo $month2 ?>;
          var m3 = <?php echo $month3 ?>;
           var m4 = <?php echo $month4 ?>;
            var m5 = <?php echo $month5 ?>;
            var ac1 = m1/5;var ac2 = m2/5;var ac3 = m3/5;var ac4 = m4/5;var ac5 = m5/5;
        var ref1 = m1/3;var ref2 = m2/3;var ref3 = m3/3;var ref4 = m4/3;var ref5 = m5/3;
        var tv1 = m1/4.5;var tv2 = m2/4.5;var tv3 = m3/4.5;var tv4 = m4/4.5;var tv5 = m5/4.5;
        var lf1 = m1/4;var lf2 = m2/4;var lf3 = m3/4;var lf4 = m4/4;var lf5 = m5/4;
        var ge1 = m1/7;var ge2 = m2/7;var ge3 = m3/7;var ge4 = m4/7;var ge5 = m5/7;
            Highcharts.chart('container2', {

    title: {
        text: 'Units Consumed By Particular Appliances'
    },

    yAxis: {
        title: {
            text: 'Units Consumed'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            pointStart: 1
        }
    },

    series: [{
        name: 'Air-Condition',
        data: [ac1, ac2, ac3, ac4, ac5]
    }, {
        name: 'Refrigrator',
        data: [ref1, ref2, ref3, ref4, ref5]
    }, {
        name: 'TV',
        data: [tv1, tv2, tv3, tv4, tv5]
    }, {
        name: 'Lights, fans',
        data: [lf1, lf2, lf3, lf4, lf5]
    }, {
        name: 'Geyser',
        data: [ge1, ge2, ge3, ge4, ge5]
    }]

});
    
    </script>
	</body>
</html>