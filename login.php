<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://kit.fontawesome.com/2f6b0c498f.js" crossorigin="anonymous"></script>
    <title>Inloggen / Chirpify</title>
</head>
<body>

<div class="chirpify">
    <img id="blur2" class="deco" src="assets/images/twitter-background-03.png" alt="">
<div class="login-box" id="blur">
    <div class="login-content">
        <h1 class="chirpify-name">Chirpify</h1>
        <h2 class="big-login">Nu registreren</h2>
        <button class="regi-google"><img src="assets/images/google.png" alt="">Registeren met Google</button>
        <button class="regi-apple"><img src="assets/images/apple.png" alt="">Registeren met Apple</button>
        <hr>
        <span>of</span>
        <button type="submit" class="account-registration" onclick="toggle1()">Account aanmaken</button>
        <br>
        <h3>Heb je al een account?</h3>
        <button type="submit" class="login-button" onclick="toggle()">Inloggen</button>
    </div>
</div>
    <script type="text/javascript">
        function toggle() {
            let blur = document.getElementById('blur')
            blur.classList.toggle('active')

            let blur2 = document.getElementById('blur2')
            blur2.classList.toggle('active')

            let popup = document.getElementById('popup')
            popup.classList.toggle('active')

        }
        function toggle1() {
            let blur = document.getElementById('blur')
            blur.classList.toggle('active')

            let blur2 = document.getElementById('blur2')
            blur2.classList.toggle('active')
        }

    </script>
<div class="login-popup" id="popup">
        <a href="login.php"><label for="" class="close-btn fa-solid fa-xmark"></label></a>
        <form  action="">
            <i class="fa-solid fa-dove"></i>
        <h2 class="chirp-login">Login</h2>
        <label for="username">
        <input type="text" placeholder="E-Mail of gebruikersnaam">
        </label>
        <br>
        <label for="password">
        <input type="password" placeholder="Wachtwoord">
        </label>
        <br>
        <button class="login-account">Inloggen</button>
        <br><br>
        <button class="forget-password">Wachtwoord vergeten?</button>
        <p class="no-account">Heb je geen account? <a class="no-account" href="#">Registreren</a></p>
        </form>
</div>
</div>
</body>
</html>