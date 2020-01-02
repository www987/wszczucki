<?php
    if(!isset($_POST['login']) || !isset($_POST['password']))
        header("Location: login.php");

    require "config.php";

    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $conn = new mysqli($DB_SERVERNAME, $DB_LOGIN, $DB_PASSWORD, $DB_NAME);
    $result = $conn->query("SELECT * FROM users");
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row["login"] == $login && $row["password"] == $password){
                $_SESSION['userId'] = $row['ID'];
                $_SESSION['max_file_size'] = $row['maxFileSize'];
                $_SESSION['login'] = $row['login'];
                $_SESSION['max_total_size'] = $row['maxTotalSize'];
                header("Location: database.php");
                die();
            }
        }   
        $_SESSION['error'] = "Błąd logowania!";
        header("Location: login.php");
        die();
    }
    $conn->close();
?>