<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Logowanie</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
</head>
<body>
<div id="container">
    <header><a href="index.php"><span style="color:#c74343;">#</span>Szczucki</a></header>
    <main>
        <div id="loginMenu">
            <p>Zaloguj się</p>
            <div id="formContainer">
                <form method="post" action="loginscript.php">
                    <input type="text" name="login" placeholder="Podaj login">
                    <input type="password" name="password" placeholder="Podaj hasło">
                    <?php
                        session_start();
                        if(isset($_SESSION['userId'])){
                            header("Location: database.php");
                            die();
                        }
                        if(isset($_SESSION['error'])){
                            echo "<center>".$_SESSION['error']."</center>";
                            $_SESSION['error'] = "";
                        }
                    ?>
                    <input type="submit" value="Zaloguj się">
                </form>
            </div>
        </div>
    </main>
</div>
</body>