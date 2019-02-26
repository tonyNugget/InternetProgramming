//

//Variables
var zipField = document.getElementById("zip");
var cityField = document.getElementById("city");
var latField = document.getElementById("lat");
var longField = document.getElementById("long");

var zip = document.getElementById("zipData");


        //e2f2dc5942f982298eb20be6899654d2
        //api.openweathermap.org/data/2.5/weather?q=
        $("form.weather button").on("click", function(e) {
            $.ajax({
                type: "get",
                url: "https://api.openweathermap.org/data/2.5/weather",
                dataType: "json",
                data: {
                    "q": $("#location").val(),
                    "appid": "e2f2dc5942f982298eb20be6899654d2"
                },
                success: function(data) {
                    $("#city").html(`${data.name}, ${data.sys.country}`);
                    $("#weather img").attr("src", `http://openweathermap.org/img/w/${data.weather[0].icon}.png`)
                    console.log(data);

                },
                complete: function(data, status) { //optional, used for debugging purposes
                    //console.log(status);
                }
            });
        });