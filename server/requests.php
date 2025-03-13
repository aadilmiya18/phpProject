<?php
session_start();
include("../common/db.php");
if (isset($_POST['signup'])) {

    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $useraddress = $_POST["useraddress"];

    $sqlQuery = "insert into `users`(`id`,`username`,`useremail`,`userpassword`,`useraddress`) values (null,'$username','$useremail','$userpassword','$useraddress')";
    $user = $conn->prepare($sqlQuery);
    $user->execute();
    echo $conn->lastInsertId();
    if ($user) {
        $_SESSION["user"] = ["username" => $username, "useremail" => $useremail, "user_id"=>$conn->lastInsertId()];
        header("location:../server/index.php");
    } else {
        echo "failed to insert data";
    }
} elseif (isset($_POST["login"])) {
    print_r($_POST);
    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $username="";
    $user_id="";

    $sqlQuery = "select * from users where useremail='$useremail' and userpassword='$userpassword'";
    $result = $conn->query($sqlQuery);
    $result->execute(); 
    print_r($result);
    echo $result->rowCount();
    if ($result->rowCount() > 0) {  
        foreach ($result as $row) {
            echo $row['username'];
            $username = $row;
            $user_id= $row['id'];
        }
        
        $_SESSION['user'] = ['username' => $username, 'userpassword' => $userpassword,"user_id"=>$user_id];
        header('location:../server/index.php');
    } else {
        echo "user not registerd";
    }
} else if(isset($_GET["logout"])) {
    print_r($_GET);
    session_unset();
    header("location:../server/index.php");

}else if(isset($_POST['ask'])){
    // print_r($_POST);
    $title=$_POST['title'];
    $description=$_POST['description'];
    $category=$_POST['category'];
    print_r( $_SESSION);
    echo "sess";
    echo $user_id=$_SESSION['user']['user_id'];

    $sqlQuery = "insert into questions(`id`,`title`,`description`,`category_id`,`user_id`) values (null,'$title','$description','$category','$user_id')";
    $question = $conn->prepare($sqlQuery);
    $question->execute();
    if ($question) {
        
        header("location:../server/index.php");
    } else {
        echo "failed to insert data";
    }

}else if(isset($_POST['answer'])){
    $answer=$_POST['answer'];
    $question_id=$_POST['qid'];
    $user_id=$_SESSION['user']['user_id'];

    $sqlQuery = "insert into answers(`id`,`answer`,`question_id`,`user_id`) values (null,'$answer','$question_id','$user_id')";
    $question = $conn->prepare($sqlQuery);
    $question->execute();
    if ($question) {
        
        header("location:../server/index.php?q-id=$question_id");
    } else {
        echo "failed to insert answer";
    }

}
