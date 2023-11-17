<?php
$servername = 'localhost';  // Nom de la base de données
$username = 'root';  // Nom d'utilisateur de la base de données
$password = '';  // Mot de passe de la base de données

try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion reussite";
}

catch (PDOException $e) {
    
    echo "Erreur  : " . $e->getMessage();
}

if(isset($_POST["submit"])){
    $nom=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpassword'];
    $requete=$bdd->prepare('INSERT INTO users VALUES (0, :nom, :email, :pass, :cpassword)');
    $requete->execute(
        array(
            "nom"=>$nom,
            "email"=>$email,
            "pass"=>$pass,
            "cpassword"=>$cpass,
            )
        );
    


}
?>