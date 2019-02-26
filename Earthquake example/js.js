
var apiapi= document.getElementById("api");

$.ajax({
  type: "GET",
  url: "http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=b59f646ae028db6fa245febc6e0f4c04",
  dataType: "json",
  data: { "state": $("#state").val() },
  success: function(data, status) {
     console.log(data);
  },
  error: function(err) {
    console.log(err)
  },
  complete: function() {
    apiapi.innerHTML= data;
  }
});