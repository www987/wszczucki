<?php
    echo <<<END
        <div id="mainMenu">
            <ul>
                <li onclick="screw(); resizeMainMenu();"><i class="icon-left"></i><span>Zwiń</span></li>
                <li><a href="database.php"><i class="icon-info-circled"></i><span>Informacje</span></a></li>
                <li><a href="data.php"><i class="icon-database"></i><span>Twoje dane</span></a></li>
                <li><a href="sugestie.php"><i class="icon-mail-alt"></i><span>Sugestie</span></a></li>
                <li><a href="ustawienia.php"><i class="icon-palette"></i><span>Tapeta</span></a></li>
            </ul>
        </div>
    END;
?>