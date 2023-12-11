<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'food';

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data from the database, sorted by calorie in ascending order
    $stmt = $bdd->query('SELECT id, nom, calorie FROM meal ORDER BY calorie ASC');
    
    // Output the sorted table
    echo "<table align='center' border='1px' style='width:600px; line-height:40px;'>
            <tr>
                <th colspan='2'>
                    <h2>Your Food</h2>
                </th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Calorie</th>
            </tr>";

    $totalCalories = 0;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td id='name-" . $row['id'] . "'>" . $row['nom'] . "</td>";
        echo "<td id='calorie-" . $row['id'] . "'>" . $row['calorie'] . "</td>";
        echo "</tr>";

        // Accumulate calories for total calculation
        $totalCalories += $row['calorie'];
    }

    // Output the total row
    echo "<tr>
            <td>Total Calories</td>
            <td>$totalCalories</td>
          </tr>";

    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur  : " . $e->getMessage();
}
?>
