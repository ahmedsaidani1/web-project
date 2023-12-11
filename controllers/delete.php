<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food';

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the meal ID is set
    if (isset($_GET['id'])) {
        $mealId = $_GET['id'];

        // Delete the meal with the given ID
        $stmt = $bdd->prepare('DELETE FROM meal WHERE id = :id');
        $stmt->bindParam(':id', $mealId);
        $stmt->execute();

        // Redirect back to the main page
        header('Location: index.php');
        
    }
} catch (PDOException $e) {
    echo "Erreur  : " . $e->getMessage();
}
?>