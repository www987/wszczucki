<?php
    if(!isset($_POST['login']) || !isset($_POST['password'])){
        header("location: login.php");
        exit();
    }
    session_start();
    require_once("config.php");
    $mysqli = @new mysqli($host, $db_login, $db_password, $db_name);
    function getVal($mysqli, $clmn, $tbl, $whr_clmn, $ID){
        $rslt = $mysqli -> query("Select $clmn from $tbl WHERE $whr_clmn = '$ID'");
        $val = $rslt -> fetch_row();
        return $val[0];
    }
    if($mysqli -> connect_errno != 0) 
        echo "Error: ".$mysqli -> connect_errno;
    else{
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql["users"] = sprintf("SELECT * FROM users WHERE login='%s' AND password='%s'", 
        mysqli_real_escape_string($mysqli, $login),
        mysqli_real_escape_string($mysqli, $password));
        $sql["data"] = "SELECT * FROM data";

        if($result = $mysqli -> query($sql["users"])){
            $usersNum = $result -> num_rows;
            if($usersNum > 0){
                $row = $result->fetch_assoc();
                $_SESSION["login"] = $row["login"];
                $loginID = getVal($mysqli, "ID_users", "users","login", $row['login']);
                $_SESSION["loginID"] = $loginID;
                $_SESSION["maxFileSize"] = ($row["maxFileSize"]/1024)/1024;
                $_SESSION["maxTotalSize"] = ($row["maxTotalSize"] /1024)/1024;
                $_SESSION["currentTotalSize"] = $row["currentTotalSize"] / 1024 /1024;
                $_SESSION["registered"] = $row["registered"]; 
                $rslt = $mysqli -> query("SELECT ID_users from suggestions_users WHERE ID_users = '$loginID'");
                $_SESSION["suggestionsNmb"] = $rslt -> num_rows;
                $walpprNme = explode('/', $row["wallpaper"]);
                $_SESSION["wallpaperName"] = end($walpprNme);
                $_SESSION["signed"] = true;
                $result -> close();
                header("Location: database.php");
            }
            else{
                $_SESSION["e_login"] = "<b>Złe hasło lub login</b>";
                header("Location: login.php");
            }
        }
        $mysqli -> close();
    }
?>