<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php 
    $paczkow = $_POST['paczki'];
    $grzebieni = $_POST['grzebienie'];
    $suma = $paczkow * 0.99 + $grzebieni * 1.29;
    echo<<<END
    <table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <td>Pączek</td>
                <td>$paczkow</td>
            </tr>
             <tr>
                <td>Grzebieni</td>
                <td>$grzebieni</td>
            </tr>
            <tr>
                <td>Suma</td>
                <td>$suma</td>
            </tr>
        </table>
        <a href='Zelent php test.php'>Strona główna</a>
END; ?>
</body>
</html>