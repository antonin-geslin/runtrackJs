<?php
// Connexion à la base de données (exemple avec PDO)
$pdo = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', 'root');

// Récupération des données du formulaire
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// Vérification de l'adresse e-mail avec une regex
if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "Adresse e-mail incorrecte.";
    exit;
}

if ($password != $password2){
    echo "Les mots de passes ne correspondent pas";
    exit;
}

// Vérification du mot de passe avec une regex
if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>]).{8,}$/", $password)) {
    echo "Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.";
    exit;
}


// Vérification si l'utilisateur existe déjà dans la base de données
$requete = $pdo->prepare("SELECT * FROM utilisateurs WHERE login = :login");
$requete->execute(['login' => $login]);
$user = $requete->fetch();

if ($user) {
    // L'utilisateur existe déjà, renvoyer un message d'erreur
    echo "Cet utilisateur existe déjà";
} else {
    // Insérer l'utilisateur dans la base de données
    $requete = $pdo->prepare("INSERT INTO utilisateurs (prenom, nom,login, email, password) VALUES (:prenom, :nom, :login, :email, :password)");
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':login', $login);
    $requete->bindParam(':email', $email);
    $requete->bindParam(':password', $password);
    $requete->execute();

    echo "success";
}
?>