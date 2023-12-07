<?php
$servername = 'localhost';  // Nom de la base de données
$username = 'root';  // Nom d'utilisateur de la base de données
$password = '';  // Mot de passe de la base de données

try {
    $bdd = new PDO("mysql:host=$servername;dbname=food", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header("Location:..\controllers\index.php");
    
}
catch (PDOException $e) {
    
    echo "Erreur  : " . $e->getMessage();
}

if(isset($_POST["submit"])){
    $name=$_POST['meal'];
    $meal=$_POST['calorie'];
    $requete = $bdd->prepare('INSERT INTO meal (id, nom, calorie, carbs,proteine,fat) VALUES (0, :meal, :calorie, 0 ,0 ,0)');
    
    $requete->execute(
        array(
            "meal"=>$name,
            "calorie"=>$meal,
            
            )
        );
    }
    ?>