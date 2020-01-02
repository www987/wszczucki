<?php
    session_start();
    if(!$_SESSION["signed"]){
        header("location: login.php");
        exit();
    } 
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
    <?php require_once("nav.php");?>
    <main>
        <?php require_once("mainMenu.php")?>
        <div id="contentBox">
            <div class="content"><!--1 content -->
                <div class="contentIcon">
                    <i class="icon-info-circled"></i>
                </div>
                <div class="contentText">
                    <header>Informacje o koncie</header>
                    <div class="contentTextP">
                        <p>Nazwa użytkownika:
                            <span>
                                <?php echo $_SESSION['login'];?>
                            </span>
                        </p>
                        <p>Zarejestrowano: 
                            <span>
                                <?php echo $_SESSION["registered"];?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="content"><!--2 content -->
                <div class="contentIcon">
                    <i class="icon-database"></i>
                </div>
                <div class="contentText">
                    <header>Przydział dyskowy</header>
                    <div class="contentTextP">
                        <p>Twój przydział: 
                            <span>
                                <?php echo round($_SESSION["maxTotalSize"],2)?> MB
                            </span>
                        </p>
                        <p>Wykorzystano: 
                            <span>
                                <?php 
                                    echo round($_SESSION["currentTotalSize"],2);
                                ?> MB
                            </span>
                        </p>
                        <p>Pozostało: 
                            <span>
                                <?php
                                    echo round($_SESSION["maxTotalSize"] - $_SESSION["currentTotalSize"],2);
                                ?> MB
                            </span>
                        </p>
                        <p>Maks. wielkość 1 pliku
                            <span>
                                <?php
                                    echo round($_SESSION["maxFileSize"]);
                                ?> MB
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="content"><!--3 content -->
                <div class="contentIcon">
                    <i class="icon-mail-alt"></i>
                </div>
                <div class="contentText">
                    <header>Zgłoś błąd/uwagę</header>
                    <div class="contentTextP">
                        <p>Zgłoszono: <span>
                            <?php echo $_SESSION["suggestionsNmb"];?>
                            </span>
                            sugestii
                        </p>
                        <p>Masz jakąś uwagę/błąd? <a href="#">Zgłoś tutaj</a></p>
                    </div>
                </div>
            </div>
            <div class="content"><!--4 content -->
                <div class="contentIcon">
                    <i class="icon-palette"></i>
                </div>
                <div class="contentText">
                    <header>Ustaw swoją tapete</header>
                    <div class="contentTextP">
                        <p>Wybrana tapeta: <span>
                            <?php 
                                echo $_SESSION["wallpaperName"];
                            ?>
                            </span></p>
                        <p>Aby ustawić tapete na szybko <a>kliknij</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>