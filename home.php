<?php
    session_start();
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!--<link rel="stylesheet" href="home.css">-->
    <link rel="stylesheet" type="text/css" href="home.css?v=6" />
</head>

<body>
    <div id="user">
        <b> <i style = "text-shadow: 2px 2px 4px black;">User:-</i><i style = "text-shadow: 2px 2px 4px green;"> <?php echo $_SESSION['name'] ?></i></b> <br>
        <br>
    </div>
    
    <div class="layout">
        <div class="chat-box" >
            <?php
                $sql = "select * from posts";

                $result = $conn -> query($sql);

                //num_row is an in-built in PHP which is used to count the no. of rows
                if($result->num_rows > 0){
                    
                    //fetch_assoc is an in-built function which fetches the resepctive row as an associative array
                    while($row = $result->fetch_assoc()){

                        echo " " .$row['names']." ".":: ".$row['msg']." --".$row['dates']."<br> <br> ";
                    }
                }
                else{
                    echo "No messages";
                }
            ?>
        </div>
                <br>
    
        <div class="message_box">
            <form action="message.php" method="post">
                <textarea name="msg" placeholder="Type a message here..." cols="50" rows="5"></textarea> <br>
                <br>
                <input type="submit" value="Send">
            </form>
        </div>
        <br>

        <form action="logout.php" method="post">
            <div class="logout">
                <input type="submit" value="Logout">
            </div>  
        </form>
    </div>

</body>

</html>