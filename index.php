<?php

    include 'db.php';

?>

<!DOCTYPE html>


<html>
    
    <head>
        
        <!-- Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
           
        <link rel="stylesheet" href="style.css">     
    </head>


<body onload= "ajax(); ">

<style>
  body{
    background: url('images/chatbg-image2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>


<div class="container" style=" 
background: rgba(242, 242, 242, 0.6); backdrop-filter: blur(10px); 
box-shadow: -10px -10px 2em rgb(187, 187, 187), 10px 10px 2em rgb(240, 240, 240);
border-radius: 20px;">
<div class="chat-heading" style="text-align: center; color: black; font-size: 2em; font-weight: bold; ">
  DIALOG HUB
</div>   
<hr>

<div id="chat_box">
        
        <div id="chat">
        
        
        </div>

      <div class="form-text" style="text-align: center;"> 
        <form method = "post" action="index.php" class="form-horizontal" style="margin-top:150px; padding-right: 1em;">
          <div class="form-group" style="padding: 1px;">
            <div class="row" style="margin: 0px; justify-content: center; align-items: center;">
              <div class="col-lg-2" style="align-items: center;">
                <label for="inputEmail3" style="color: rgb(44, 44, 44);" class="control-label">Name:</label>
              </div>
            <div class="col-lg-10">
             <input type="text" class="form-control" id="" placeholder="Name" name ="username">
            </div>
            </div>
            
          </div>

          <div class="form-group" style="padding: 1px;">
            <div class="row" style="margin: 0px; justify-content: center; align-items: center;">
              <div class="col-lg-2">
                <label for="comment" style="color: rgb(44, 44, 44);" class="control-label">Chat:</label>
              </div>
              <div class = "col-lg-10">
                <textarea name = "message" class="form-control" rows="2" id="comment"
                placeholder="Type your message here.."></textarea>
              </div>
            </div>
              
          </div>

          <div class="form-group" >
          <div class="row" style="justify-content: center; margin:0px;">
          <div class="col-lg-1"></div>
            <div class="col-lg-10 p-md-3 p-lg-3" >
              <button type="submit" name = "submit" class="btn btn-dark px-4" style="text-align: center;"> POST IT !</button>
            </div>
            <div class="col-lg-1"></div>
            </div>
          </div>
        </form>
      </div>    


                <?php
                    if(isset($_POST['username']) && isset($_POST['message']))
                    {
                        $name = $_POST['username'];
//                        echo $name;
                        $message = $_POST['message'];
//                        echo $message;
                        $query_1 = "INSERT INTO chat_info (name,msg) VALUES ('$name','$message')";
                        $query_run = mysqli_query($con,$query_1);
                
                        if($query_run)
                        {
                            echo "<audio src = 'sound/134332-facebook-chat-sound.mp3' hidden = 'true' autoplay = 'true' /></audio>";
                        }

                   }
                ?>
                
            </div>
</div>

    </body>
    <script src="script.js"></script>

</html>