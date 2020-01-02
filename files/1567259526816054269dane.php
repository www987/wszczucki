<?php
     session_start();
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
<body>
    <nav>
        <div id="navbar">
            <div class="titleNav">
                <a href="index.php">Szczucki database</a>
                <div id = "navIcon"></div>
            </div>
            <div id="menuNav">
                <ul>
                    <a href="index.php"><li>Strona główna</li></a>
                    <a href="projekty.php"><li>Moje projekty</li></a>
                    <a href="omnie.php"><li>O mnie</li></a>
                    <a href="kontakt.php"><li>Kontakt</li></a>
                </ul>
                <p>Wyloguj: <span style="font-weight: 900;" class="username"><?php echo $_SESSION['login']; ?></span></p>
            </div>
            <div id="buttonMenu" ><i class="icon-menu" onclick="menuOnOff()"></i></div>
        </div>
    </nav>
    <main>
        <div id="mainMenu">
            <ul>
                <li onclick="screw(); resizeMainMenu();"><i class="icon-left"></i><span>Zwiń</span></li>
                <li><a href="database.php"><i class="icon-info-circled"></i><span>Info</span></a></li>
                <li><a href="dane.php"><i class="icon-database"></i><span>Twoje dane</span></a></li>
                <li><a href="sugestie.php"><i class="icon-mail-alt"></i><span>Sugestie</span></a></li>
                <li><a href="ustawienia.php"><i class="icon-palette"></i><span>Tapeta</span></a></li>
            </ul>
        </div>
        <div id="contentBox" class="startTop">
            <div id="dataContainer">
                <header>
                    <div class="contentIcon">
                        <i class="icon-database"></i>
                    </div>
                    <p>Twoje dane</p>
                </header>
                <div id="tableContainer">
                    <form method="post" action="upload.php" enctype="multipart/form-data">
                        <input type="file" id="fileSize" name="file[]" multiple>
                        <input type="submit">
                    </form>
                <table>
                    <tr id="test">
                        <td>Nazwa</td>
                        <td>Rozmiar</td>
                        <td>Data utworzenia</td>
                    </tr>
                    <?php
                        if(!isset($_SESSION['userId']))
                            header("Location: login.php");
                        require "config.php";
                        $conn = new mysqli($DB_SERVERNAME, $DB_LOGIN, $DB_PASSWORD, $DB_NAME);
                        $result = $conn->query("SELECT * FROM data WHERE owner=".$_SESSION['userId']);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                    <td>".$row['name']."</td>
                                    <td>".round($row['size']/1024)." KB</td>
                                    <td>".$row['date']."</td>
                                    <td><a href='".$URL.$row['loc']."'>Download</a></td>
                                </tr>";
                            }
                        }
                        $conn->close();
                    ?>
                </table>
                </div>
            </div>
        </div>
    </main>

</body>