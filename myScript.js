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

window.onload = changeimg;


