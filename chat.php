
<?php
                require 'db.php';
                
                    $query = "SELECT * FROM chat_info ORDER BY name DESC";
                    $query_run   = mysqli_query($con,$query);
//                    $query_run =$con -> query($query);
                
//                    $query_array = mysqli_fetch_assoc($query_run)
                    
                    while($query_row = mysqli_fetch_assoc($query_run)):?>
                
                <div style="padding: 0.3em 1em;">
                <div id ="chat_data">
                </div>
                <span style="color:black; font-weight: bold; letter-spacing: 1px;"><?php echo $query_row['name'].' : '; ?></span>
                <span style="font-family:cursive; color: rgb(50, 50, 50);"><?php echo $query_row['msg']; ?></span>
               <!-- <span style = "color: black; font-family:cursive;float:right;"><?php echo formatDate($query_row['date']); ?></span>...-->
                </div>

                
                <?php endwhile; ?>