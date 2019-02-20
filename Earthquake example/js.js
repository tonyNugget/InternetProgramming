// Create a request variable and assign a new XMLHttpRequest object to it.
var request = new XMLHttpRequest();
var apiapi= document.getElementById("api");

// Open a new connection, using the GET request on the URL endpoint
request.open('GET', 'https://ghibliapi.herokuapp.com/films', true);

request.onload = function () {
apiapi.innerHTML = request;
  }


// Send request
request.send();