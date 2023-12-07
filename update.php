<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food';

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the meal ID, new name, and new calorie are set
    if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['calorie'])) {
        $mealId = $_GET['id'];
        $newName = $_GET['name'];
        $newCalorie = $_GET['calorie'];

        // Update the meal with the given ID
        $stmt = $bdd->prepare('UPDATE meal SET nom = :name, calorie = :calorie WHERE id = :id');
        $stmt->bindParam(':name', $newName);
        $stmt->bindParam(':calorie', $newCalorie);
        $stmt->bindParam(':id', $mealId);
        $stmt->execute();

        // Redirect back to the main page
        header('Location: index.php');
        exit();
    }
} catch (PDOException $e) {
    echo "Erreur  : " . $e->getMessage();
}
?>
