// JavaScript 
//Anthony Zerka
//CST 336


var playButton = document.getElementById("butt");
//playButton.style.display = 'none';
var body = document.querySelector('#img');
var foot = document.querySelector('#foot');
var im1 = document.getElementById("1");
var im2 = document.getElementById("2");
var im3 = document.getElementById("3");

playButton.addEventListener("click", play);

function play() {
    var randomNumber1 = Math.floor(Math.random() * 3) + 1;
    var randomNumber2 = Math.floor(Math.random() * 3) + 1;
    var randomNumber3 = Math.floor(Math.random() * 3) + 1;
    
    if(randomNumber1 === document.getElementById("1")){
        
    }
    document.getElementById("foot").innerHTML += "Moused over!<br>";
   
    
}


