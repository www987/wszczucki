<?php
    session_start();
    if(!$_SESSION["signed"]){
        header("location: login.php");
        exit();
    }
    require_once("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Wojciech Szczucki</title>
    <link rel="stylesheet" href="css/database.css">
    <link rel="stylesheet" href="fontello/css/szczucki-font.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <script src="js/database.js" defer></script>
    <!--script src="js/data.js" defer></script-->
</head>
    <script>
        function naSzybko(){
       setInterval(function(){
        console.log(document.querySelector("#fileSize").files);
           var ii = document.querySelector("#fileSize").files;
        for(let j of ii)
            console.log(j.name);
    }, 3000)
        }
    </script>
<body onresize="resizeCSScheck()" onload="naSzybko()">
    <?php require_once("nav.php");?>
    <main>
        <?php require_once("mainMenu.php")?>
        <div id="contentBox" class="startTop">
            <div id="dataContainer">
                <header>
                    <div class="contentIcon">
                        <i class="icon-database"></i>
                    </div>
                    <p>Twoje dane</p>
                </header>
                <div id="smalldataContainer">
                    <div class="tableContainer">
                        
                        <div class="type">Typ</div>
                        <div class="name">Nazwa</div>
                        <div class="rozmiar">Rozmiar</div>
                        <div class="createDate">Data utworzenia</div>
                    </div>
                    <?php
                        $mysqli = @new mysqli($host, $db_login, $db_password, $db_name);
                        if($mysqli -> connect_errno != 0){
                            echo "Error: ".$mysqli -> connect_errno;
                             exit();
                        }
                        $owner = $_SESSION["loginID"];
                        $rslt = $mysqli -> query("SELECT ID, name, loc, date, size from data WHERE owner = '$owner'");
                        while($row = $rslt -> fetch_assoc()){
                            $ID = $row["ID"];
                            $nme = $row["name"];
                            $nmeArray = explode(".", $nme);
                            $type = end($nmeArray);
                            $size = round(($row["size"] /1024)/1024,2);
                            $date = $row["date"];
                            echo <<<END
                            <div class="tableContainer" onclick="dwnlodThis(this)" name="$ID">
                                <div class="type">$type</div>
                                <div class="name">$nme</div>
                                <div class="rozmiar">$size MB</div>
                                <div class="createDate">$date</div>
                            </div>
END;
                        }
                        
                    ?>
                </div>
                <div id="filesManagement">
                    <header>
                        <div class="contentIcon">
                            <i class="icon-upload-cloud"></i>
                        </div>
                        <p>Wyslij pliki</p>
                    </header>
                    <form id="yourData" method="post" enctype="multipart/form-data" action="upload.php">
                        <input type="file" id="fileSize" name="file[]" multiple>
                        <label for="fileSize"><i class="icon-upload-cloud"></i>Wybierz plik</label>
                        <input type="submit" value="Wyślij" name="cnfirm">
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <div id="infoWindowSubmit" style="<?php if(isset($_SESSION["e_upload"])) echo "display:flex";else echo "display:none";?>">
        <img src="../szczucki/img/exitButton.svg" onclick="closeInfoWindow(this)">
            <header>
                <h2>Info o wysłaniu plików</h2>
            </header>
            <ul>
                <li><?php echo $_SESSION["e_upload"]; unset($_SESSION["e_upload"]);?></li>
            </ul>
    </div>
    <img src="img/dwnlodBtton.svg" id="dwnlodBtton" title="pobierz zaznaczone elementy">
    <script>
        function closeInfoWindow(e){
            e.parentElement.style.display = "none";
        }
        function dwnlodThis(e){
         
            if(e.style.backgroundColor == "silver"){
                e.style.backgroundColor = "transparent";
                console.log("t");
            }
            else{
                e.style.backgroundColor = "silver";
                console.log("n");
            }
        }
    </script>
    <!--method="post" action="upload.php" enctype="multipart/form-data"-->
</body>