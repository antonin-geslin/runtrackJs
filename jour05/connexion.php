<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="script_.js"></script>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<header>
        <a href="index.php"><h2>Sign-in/Log-in Simulator</h2></a>
        <div class="session">
            <p id = "session"></p>
            <?php 
                session_start();
                if (isset($_SESSION['loggedIn'])) {
                    echo '<button id="signout" class="signout" onclick = "signout()">Sign Out</button>';
                } else {
                    echo '<button id="signout" class="signout" style="display: none;">Sign Out</button>';
                }
            ?>
        </div>
        <div class="nav">
            <a href="inscription.php">Sign-in</a>
            <a href="connexion.php">Log-in</a>
        </div>
    </header>
<body>
    <form class = "connexionForm" method="post">
            <label for="login">Login</label>
            <input type="text" name="login" id="login">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="on">
            <button type="submit" name="submit">Connexion</button>
            <p id="error"></p>
    </form>
</body>
</html>