//slideshow

var i = 0;
var  images = [];
var time = 3000;

images[0]='HTML.png';
images[1]='CSS.png';
images[2]='JAVASCRIPT.png';
images[3]='PHP.png';
images[4]='JAVA.png';
images[5]='PYTHON.jpeg';


function changeimg(){
	document.slide.src= images[i];

	if (i < images.length -1) {
		i++
	}
	else{
		i = 0;
	}
	setTimeout("changeimg()", time);
}


//greetings

function getGreeting() {
	var date = new Date();
	var hours = date.getHours();
	var greeting;

	if (hours >= 0 && hours < 12) {
		greeting =" Goodmorning!, How are you?";
	}
	else if (hours >= 12 && hours < 18) {
		greeting = " Good Afternoon!, How are you?";
	}
	else {
		greeting = " Good Evening!, How are you?";
	}
	return greeting;
}

function displayGreeting(){
	var greeting = getGreeting();
	document.getElementById("greeting").textContent = greeting;
}

//form validation

function checkform(form){
  if (form.Firstname.value == "") {
  	alert("Firstname cannot be blank!");
  	form.Firstname.focus();
  	return false;
  }
  if (form.Surname.value == "") {
  	alert("Surname cannot be blank!");
  	form.Surname.focus();
  	return false;
  }
  if (form.Email.value == "") {
  	alert("Email cannot be blank!");
  	form.Email.focus();
  	return false;
  }
  if (form.Contact.value == "") {
  	alert("Contact cannot be blank!");
  	form.Contact.focus();
  	return false;
  }
}

//progress bars
var i = 0;

function move(){
	if (i == 0) {
		i = 0;
		var elem = document.getElementById("bar1");
		var width = 3;
		var id = setInterval(frame, 3);
		function frame(){
			if (width >= 100) {
			clearInterval(id);
			i = 0;
		}
			else{
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "%";
			}
		}
	} 
}

var i = 0;

function have(){
	if (i == 0) {
		i = 0;
		var elem = document.getElementById("bar2");
		var width = 3;
		var id = setInterval(frame, 3);
		function frame(){
			if (width >= 100) {
			clearInterval(id);
			i = 0;
		}
			else{
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "%";
			}
		}
	} 
}

var i = 0;

function sure(){
	if (i == 0) {
		i = 0;
		var elem = document.getElementById("bar3");
		var width = 3;
		var id = setInterval(frame, 3);
		function frame(){
			if (width >= 50) {
			clearInterval(id);
			i = 0;
		}
			else{
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "%";
			}
		}
	} 
}

var i = 0;

function make(){
	if (i == 0) {
		i = 0;
		var elem = document.getElementById("bar4");
		var width = 3;
		var id = setInterval(frame, 3);
		function frame(){
			if (width >= 72) {
			clearInterval(id);
			i = 0;
		}
			else{
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "%";
			}
		}
	} 
}

var i = 0;

function take(){
	if (i == 0) {
		i = 0;
		var elem = document.getElementById("bar5");
		var width = 3;
		var id = setInterval(frame, 3);
		function frame(){
			if (width >= 60) {
			clearInterval(id);
			i = 0;
		}
			else{
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "%";
			}
		}
	} 
}


var i = 0;

function hello(){
	if (i == 0) {
		i = 0;
		var elem = document.getElementById("bar6");
		var width = 3;
		var id = setInterval(frame, 3);
		function frame(){
			if (width >= 80) {
			clearInterval(id);
			i = 0;
		}
			else{
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "%";
			}
		}
	} 
}

var i = 0;

function sharp(){
	if (i == 0) {
		i = 0;
		var elem = document.getElementById("bar7");
		var width = 3;
		var id = setInterval(frame, 3);
		function frame(){
			if (width >= 60) {
			clearInterval(id);
			i = 0;
		}
			else{
				width++;
				elem.style.width = width + "%";
				elem.innerHTML = width + "%";
			}
		}
	} 
}

