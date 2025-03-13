<?php
include("../common/db.php");
if(isset($_POST)){
    session_start();
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $useraddress = $_POST["useraddress"];

    $sqlQuery = "insert into `users`(`id`,`username`,`useremail`,`userpassword`,`useraddress`) values (null,'$username','$useremail','$userpassword','$useraddress')";
    $insertData = $conn->prepare($sqlQuery);
    $insertData->execute();
    if($insertData){
        $_SESSION["user"]=["username"=>$username,"useremail"=>$useremail];
        echo "data inserted successfully";
    
    }else{
        echo "failed to insert data";
    }   

}

?>