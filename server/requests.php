<?php
session_start();
include("../common/db.php");
if (isset($_POST['signup'])) {

    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $useraddress = $_POST["useraddress"];

    $sqlQuery = "insert into `users`(`id`,`username`,`useremail`,`userpassword`,`useraddress`) values (null,'$username','$useremail','$userpassword','$useraddress')";
    $insertData = $conn->prepare($sqlQuery);
    $insertData->execute();
    if ($insertData) {
        $_SESSION["user"] = ["username" => $username, "useremail" => $useremail];
        echo "dfl";
        header("location:../server/index.php");
    } else {
        echo "failed to insert data";
    }
} elseif (isset($_POST["login"])) {
    print_r($_POST);
    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $username="";

    $sqlQuery = "select * from users where useremail='$useremail' and userpassword='$userpassword'";
    $result = $conn->query($sqlQuery);
    $result->execute(); 
    print_r($result);
    echo $result->rowCount();
    if ($result->rowCount() > 0) {  
        foreach ($result as $row) {
            echo $row['username'];
            $username = $row;
        }
        
        $_SESSION['user'] = ['username' => $username, 'userpassword' => $userpassword];
        header('location:../server/index.php');
    } else {
        echo "user not registerd";
    }
} else if(isset($_GET["logout"])) {
    print_r($_GET);
    session_unset();
    header("location:../server/index.php");

}
