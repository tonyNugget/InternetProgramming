//Anthony Zerka
//CST 336 - Project 2
//JavaScript File

var text = document.getElementById("data");
var enterButton = document.querySelector('#enter');

var manipulation = document.querySelector('#manip');

var checked = document.getElementById('ch');

var cls = document.getElementById('clear');

var options = document.getElementById('list');

checked.addEventListener('change', (event) => {
    if(event.target.checked){
        document.getElementById('manip').style.border = "thick solid black";
    }
    else{
        if(document.getElementById('data').value == ''){
            document.getElementById('manip').style.fontSize = "large";
            manipulation.innerHTML = 'Nothing was entered...';
        }
       document.getElementById('manip').style.border = "none";
       //manipulation.innerHTML = document.getElementById('data').value;
        
    }
})


enterButton.onclick = function(){
   if(document.getElementById('data').value == ''){
        document.getElementById('manip').style.fontSize = "large";
        manipulation.innerHTML = 'Nothing was entered...';
   }
   else{
        document.getElementById('manip').style.fontSize = "xx-large"; 
        manipulation.innerHTML = document.getElementById('data').value;
   } 
   
   if(document.getElementById('list') == "tnr"){
       alert("basedgod");
   }
};

cls.onclick = function(){
   manipulation.innerHTML = '';
};


options.addEventListener("change", function(){
    if(options.value === "tnr"){
        document.getElementById('manip').style.fontFamily = "Times New Roman, times, serif";
    }
    else if(options.value === "arial"){
        document.getElementById('manip').style.fontFamily = "arial";
    }
     else if(options.value === "courier"){
        document.getElementById('manip').style.fontFamily = "courier";
    }
})