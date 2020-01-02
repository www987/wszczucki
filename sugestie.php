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
</head>
<body onresize="resizeCSScheck()">
    <nav>
        <div id="navbar">
            <div class="titleNav">
                <a href="database.php">Szczucki database </a>
                <a href="dane.php"><div id = "navIcon"></div></a>
            </div>
            <div id="menuNav">
                <ul>
                    <a href="index.php" title="Strona główna"><li><i class="icon-home"></i><span>Strona główna</span></li></a>
                    <a href="projekty.php" title="Moje projekty"><li><i class="icon-file-code"></i><span>Moje projekty</span></li></a>
                    <a href="omnie.php" title="O mnie"><li><i class="icon-newspaper"></i><span>O mnie</span></li></a>
                    <a href="kontakt.php" title="Kontakt"><li><i class="icon-mail-alt"></i><span>Kontakt</span></li></a>
                </ul>
                <p><a href="logout.php">Wyloguj: </a><span style="font-weight: 900;" class="username"><?php echo $_SESSION['login']; ?></span></p>
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
        <div id="contentBox">
            <div class="content"><!--3 content -->
                <div class="contentIcon">
                    <i class="icon-mail-alt"></i>
                </div>
                <div class="contentText">
                    <header>Sugestie</header>
                    <p>Zgłoszono: <span class="suggestion">0 </span><span>sugestii</span></p>
                    <p>Możesz zgłosić sugesię wybierając temat, a następnie wypisać ją w polu opisu.</p>
                </div>
            </div>
             <div class="content"><!--3 content -->
                <div class="contentIcon">
                    <p>1.</p>
                </div>
                <div class="contentText">
                    <header>Wybierz temat</header>
                    <select class="selectSuggestion">
                        <option>Nie ma żadnej sugestii, chce pochwalić autora</option>
                        <option>Zmiany wizualne strony</option>
                        <option>Serwer nie działa</option>
                        <option>Inne</option>
                    </select>
                </div>
            </div>
            <div class="content" id="bigSuggestion">
                <div class="contentIcon">
                    <p>2.</p>
                </div>
                <div class="contentText">
                    <header>Napisz sugestie</header>
                    <textarea class="suggestionArea" autofocus placeholder="Napisz swoją sugestie..."></textarea>
                </div>
            </div>
            <div id="buttonContainer">
                <input type="button" class="buttonSend" value="Wyślij">
            </div>
            
        </div>
    </main>

</body>