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
                <input type="text" id="searchT">
                <button id="btn">Button</button>
                <h2>
                    <a href="./favorites.php">View Favorites</a>
                </h1>
            </div>
         
            
            <br>
            
          
            <imag id="im1"></imag>
            <imag id="im2"></imag>
            <imag id="im3"></imag>
           

        </div>
        
     
    
        <!--<script src="./JQuery.js"></script>-->
        <script>                
        var noClick = "<img id='img' src=" + "images/favorite.png" + " width = 20em>"
        var yesClick = "<img id='img' src=" + "images/favorite-on.png" + " width = 20em>"
         $(document).ready(function() {
             $("#btn").on("click", function(){

                searched = document.getElementById("searchT").value;
              
                
                
                 $("#im1").empty();
                 $("#im2").empty();
                 $("#im3").empty();

                   $.ajax({
                    type: "POST",
                    url: "./api.php",
                    dataType: "json",
                    data: {
                        'search' : $("#searchT").val()
                    },
                    success: function(data, status) {
                        console.log(data);
                        console.log(status);
                      
                       

                       for(var i = 0; i < 3; i++){
                             $("#im1").append("<img src='" + data.hits[i]['largeImageURL'] + "' width = 400em>" + "  ");
                       }
                        $("#im1").append("<br>");
                       for(var i = 0; i < 3; i++){
                             $("#im1").append("<button type='button' id='"+ data.hits[i]['largeImageURL'] +"'  i='"+ i +"' red=0 onclick='favorite(this,+"+i+")'>"+ noClick +"</button>" + "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp");
                       }
                        for(var i = 3; i < 6; i++){
                             $("#im2").append("<img src='" + data.hits[i]['largeImageURL'] + "' width = 400em>" + "  ");
                       }
                       $("#im2").append("<br>");
                       for(var i = 3; i < 6; i++){
                             $("#im2").append("<button type='button' id='"+ data.hits[i]['largeImageURL'] +"'  i='"+ i +"' red=0 onclick='favorite(this,+"+i+")'>"+ noClick +"</button>" + "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp");
                       }
                        for(var i = 6; i < 9; i++){
                             $("#im3").append("<img src='" + data.hits[i]['largeImageURL'] + "' width = 400em>" + "  ");
                       }
                       $("#im3").append("<br>");
                       for(var i = 6; i < 9; i++){
                             $("#im3").append("<button type='button' id='"+ data.hits[i]['largeImageURL'] +"'  i='"+ i +"' red=0 onclick='favorite(this,+"+i+")'>"+ noClick +"</button>" + "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp");
                       }
                        
                    },
                    error: function(err) {
                        console.log(arguments);
                        $("#im1").append("NO REARCH RESULTS! TRY GOOGLE, IT WORKS BETTER! ;)");
                    },
                    complete: function(data, status) {
                        // Called whether success or error
                        console.log(status);
                    }
                 });
                 return false;
            });

      
         });
        function favorite(url,i){
            //  console.log($(url).attr("id"));
            //  console.log($("#searchT").val());
            //  console.log(i);
            //  console.log(url);
            //  console.log( $(url).attr("i"));
            //  console.log($(url).attr("red"));
             
             if($(url).attr("i") == i & $(url).attr("red") == 0){
                $(url).attr("red",1);
                $(url).html(yesClick);
                
                 $.ajax({
                    type: "POST",
                    url: "./dbApi1.php",
                    dataType: "json",
                    data: {
                        'url' : $(url).attr("id"),
                    },
                    success: function(data, status) {
                        console.log(data);
                        console.log(status);
                      $.ajax({
                    type: "POST",
                    url: "./dbApi2.php",
                    dataType: "json",
                    data: {
                        'url' : $(url).attr("id"),
                        'search' : $("#searchT").val(),
                    },
                    success: function(data, status) {
                      // console.log(data);
                        console.log(status);
                        
                       
                    },
                    error: function(err) {
                        console.log(arguments);
                    },
                    complete: function(data, status) {
                        // Called whether success or error
                        console.log(status);
                    }
                 });
                       
                    },
                    error: function(err) {
                        console.log(arguments);
                    },
                    complete: function(data, status) {
                        // Called whether success or error
                        console.log(status);
                    }
                 });
                 
             }
             else if($(url).attr("i") == i & $(url).attr("red") == 1){
                $(url).attr("red",0);
                $(url).html(noClick);
                
                 $.ajax({
                    type: "POST",
                    url: "./dbApiDel.php",
                    dataType: "json",
                    data: {
                        'url' : $(url).attr("id"),
                    },
                    success: function(data, status) {
                       // console.log(data);
                        console.log(status);
                    
                       
                    },
                    error: function(err) {
                        console.log(arguments);
                    },
                    complete: function(data, status) {
                        // Called whether success or error
                        console.log(status);
                    }
                 });
             }
        return 0;
        }
        </script>
    </body>
</html>

