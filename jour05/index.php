<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="script_.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<header>
        <a href="index.php"><h2>Sign-in/Log-in Simulator</h2></a>
        <div class="session">
            <p id = "session"></p>
            <?php 
                session_start();
                if (isset($_SESSION['loggedIn'])) {
                    echo '<button id="signout" class="signout" onclick="signout()">Sign Out</button>';
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
    <div class="content">
        <h1>Welcome on Sign-in/Log-in Simulator ! (New AJAX version)</h1>
        <p>Discover the world's first registration and login simulation game! Immerse yourself in an immersive experience that will make you feel the excitement of navigating a real website.</p>
        <p>Are you ready for an intense and authentic experience? Our revolutionary game pushes the boundaries of simulation by faithfully recreating every detail of the online login and registration process. Discover a wide range of true-to-life features that will put you right in the middle of the action.</p>
        <p>Affrontez les défis de mots de passe oubliés, des confirmations par mail (prochaine mise à jour), de la recherche de pseudo etc...
        Le simulateur vous offre une véritable immersion dans le monde de la connexion en ligne, où chaque interaction compte.</p>
        <p>Are you ready for the challenge? Join us now and get ready for some exciting times. The future of online simulation <a class="link" href="inscription.php">starts here.</a></p>
        <p class ='disclaimer'>Alpha Version - More content comming soon</p>
    </div>
    </body>
</html>
