<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/login.css">
    <script src="https://kit.fontawesome.com/2f6b0c498f.js" crossorigin="anonymous"></script>
    <title>Inloggen / Chirpify</title>
</head>
<body>
<div class="chirpify">
<div class="login-box" id="blur">
    <div class="login-content">
        <h1 class="big-login">Nu registreren</h1>
        <button class="regi-google"><img src="images/google.png" alt="">Registeren met Google</button>
        <button class="regi-apple"><img src="images/apple.png" alt="">Registeren met Apple</button>
        <hr>
        <span>of</span>
        <button type="submit" class="account-registration">Account aanmaken</button>
        <br>
        <h3>Heb je al een account?</h3>
        <button type="submit" class="login" onclick="toggle()">Inloggen</button>
    </div>
</div>
    <script type="text/javascript">
        function toggle() {
            let blur = document.getElementById('blur')
            blur.classList.toggle('active')
            let popup = document.getElementById('popup')
            popup.classList.toggle('active')
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
        <input type="text" placeholder="Wachtwoord">
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