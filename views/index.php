<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calories Tracker</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <nav>
        <div class="nav-wrapper blue">
            <div class="container">
                <a href="#" class="brand-logo center">Tack calories</a>
                <ul>
                    <li>
                        <a href="#" class="clear-btn btn blue lighten-3">Clear All</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <div class="container">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Add Meal / Food item</span>
                <form class="col" method="POST" action="../controllers/traitement.php" onsubmit="return validateItem();">

                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" placeholder="Add Item" name="meal" id="item-name">
                            <label for="item-name">Meal</label>
                            <p id="error-message" style="color: red;"></p>

                        </div>
                        <div class="input-field col s6">
                            <input type="number" placeholder="Add Calories" name="calorie" id="item-calories">
                            <label for="item-calories">Calories</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn add-btn blue darken-3" name="submit"  onclick="validateItem()"><i class="fa fa-plus"></i> Add Meal</button>
                      
                        </form>
                        <button class="btn back-btn grey pull-right"><i class="fa fa-chevron-circle-left"></i>
                            Back</button>
                    </div>
                
            </div>
        </div>

        

        <!-- Item list -->
        <ul id="item-list" class="collection">
            
        </ul>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="../controllers/app.js"></script>
    <script>
function validateItem() {
    var allowedItems = ['escalope', 'pizza', 'juice', 'soda', 'rice'];
    var userInput = document.getElementById('item-name').value.toLowerCase();
    var caloriesInput = document.getElementById('item-calories').value;

    console.log('User input:', userInput);

    // Validate item name
    if (!allowedItems.includes(userInput)) {
        console.log('Invalid item:', userInput);
        document.getElementById('error-message').innerText = 'Saisie invalide';
        return false;  // Prevent form submission
    }

    // Validate calories as numeric
    if (isNaN(caloriesInput) || caloriesInput <= 0) {
        console.log('Invalid calories:', caloriesInput);
        document.getElementById('error-message').innerText = 'Calories should be a positive numeric value';
        return false;  // Prevent form submission
    }

    // Clear error message if both inputs are valid
    document.getElementById('error-message').innerText = '';
    return true;  // Allow form submission
}




        </script>
</body>

</html>