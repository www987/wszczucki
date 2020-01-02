<html lang="pl">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h1>Zamówienie online</h1>
    <form action="orderZelent.php" method="post">
        <p>Ile pączków (0.99 PLN/szt): <input name="paczki" type="text"></p>
        <p>Ile grzebieni (1.29PLN/szt): <input name="grzebienie" type="text"></p>
        <input type="submit" value="Wyslij zamowienie">
    </form>
    <?php
        $imie = "Wojtek"; 
        echo "Witaj $imie";
    ?>
</body>
</html>