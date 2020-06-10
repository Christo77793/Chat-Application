<?php
    session_start();

    include "database.php";

    $msg = $_POST['msg'];
    $name = $_SESSION['name'];

    $sql = "insert into posts (msg, names) values ('$msg', '$name');";
    $result = $conn -> query($sql);

    header("Location: home.php");
?>