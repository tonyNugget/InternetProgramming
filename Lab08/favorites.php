<html>

    <head>
        <title>Lab08</title>
         <meta charset="UTF-8">
         <script src="./JQuery.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="./styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      
        <div>
            <div class="top"> 
            <h1>Pixabay Search API</h1>
                <h2>Favorite pictures</h2>
                <h2>
                    <a href="./index.php">Back to search</a>
                </h1>
            </div>
         
            
            <br>
            
          
            <h3 id="im1">Favorite pictures, sorted by search term: <br><br></h3>
            <br><br>
            <imag id="im2">Pictures: <br><br></imag>
            <!--<imag id="im3"></imag>-->
           

        </div>
        
     
    
        <!--<script src="./JQuery.js"></script>-->
        <script>                
         $(document).ready(function() {
              $.ajax({
                    type: "POST",
                    url: "./dbApiS.php",
                    dataType: "json",
                    data: {
                      
                    },
                    success: function(data, status) {
                        console.log(data);
                        console.log(status);
                        
                        for(var i = 0; i < data.length; i++){
                            $("#im1").append("<button id= '"+ data[i]["searchTerm"] +"' onclick='print(this)'>"+data[i]["searchTerm"]+ "</button><br>");
                        }
                       
                       
                    },
                    error: function(err) {
                        console.log(arguments);
                    },
                    complete: function(data, status) {
                        // Called whether success or error
                        console.log(status);
                    }
                 });
         });
    function print(pic){
        //alert($(pic).attr("id"));
        $("#im2").empty();
         $(document).ready(function() {
        var im2 = document.getElementById("#im2");
         $.ajax({
                    type: "POST",
                    url: "./dbApiP.php",
                    dataType: "json",
                    data: {
                      'search' : $(pic).attr("id"),
                    },
                    success: function(data, status) {
                        console.log(data);
                        console.log(status);
                        
                        for(var i = 0; i < data.length; i++){
                            $("#im2").append("<img src='" + data[i]["url"] + "' width=500px>");
                        }
                       
                       
                    },
                    error: function(err) {
                        console.log(arguments);
                    },
                    complete: function(data, status) {
                        // Called whether success or error
                        console.log(status);
                    }
                 });
         });
        
    }
        </script>
    </body>
</html>

