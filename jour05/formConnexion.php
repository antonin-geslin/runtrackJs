<?php
header("Cache-Control: no-cache, must-revalidate");
// Connexion à la base de données (exemple avec PDO)
$pdo = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', 'root');

$login = $_POST['login'];
$password = $_POST['password'];


// Vérification si l'utilisateur existe déjà dans la base de données
$requete = $pdo->prepare("SELECT * FROM utilisateurs WHERE login = :login");
$requete->bindParam(':login', $login);
$requete->execute();
$user = $requete->fetch();

if (!$user) {
    echo "Cet utilisateur n'existe pas";
} else {
    $requete = $pdo->prepare("SELECT * FROM utilisateurs WHERE login = :login AND password = :password");
    $requete->bindParam(':login', $login);
    $requete->bindParam(':password', $password);
    $requete->execute();
    $password = $requete->fetch();
    if ($password) {
        $userInfo = $user['prenom'];
        $jsonUserInfo = json_encode($userInfo);
        file_put_contents('session.json', $jsonUserInfo);
        session_start();
        $_SESSION['loggedIn'] = true;
        echo "success";
        exit();
    } else {
        echo "Mot de passe incorrect";
        exit();
    }
    
}
?>