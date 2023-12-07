<!DOCTYPE html>
<html>

<head>
    <title>Fetch Data From Database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
            margin: auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-button, .update-button {
            background-color: #ff4d4d;
            color: #ffffff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .search-bar {
            margin-top: 10px;
        }

        .sort-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="search-bar">
        <label for="searchId">Search by ID:</label>
        <input type="text" id="searchId" name="searchId">
        <button onclick="searchById()">Search</button>
    </div>

    <button class="sort-button" onclick="sortTable()">Sort by Calories</button>

    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="5">
                <h2>Your Food</h2>
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Calorie</th>
            <th>Action</th>
            <th>Update</th>
        </tr>

        <?php
        $servername = 'localhost';  // Nom de la base de données
        $username = 'root';  // Nom d'utilisateur de la base de données
        $password = '';  // Mot de passe de la base de données
        $dbname = 'food'; // Nom de la base de données

        try {
            $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Fetch data from the database
            $stmt = $bdd->query('SELECT id, nom, calorie FROM meal');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td id='name-" . $row['id'] . "'>" . $row['nom'] . "</td>";
                echo "<td id='calorie-" . $row['id'] . "'>" . $row['calorie'] . "</td>";
                echo "<td><button class='delete-button' onclick=\"deleteMeal(" . $row['id'] . ")\">Delete</button></td>";
                echo "<td><button class='update-button' onclick=\"updateMeal(" . $row['id'] . ")\">Update</button></td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "Erreur  : " . $e->getMessage();
        }
        ?>

    </table>

    <script>
        function deleteMeal(mealId) {
            // Send an AJAX request or redirect to a PHP script that handles the deletion
            window.location.href = "delete.php?id=" + mealId;
        }

        function updateMeal(mealId) {
            var newName = prompt("Enter the new name:");
            var newCalorie = prompt("Enter the new calorie value:");
            
            if (newName !== null && newCalorie !== null) {
                // Send an AJAX request or redirect to a PHP script that handles the update
                window.location.href = "update.php?id=" + mealId + "&name=" + encodeURIComponent(newName) + "&calorie=" + newCalorie;
            }
        }

        function searchById() {
            var searchId = document.getElementById('searchId').value;

            if (searchId !== "") {
                // Redirect to a PHP script that handles the search by ID
                window.location.href = "search.php?id=" + searchId;
            }
        }

        function sortTable() {
            // Redirect to a PHP script that handles sorting by calories
            window.location.href = "sort.php";
        }
    </script>
</body>

</html>