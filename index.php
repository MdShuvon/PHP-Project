<?php 
    session_start();
    
    // Initialize session user if not set
    if (!isset($_SESSION['user'])) {
        $_SESSION['user'] = ['username' => ''];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss</title>
    <?php include 'client/commonFiles.php'; ?>
</head>
<body>
    <?php 
        include 'client/header.php'; 

        if (isset($_GET['signup']) && !$_SESSION['user']['username']){
            include ('client/signup.php');
        }else if (isset($_GET['login']) && !$_SESSION['user']['username']){
            include ('client/login.php');
        } else if (isset($_GET['ask']) && $_SESSION['user']['username']){
            include ('client/ask.php');
        } else if (isset($_GET['q-id']) && $_SESSION['user']['username']){
            $qid = $_GET['q-id'];
            include ('client/question-details.php');
        } else if (isset($_GET['c-id']) && $_SESSION['user']['username']){
            $cid = $_GET['c-id'];
            include ('client/questions.php');
        } else if (isset($_GET['u-id']) && $_SESSION['user']['username']){
            $uid = $_GET['u-id'];
            include ('client/questions.php');
        } else if (isset($_GET['latest']) && $_SESSION['user']['username']){
            include ('client/questions.php');
        } else if (isset($_GET['search']) && $_SESSION['user']['username']){
            $search = $_GET['search'];
            include ('client/questions.php');
        } else {
            include ('client/questions.php');
        }
    ?>
</body>
</html>