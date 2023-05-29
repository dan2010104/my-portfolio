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

function validateform(){
	var firstname = document.myform.firstname.value;
	var surname = document.myform.surname.value;

	if (firstname=="null" || firstname=="") {
		alert("firstname can't be empty!");
		return false;
	}

}

