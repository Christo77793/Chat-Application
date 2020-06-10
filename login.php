<?php
    session_start();
    include "database.php";

    $uname = $_POST['User_Name'];
    $upass = $_POST['Password'];

    $sql = "select * from signup where u_name = '$uname' and u_password = '$upass'";

    $result = $conn -> query($sql);

    if($row = $result -> fetch_assoc()){
        $_SESSION['name'] = $_POST['User_Name'];

        header("Location: home.php");
    }
    else{
        
        header("Location: error.php");
    }
?>