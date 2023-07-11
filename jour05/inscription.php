<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="script_.js"></script>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
        <form class = "registrationForm" method="post">
                <label for="login">Login</label>
                <input type="text" name="login" id="login">
                <label for="prenom">First Name</label>
                <input type="text" name="prenom" id="prenom">
                <label for="nom">Name</label>
                <input type="text" name="nom" id="nom">
                <label for="nom">E-mail</label>
                <input type="text" name="email" id="email">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="on">
                <label for="password2">Password</label>
                <input type="password" name="password2" id="password2" autocomplete="on">
                <p>Already registred ? Log-in <a class="link" href="connexion.php">here !</a></p>
                <button type="submit" name="submit">Inscription</button>
                <p id="error"></p>
        </form>
    </body>
</html>
