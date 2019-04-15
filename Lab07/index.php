<?php
    session_start();

    if (!isset($_SESSION['email'])){
      header("Location: login.html");
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
    </head>
    <body>
        
            <h1>Dashboard</h1>
            <div>
                <button class="btn btn-danger">Logout</button>
            </div>
            <div>
                <a href="admin/index.php">Admin Dashboard</a>
            </div>
            <br><br>
            <div id="mart">OtterMart Products : <br><br></div>
            
            
            <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title">Ottermart item description</h4>
        </div>
        <div class="modal-body">
          <p id="omD"></p>
        </div>
        <div class="modal-footer">
          <!--<button type=button class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
      
    </div>
  </div>
            
            

        <script src="./JQuery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            $("button").on("click", function() {
                window.location = "logout.php";
            })
            
            $(document).ready(function() {
            //This populates the drop down selection
            $.ajax({
                type: "GET",
                url: "getSearchResults.php",
                dataType: "json",
                data: {
                    
                },
                success: function(data, status) {
                    // console.log(data);
                    // console.log(status);
                     for(var i = 0; i < data.length; i++){
                           $("#mart").append("<a data-toggle='modal' href='#myModal' onclick='modal("+i+")' id=" +i+ " >" + data[i]["productName"] + "</a>" +  "<br>"); 
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
                
            function modal(i){
                 $.ajax({
                type: "GET",
                url: "getSearchResults.php",
                dataType: "json",
                data: {
                    
                },
                success: function(data, status) {
                    $("#omD").html(data[i]["productName"] + "<br> <br> $" + data[i]["price"] + "<br> <br> " + data[i]["productDescription"]  + "<br> <br> " + "<img src= " + data[i]['productImage'] + " width = 200px>");
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
            
        </script>
    </body>
</html>