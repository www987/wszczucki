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
                <a href="index.php">Szczucki&nbsp;database</a>
                <div id = "navIcon"></div>
            </div>
            <div id="menuNav">
                <ul>
                    <a href="index.php"><li>Strona główna</li></a>
                    <a href="projekty.php"><li>Moje projekty</li></a>
                    <a href="omnie.php"><li>O mnie</li></a>
                    <a href="kontakt.php"><li>Kontakt</li></a>
                </ul>
                <p><a href="logout.php">Wyloguj:</a> <span style="font-weight: 900;" class="username">  Wojciech Sz.</span></p>
             
            </div>
            <div id="buttonMenu" ><i class="icon-menu" onclick="menuOnOff()"></i></div>
        </div>
    </nav>
    <main>
        <div id="mainMenu">
            <ul>
                <li onclick="screw(); resizeMainMenu();"><i class="icon-left"></i><span>Zwiń</span></li>
                <li><a href="database.php"><i class="icon-info-circled"></i><span>Informacje</span></a></li>
                <li><a href="dane.php"><i class="icon-database"></i><span>Twoje dane</span></a></li>
                <li><a href="sugestie.php"><i class="icon-mail-alt"></i><span>Sugestie</span></a></li>
                <li><a href="ustawienia.php"><i class="icon-palette"></i><span>Tapeta</span></a></li>
            </ul>
        </div>
        <div id="contentBox">
            <div class="content"><!--1 content -->
                <div class="contentIcon">
                    <i class="icon-info-circled"></i>
                </div>
                <div class="contentText">
                    <header>Informacje o koncie</header>
                    <p>Nazwa użytkownika: <span class="username">Wojciech Sz.</span></p>
                    <p>Zarejestrowano: <span class="registered">2019-08-20</span></p>
                </div>
            </div>
            <div class="content"><!--2 content -->
                <div class="contentIcon">
                    <i class="icon-database"></i>
                </div>
                <div class="contentText">
                    <header>Przydział dyskowy</header>
                    <p>Twój przydział: <span class="maxDiskSpace">500 MB</span></p>
                    <p>Wykorzystano: <span class="usedDiskSpace">200 MB</span></p>
                    <p>Pozostało: <span class="leftDiskSpace">300 MB</span></p>
                </div>
            </div>
            <div class="content"><!--3 content -->
                <div class="contentIcon">
                    <i class="icon-mail-alt"></i>
                </div>
                <div class="contentText">
                    <header>Zgłoś błąd/uwagę</header>
                    <p>Zgłoszono: <span class="suggestion">0 </span><span>sugestii</span></p>
                    <p>Masz jakąś uwagę/błąd? <a href="#">Zgłoś tutaj</a></p>
                </div>
            </div>
            <div class="content"><!--4 content -->
                <div class="contentIcon">
                    <i class="icon-palette"></i>
                </div>
                <div class="contentText">
                    <header>Ustaw swoją tapete</header>
                    <p>Wybrana tapeta: <span class="wallpaper">Mójpokój.jpg</span></p>
                    <p>Aby ustawić tapete na szybko <a>kliknij</a></p>
                </div>
            </div>
        </div>
    </main>

</body>