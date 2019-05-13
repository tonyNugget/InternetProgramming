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
        <!--CSS-->
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
            <div>
                <button onclick="window.location.href='rubric.html'" class='btn btn-warning'>Grading Rubric</button>
                <!--logout Button-->
                <button id="logout" class="btn btn-danger">Logout</button>
            </div>
            <!--Title of page-->
            <h1 id="headerDashboard">Scheduler Exam - CST336</h1>
        <!--Invitation Link-->
        <invitationLink>
            <br>
            Invitation Link
            <input type="url" id="invitation" value="https://azerka-zerka.c9users.io/final/invitationPage.html/DoesntWork">
        </invitationLink>
        <br><br>
        <!--Table for User's scehdule-->
        <table id="scheduleList" width="100%">
            <tr>
                <th>Date</th>
                <th>Start Time</th>
                <th>Duration</th>
                <th>Booked By</th>
                <th><a href="#myModal" data-toggle='modal' onclick='modal(1)'>Add New Time Slot</a></th> 
            </tr>
        <!--Horizontal Line for table style    -->
        <TH COLSPAN=5><hr>
        </table>
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"> 
        <h4 class="modal-title" id='modalTitle'></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p id="omD"></p>
        </div>
        <div class="modal-footer">
          <button type=button class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        <!--JQuery.js-->
        <script src="./JQuery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--Script------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <script>
            //Logout Button
            $("#logout").on("click", function() {
                    window.location = "logout.php";
            });
   
            
            
            $(document).ready(function() {
                //Date Variables
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!
                var yyyy = today.getFullYear();
                //populate dashboard with current available time slots
                $.ajax({
                    type: "POST",
                    url: "getSchedule.php",
                    dataType: "json",
                    data: {
                    }, 
                    success: function(data, status) {
                            for(var i = 0; i < data.length; i++){
                                schDate = data[i]['date'];
                                var splitUp = schDate.split("/");
                                //console.log(splitUp[0] + " " + splitUp[1] + " " + splitUp[2]);
                                var printY = false;
                                var printM = false;
                                //console.log(parseInt(splitUp[1]));
                                //console.log(parseInt(mm));
                                // Print the available time slots, only print if time slot is in the future.
                                //if(parseInt(splitUp[2]) >= yyyy){
                                        $("#scheduleList").append("<tr><td>"+ data[i]['date'] +"</td><td>"+ data[i]['start']+"</td><td>"+ data[i]['duration'] +"</td><td>"+ data[i]['booked_by'] +"</td> <td><button type='button' name='delTime'  href='#myModal' data-toggle='modal'  timeId ='"+ data[i]['id'] +"' class='btn btn-danger'>Delete Time Slot</button></td></tr>");   
                                //}
                                //Delete confirmation
                                $("button[name='delTime']").click( function(){
                                    var thisId = $(this).attr("timeId");
                                    $("#modalTitle").html("Delete Time Slot?");
                                    $("#omD").html("Are you sure you want to remove this time slot? <br><br><button type='button' class='btn btn-danger' name='delTime2' id='"+ thisId +"' >Yes, Delete.</button> <button class='btn btn-info' data-dismiss='modal' >No</button>");
                                    //If delete confirmed
                                    $("button[name='delTime2']").click( function(){
                                        var thisId = $(this).attr("id");
                                        $.ajax({
                                            type: "POST",
                                            url: "deleteSchedule.php",
                                            dataType: "json",
                                            data: {
                                                'id' : thisId,
                                            },
                                            success: function(data, status) {
                                                console.log(status);
                                                console.log(thisId);
                                                window.location.reload(); //reload the page to show newly added time slot
                                            },
                                            error: function(err) {
                                                console.log(arguments);
                                            },
                                            complete: function(data, status) {
                                                console.log(status);
                                            }
                                        });
                                    });
                                });
                            }
                        },
                        error: function(err) {
                            console.log(arguments);
                        },
                        complete: function(data, status) {
                            console.log(status);
                        },
                    });
                });    
            function modal(i){
                //Modal for time slot creation
                if(i == 1){
                    $("#modalTitle").html("Add New Time Slot");
                    $("#omD").html("Insert Date: <input id='date' type='text' placeholder='M/D/YYYY'><br><br>Start Time : <input type='text' id='sTime'><br><br>Duration : <input type='text' id='duration'><br><br><button class='btn btn-info' id='add'  >Add</button>");
                }

                //Add Button
                $("#add").on("click", function(){
                    $.ajax({
                        type: "POST",
                        url: "insertSchedule.php",
                        dataType: "json",
                        data: {
                            'date' : $("#date").val(),
                            'startTime' : $("#sTime").val(),
                            'duration' : $("#duration").val()
                        },
                        success: function(data, status) {
                            console.log(status);
                            window.location.reload(); //reload the page to show newly added time slot
                        },
                        error: function(err) {
                            console.log(arguments);
                        },
                        complete: function(data, status) {
                            console.log(status);
                        }
                    });
                });
            }
        </script>
    </body>
</html>