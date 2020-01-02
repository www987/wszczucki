<?php
    echo <<<END
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
                <p><a href="logout.php">Wyloguj: </a><span style="font-weight: 900;" class="username">
END;echo @$_SESSION["login"];
echo <<<END
            </span></p>
            </div>
            <div id="buttonMenu" ><i class="icon-menu" onclick="menuOnOff()"></i></div>
        </div>
    </nav>
END;
?>