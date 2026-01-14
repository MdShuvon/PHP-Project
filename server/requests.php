<?php

    session_start();
    include ("../common/db.php");
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        
        $user = $conn->prepare("INSERT INTO `users`(
        `id`, `username`, `email`, `password`, `address`) 
        VALUES (NULL, '$username', '$email', '$password', '$address')");

        $result = $user->execute();
        $user -> insert_id;
        if ($result){
            echo "New user registered successfully";
            $_SESSION["user"] = [
                "username" => $username,
                "email" => $email,
                "user_id" => $user -> insert_id
            ];
            header ("Location: /DBMS");
        }
        else {
            echo "Error ";
        }
    }
    else if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = "";
        $user_id = 0;
        $query= "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        $result = $conn -> query($query);
        if ($result -> num_rows > 0 ){
            foreach ($result as $row){
                $username = $row['username'];
                $user_id = $row['id'];
            }
            $_SESSION ["user"] = [
                "username" => $username,
                "email" => $email,
                "user_id" => $user_id
            ];
            header ("Location: /DBMS");
        }
        else {
            echo "Invalid Credentials";
        }
    }
    else if (isset($_GET['logout'])){
        session_unset();
        header ("Location: /DBMS");
    } 
    else if (isset($_POST['ask'])){
        $title = $_POST['title'];
        $descriptions = $_POST['descriptions'];
        $category_id = $_POST['category'];
        $user_id = $_SESSION['user']['user_id'];

        
        $question = $conn->prepare("INSERT INTO `questions`(
        `id`, `title`, `descriptions`, `category_id`, `user_id`) 
        VALUES (NULL, '$title', '$descriptions', '$category_id', '$user_id')");

        $result = $question->execute();
        $question -> insert_id;
        if ($result){
            header ("Location: /DBMS");
        }
        else {
            echo "Question is added to website";
        }
    }
    else if (isset($_POST['answer'])){
        $answer = $_POST['answer'];
        $question_id = $_POST['question_id'];
        $user_id = $_SESSION['user']['user_id'];

        
        $answer = $conn->prepare("INSERT INTO `answers`(
        `id`, `answer`, `question_id`, `user_id`) 
        VALUES (NULL, '$answer', '$question_id', '$user_id')");

        $result = $answer->execute();
        $answer -> insert_id;
        if ($result){
            header ("Location: /DBMS?q-id=$question_id");
        }
        else {
            echo "Error in submitting answer";
        }
    }
    else if (isset($_GET["delete"])) {
    echo $qid= $_GET["delete"];
     $query= $conn->prepare("delete from questions where id =$qid");
     $result = $query->execute();
     if($result){
        header("location: /DBMS");
     }else {
        echo "Question not deleted";
     }
    }
?>