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
                <p>Zalogowano jako: <span style="font-weight: 900;" class="username">  Wojciech Sz.</span></p>
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