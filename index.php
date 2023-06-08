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
<body onload="displayGreeting(), changeimg(), setUp()">
	<marquee scrollamount="10"direction=" right"behavior="alternate"> <h1 id="greeting"></h1></marquee>
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
	<section id="introduction">
		<div class="container">
			<article id="main">
				<h3 class="page-title"><center>About Daniel wyson</center></h3>
				<img src="DANIEL.jpg" width="150px" height="230px" align="left" hspace="12">
				<p>Daniel Wyson is a student at Mzuzu university doing bechelor of education in information and communication technology and i am in second year. Daniel wyson originated from zomba district and was born in 2000 from a family of six children. Daniel started school at nakhaka nursery and then he continue his primary at fery and then i was transferred to st theresa primary school, this is where i finish my primary school. Therefore i was selected to do my secondary education at Liwonde secondary school where did my form 1 up to form 4 after that i was select to continue my tertiry education at Mzuzu university in 2022.</p>
			</article>
				<div class="experience">
					<h3><center>skills and experience</center></h3>
					<p>i'm expert in web development with the following languages; hypertext markup langauge(HTML), cascading style sheet(CSS), javascript, PHP, JAVA as well as PYTHON</p>
				</div>
		</div>
			<section id="main">
				
					<div class="container">
						<div class="project">
							<h3><b>SLIDESHOW OF MY FEATURED<br>PROJECT</b></h3><br><br><br>
				<img name = "slide" width="500px" height="200px"><br><br><br>

				<a href="PROJECT PAGE.html"><button><h3><i>see more...</i></h3></button></a>
			</div>
						<div class="skills">
							<h1> MY SKILLS, TOOLS THAT I'M CURRENT USING AND TECHNOLOGIES</h1>
							<h3>WEDSITES PROGRAMMING</h3>
							<P>I have proffession skills in wed design and wed development by using these languages; html, css ' javascript as well as php language</P>
							<img src="UMSgb.gif" width="300px">
							<h3>APPLICATON DEVELOPMENT</h3>
							<P>i have proffession skills in application development by using these language; java and python</P><br>
							<a href="skills.html"><button>see more....</button></a>
						</div>
					</section>
	<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "contact_details";

	//create connection
	$conn = mysqli_connect($serverName, $userName, $password, $dbName);
	if (!$conn) {
		die("connection failed:" .mysqli_connect_error());
	}

	
	
	//create table
	$sql = "SELECT*FROM `client`;";
	$result = $conn->query( $sql);
	if ($result->num_rows>0){
		while ($row = $result->fetch_assoc()) {
			echo "ID: " .$row["ID"], "-FIRSTNAME" .$row["FIRSTNAME"], "|SURNAME" .$row["SURNAME"], "|GENDER" .$row["GENDER"], "|EMAIL" .$row["EMAIL"], "|CONTACT" .$row["CONTACT"], "|MESSAGE" .$row["MESSAGE"]."<br>";

		}
	} else {
		echo "0 results";
	}
	



	?>
						<section id="form1">
						<div class="contact"> 
						<form method="POST" action="form-handler" onsubmit="return checkform(this);">
							<h3><b>Contact form</b></h3>
						<div>
							<label for="Firstname">Firstname:</label>
	                        <input type="text" name="Firstname" id="Firstname"><br><br>
	                        <div class="error"></div>
	                    </div>
	                    <div>
                            <label for="Surname">Surname:</label>
	                        <input type="text" name="Surname" id="Surname">
	                        <div class="error"></div>
	                    </div>
	                    <div>
	                       <p>Gender:</P><br> 
	                       	<input type="radio" name="Gender" value="Male"><label>Male</label>
	                       	<input type="radio" name="Gender" value="Female"><label>Female</label>
	                       	<input type="radio" name="Gender" value="Other"><label>Other</label></p>
	                    </div>
	                    <div>
							<label>Email</label>
							<input type="text" name="Email" placeholder="example@gmail.com" id="Email" ><br><br>
							<div class="error"></div>
						</div>
						<div>
							<label>Contact</label>
							<input type="tel" name="number" id="Contact"><br><br>
							<div class="error"></div>
						</div>
						<div>
							<label>Message</label><br><br>
							<textarea rows="5" cols="50" placeholder="--type Message here--"></textarea><br><br>
						</div>
							<button type="Submit">Submit</button>
						</div>
						</form>
					</div>	
				</section>
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