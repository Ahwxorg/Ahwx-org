function randomNumber(min, max) { 
  return Math.floor(Math.random() * (max - min) + min);
} 

path = 'https://ahwx.org/assets/img/'
var num = randomNumber(1, 180);
var img = path + num + '.jpg';

document.body.style.backgroundImage = 'url(' + img + ')';
