<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="hero">
        <div class="form-box">

            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required>
                <img class="icon"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARlJREFUSEvVlNENwjAMRK+bwCYwCTAJMAlsApvAJqAn2VIanDgC9YNI+Wij3LMvtictvKaF9TUKWEm6SNpIeto+S7pnAY4A9iZeawG6SgLUXBmAiG92+2RiZLOTxDeQQy+TDIAtZODiZaSeGTZtWylkgIckIl5btKUO/zknC87D9QsAwZepNnUyAP7zDpFFR/vPQ/MOX2VQ2uAVUz4yovjfLNcsAwQ80ihCIgf8dZn6xUUbLWvW7nlmEfbwyOyokylR/G92cwuAIE2GNSOr2dERoBwPvVEAnO1ZhhUVAbx7u/VdpFXPpllX14Ch+RJ4VlbZrClrgA+3tL4DiFs7G341oDfcsscOh18NSIdXQvm4n/VBFnV6/v+AN6JNRBkvTuT5AAAAAElFTkSuQmCC" />
                <input type="password" class="input-field" placeholder="Password" required>
                <img class="icon"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAANNJREFUSEvtlcsNwjAQRF86gU6gEqASoBKgktAJdAIaaSMRsWacoCiX+AKKvfP2azdMvJqJ9akFbIAdoF+tJ3AG7s7BGsAeuBSETgEqchxAHrdhLbFb/Fc0Aq+AdUSUQhxA4oJknh7j+xU4lEJwgFcYZufk/SO8VxSjIvgFkKDbt13kBNz+PAAVVQXset61erevmfiajax4KpwKOGYJsv00zABdXscAZNPTXABZGpcU2eaaP0X/DJpeut7Nms2Brgi9YEOnufqqsEkecsA9OEO00rNvDegoGSs/Xn8AAAAASUVORK5CYII=" />
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit">Log in</button>
            </form>



            <form method="POST" action="../model/traitement.php" id="register" class="input-group"><!--method="POST" action="traitement.php"  -->

                <div class="formc ">
                    <input type="text" id="username" class="input-field " name="username" placeholder="User ID">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation"></i>
                    <small>Message d'erreur</small>
                </div>
                <div class="formc ">
                    <input type="email" id="email" class="input-field" name="email" placeholder="email">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation"></i>
                    <small>Message d'erreur</small>
                </div>
                <div class="formc">
                    <input type="password" id="password" class="input-field" name="pass" placeholder="Enter Password">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation"></i>
                    <small>Message d'erreur</small>

                </div>
                <div class="formc">
                    <input type="password" id="cpassword" class="input-field" name="cpassword"
                        placeholder="Confirm Password">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation"></i>
                    <small>Message d'erreur</small>
                </div>
                <input type="submit" class="submit" name="submit" value="Register">

            </form>
        </div>

        <script>
            const x = document.getElementById("login");
            const y = document.getElementById("register");
            const z = document.getElementById("btn");
            function register() {
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login() {
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }  
        </script>


        <script src="../controller/main.js"></script>
        
    </div>



</body>

</html>