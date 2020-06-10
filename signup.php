<?php
    include 'database.php';
    
    //test variables
    $name_test = 1; $email_test = 1; $pass_test = 1;
    
    if(isset($_POST["Register"])){
        
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        function checkName($input){
            if(preg_match("/^[?=A-Za-z]*$/",$input)){
                $GLOBALS['name_test'] += 1;
            }
            else {
                $GLOBALS['name_test'] -= 1;
            }
        }
        function checkEmail($input){
            if(preg_match("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-z]{2,4}/",$input)){
                $GLOBALS['email_test'] += 1;
            }
            else {
                $GLOBALS['email_test'] -= 1;
            }
        }
        function checkPassword($input){
            if(preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,15}$/",$input)){
                $GLOBALS['pass_test'] += 1;
            }
            else {
                $GLOBALS['pass_test'] -= 1;
            }
        }
        
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $uname = test_input($_POST['User_Name']);
            $uemail = test_input($_POST['Email_ID']);
            $upass = test_input($_POST['Password']);
            checkName($uname);
            checkEmail($uemail);
            checkPassword($upass);
        }
        
        if($name_test == 2 and $email_test == 2 and $pass_test == 2){
            $sql = "insert into signup (u_id, u_name, u_email, u_password) values (NULL, '$uname', '$uemail', '$upass');";
    
            $result = $conn -> query($sql);
            
            header("Location: welcome.php");
        }
        else {
            if($name_test == 0){
                echo "Invalid Name <br>";
            }
            if($email_test == 0){
                echo "Invalid Email <br>";
            }
            if($pass_test == 0){
                echo "Invalid Password <br>";
            }
            echo " <br> Please go back and enter the details properly.";
        }
    }
?>