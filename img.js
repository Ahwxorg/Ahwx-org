function randomNumber(min, max) { 
    return Math.floor(Math.random() * (max - min) + min);
} 

function getRandomImage() {
    path = 'https://ahwx.org/assets/img/'
    var num = randomNumber(1, 180);
    var img = path + num + '.jpg';
    return img;
}

document.addEventListener('DOMContentLoaded', (event) => {
    var gal = document.getElementById('imgs');
    for(var i = 0; i < 4; i++){
	var img = document.createElement("img");
	document.createElement("br");
	img.src = getRandomImage();
	gal.appendChild(img);
    }
});

