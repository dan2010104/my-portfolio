<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta lang="eng">
	<meta name="author" content="Daniel Wyson">
	<link rel="stylesheet" type="text/css" href="./style.css">
	<title>Daniel Wyson | Welcome!</title>
	<script type="text/javascript" src="myScript.js">
		
	</script>
</head>
<body onload="move(), take(), sure(), make(), have(), hello(), sharp()">
	<header>
		<div class="container">
			<div id="name">
				<h1><span class="highlight">Daniel</span> wyson</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.html">home</a></li>
					<li><a href="services.html">services</a></li>
					<li><a href="about.html">about</a></li>
				</ul>
			</nav>
		</div>
	</header>
				<div class="container">
					<div class="skill">
						<h1>MY SKILLS, TOOLS THAT I'M CURRENT USING AND TECHNOLOGIES</h1>
						<h3><i> Skills </i></h3>
						<ol start="1">
							<li><b><i>wedsite design and development</i></b></li>
							<p>i'm a proffessional in wedsites design and development with the following languages</p>
							<div class="myprogress">
							<p> <center>HTML</center>
								<div id="bar1">3%</div>
							</p>
							<p><center> CSS</center>
								<div id="bar2">3%</div>
							</p>
							<p><center>SQL</center>
								<div id="bar3">3%</div>
							</p>
							<p><center>PHP</center>
								<div id="bar4">3%</div>
							</p>
							<p><center>JAVASCRIPT</center>
								<div id="bar5">3%</div>
							</p>
							</div>
							<li><b><i>Application design and development</i></b></li>
							<p>i'm also expert in android and desktop application designing and development with the use of the following languages</p>
							<p> <center>JAVA</center>
								<div id="bar6">3%</div>
							</p>
							<p><center>PYTHON</center>
								<div id="bar7">3%</div>
							</p>
						</ol>
					</div>
				</div>		
						<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "skills";

	//create connection
	$conn = mysqli_connect($serverName, $userName, $password, $dbName);
	if (!$conn) {
		die("connection failed:" .mysqli_connect_error());
	}

	echo "SKILLS TABLE AND TOOLS" ."<br>";
	
	//Retrieve data from database

	$sql = "SELECT*FROM `skills_details`;";
	$result = $conn->query( $sql);
	if ($result->num_rows>0){
		while ($row = $result->fetch_assoc()) {
			echo "SKILLS ID: " .$row["SKILLS_ID"], " -SKILLS:" .$row["SKILLS"], " | TOOLS:" .$row["TOOLS"], " | TECHNOLOGY:" .$row["TECHNOLOGY"]."<br>";

		}
	} else {
		echo "0 results";
	}
	
?>	
				<footer>
					<h3>contact me on</h3>
					<img src="EMAIL.png">
					 dwyson0@gmail.com&emsp;&emsp;&emsp;
					 <img src="WHATSAPP.png">
					 0999 181 151&emsp;&emsp;&emsp;
					 <img src="CALL.png">
					 0999 181 151&emsp;&emsp;&emsp;
					 <img src="FACEBOOK.png">
					 Daniel Wyson

					<p>Daniel Wyson, Copyright &copy; 2023</p>
				</footer>
			</div>
		</div>
	</section>
</body>
</html>