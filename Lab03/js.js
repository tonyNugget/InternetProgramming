

var b1 = document.getElementById('b1check');
var b2 = document.getElementById('b2check');
var b3 = document.getElementById('b3check');
var b4 = document.getElementById('b4check');
var b5 = document.getElementById('b5check');
var b6 = document.getElementById('b6check');

var q1 = document.getElementsByName('q1');
var q2 = document.getElementsByName('q2');
var q3 = document.getElementsByName('q3');
var q4 = document.getElementsByName('q4');
var q5 = document.getElementsByName('q5');
var q6 = document.getElementsByName('q6');

var verify1 = document.querySelector('#corr1');
var verify2 = document.querySelector('#corr2');
var verify3 = document.querySelector('#corr3');
var verify4 = document.querySelector('#corr4');
var verify5 = document.querySelector('#corr5');
var verify6 = document.querySelector('#corr6');

var score = 0;

var scoreDis = document.getElementById('score');

var checkIm = "check.png";
var x = "x.png";

function checkq1() {

    for (var i = 0, length = q1.length; i < length; i++) {
        if (q1[i].checked && q1[i].value === "1.1.1.1") {
            verify1.innerHTML = "<img src=" + checkIm + " width=20px>";
            if(score < 6){
                score++;
            }
            displayScore()
            break;
        }
        else{
            displayScore()
            verify1.innerHTML = "<img src=" + x + " width=20px>";
        }
    }
}

function checkq2() {

    for (var i = 0, length = q2.length; i < length; i++) {
        if (q2[i].checked && q2[i].value === "129.55.66.77") {
            verify2.innerHTML = "<img src=" + checkIm + " width=20px>";
            if(score < 6){
                score++;
            };
            displayScore()
            break;
        }
        else{
            displayScore()
            verify2.innerHTML = "<img src=" + x + " width=20px>";
        }
    }
}
function checkq3() {

    for (var i = 0, length = q3.length; i < length; i++) {
        if (q3[i].checked && q3[i].value === "address resolution protocol") {
            verify3.innerHTML = "<img src=" + checkIm + " width=20px>";
            if(score < 6){
                score++;
            }
            displayScore()
            break;
        }
        else{
            displayScore()
            verify3.innerHTML = "<img src=" + x + " width=20px>";
        }
    }
}
function checkq4() {

    for (var i = 0, length = q4.length; i < length; i++) {
        if (q4[i].checked && q4[i].value === "1") {
            verify4.innerHTML = "<img src=" + checkIm + " width=20px>";
            if(score < 6){
                score++;
            }
            displayScore()
            break;
        }
        else{
            displayScore()
            verify4.innerHTML = "<img src=" + x + " width=20px>";
        }
    }
}
function checkq5() {

    for (var i = 0, length = q5.length; i < length; i++) {
        if (q5[i].checked && q5[i].value === "no") {
            verify5.innerHTML = "<img src=" + checkIm + " width=20px>";
            displayScore()
            if(score < 6){
                score++;
            }
            break;
        }
        else{
            displayScore()
            verify5.innerHTML = "<img src=" + x + " width=20px>";
        }
    }
}
function checkq6() {

    for (var i = 0, length = q6.length; i < length; i++) {
        if (q6[i].checked && q6[i].value === "92") {
            verify6.innerHTML = "<img src=" + checkIm + " width=20px>";
            if(score < 6){
                score++;
            }
            displayScore()
            break;
        }
        else{
            displayScore()
            verify6.innerHTML = "<img src=" + x + " width=20px>";
        }
    }
}

function displayScore(){
    final = (score/6) * 100;
    scoreDis.innerHTML = "Score : " + score + " out of 6. You got " + final + "% correct!";
    
}

function calc(){
    if (score === 6){
        alert("Great job! you recieved a score higher than 90%! youre score was: " + score);
    }
    else{
        alert("Good try, your score is : " + score + " and your percentage was : " + final);
    }
}