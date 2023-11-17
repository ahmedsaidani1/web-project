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
                <form class="col"  method="POST" action="traitement.php">
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" placeholder="Add Item" name="meal" id="item-name">
                            <label for="item-name">Meal</label>

                        </div>
                        <div class="input-field col s6">
                            <input type="number" placeholder="Add Calories" name="calorie" id="item-calories">
                            <label for="item-calories">Calories</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn add-btn blue darken-3" name="submit"><i class="fa fa-plus"></i> Add Meal</button>
                        <button class="btn update-btn orange"><i class="fa fa-pencil-square-o"></i> Update Meal</button>
                        <button class="btn delete-btn red"><i class="fa fa-remove"></i> Delete Meal</button>
                        <button class="btn back-btn grey pull-right"><i class="fa fa-chevron-circle-left"></i>
                            Back</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Calories count -->
        <h3 class="center-align">Total calories: <span class="total-calories">0</span></h3>

        <!-- Item list -->
        <ul id="item-list" class="collection">
            <!-- <li class="collection-item" id="item-0"><strong>Steak:</strong> <em>900 Calories</em>
                <a href=3"" class="secondary-content"><i class="fa fa-pencil"></i></a>
            </li>
            <li class="collection-item" id="item-0"><strong>Egg:</strong> <em>600 Calories</em>
                <a href=3"" class="secondary-content"><i class="fa fa-pencil"></i></a>
            </li>
            <li class="collection-item" id="item-0"><strong>Cookies:</strong> <em>900 Calories</em>
                <a href=3"" class="secondary-content"><i class="fa fa-pencil"></i></a>
            </li> -->
        </ul>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="app.js"></script>
</body>

</html>