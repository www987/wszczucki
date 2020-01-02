<?php
    if(isset($_POST['cnfirm'])){
        session_start();
        $mysqli = new mysqli("localhost", 'root', '', 'wszczucki');
        if ($mysqli->connect_errno){
            $_SESSION["e_upload"] = "Wystąpiły nieoczekiwane komplikacje. Proszę o kontakt z administracją.".$mysqli->connect_error;
            header("location: data.php");
            exit();
        }
        function getVal($mysqli, $clmn, $tbl, $ID){
            if($rslt = $mysqli -> query("Select $clmn from $tbl WHERE ID_$tbl = '$ID'"))
            $val = $rslt -> fetch_row();
            return $val[0];
        }
        $maxFileSize = getVal($mysqli, "maxFileSize", "users", 1);
        $maxTotalSize = getVal($mysqli, "maxTotalSize", "users", 1);
        $curntTotalSize = getVal($mysqli, "currentTotalSize", "users", 1);

        $arrayNmb = count($_FILES['file']['name']);
        $size = 0;
        for($i=0; $i<$arrayNmb; $i++){
            $size += $_FILES['file']['size'][$i];
            if($maxFileSize < $_FILES['file']['size'][$i]){
                $_SESSION["e_upload"] = "Za duży rozmiar pliku";
                header("location: data.php");
                //exit();
            }
        }

        if(!$maxTotalSize > $size + $curntTotalSize){
            $_SESSION["e_upload"] = "Za duży rozmiar plików";
            header("location: data.php");
            //exit();
        } 

        for($i=0; $i<$arrayNmb; $i++){
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'][$i];
            $fileTmpName = $_FILES['file']['tmp_name'][$i];
            $fileSize = $_FILES['file']['size'][$i];
            $fileError = $_FILES['file']['error'][$i];
            $fileType = $_FILES['file']['type'][$i];
            $fileExt = explode('.', $fileName);
            $fileRealExt = strtolower(end($fileExt));

            $alwdExt = array('jpg', 'jpeg', 'png', 'txt');
            $isOk = 1;

                    //CHECKING FILE TYPE//
            if(!in_array($fileRealExt, $alwdExt)){
                $isOk = 0;
                $_SESSION["e_upload"] =  "Zły typ pliku $fileRealExt";
                header("location: data.php");
                //exit();
            }
            var_dump($file);

                     //CHECKING ERRORS//
            if(!$fileError === 0){
                $isOk = 0;
                $_SESSION["e_upload"] = "Pojawił się błąd przy wysyłaniu pliku. Skontaktuj się z administracją";
                header("location: data.php");
                //exit();
            }          

                    //CHECKING IS THE FILE EXISTS//
            $rslt = $mysqli ->query("SELECT name from data WHERE name = '$fileName'");
            if(!$rslt -> num_rows == 0){
                $_SESSION["e_upload"] = "$fileName już istnieje. Zmień nazwę tego pliku";
                $isOk = 0;
                header("location: data.php");
                //exit();
            }


                  //DO if is ok//
            if($isOk){
                $fileNewName = uniqid('', true).".".$fileRealExt;
                $fileDestination = 'uploads/'.$fileNewName;
                echo "<br>$fileNewName<br>$fileDestination";
                if(move_uploaded_file($fileTmpName, $fileDestination)){
                    $sql = sprintf("Insert into data (name, loc, size, owner) VALUES('%s', '%s', '$fileSize', 1)", mysqli_real_escape_string($mysqli, $fileName),
                    mysqli_real_escape_string($mysqli, $fileDestination));

                    $mysqli -> query($sql);
                    $_SESSION["e_upload"] = "Wszystko zostało poprawnie wysłane na serwer";
                    header("location: data.php");
                }
                else{
                    $_SESSION["e_upload"] = "Nie udało się dodać pliku. Za utrudnienia przepraszamy";
                    header("location: data.php");
                    exit();
                }
            }
            else{
                header("location: data.php");
                exit();
            }
        }
        //echo $size;
        $mysqli -> query("Update users SET currentTotalSize = '$size' WHERE ID = 1");
    }
    else{
        header("location: data.php");
    }

?>