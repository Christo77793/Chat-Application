<?php
    //mysqli_connect(host, username, password, dbname)
    $conn = mysqli_connect("localhost", "root", "", "chatapp");

    if($conn){
        
    }
    else{
        die("Not connected".mysqli_connect_error());
        //echo "dis-connected";
    }
?>