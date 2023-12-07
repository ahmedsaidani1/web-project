<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food';

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the search ID is set
    if (isset($_GET['id'])) {
        $searchId = $_GET['id'];

        // Fetch data from the database for the specified ID
        $stmt = $bdd->prepare('SELECT id, nom, calorie FROM meal WHERE id = :id');
        $stmt->bindParam(':id', $searchId);
        $stmt->execute();
        
        // Display the result
        echo "<h2>Search Result</h2>";
        echo "<table align='center' border='1px' style='width:600px; line-height:40px;'>";
        echo "<tr><th>ID</th><th>Name</th><th>Calorie</th></tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['calorie'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
} catch (PDOException $e) {
    echo "Erreur  : " . $e->getMessage();
}
?>
