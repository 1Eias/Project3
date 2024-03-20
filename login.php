<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="icon" type="image/logo" href="assets/images/chirpify-logo.png">
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

            let popup2 = document.getElementById('popup2')
            popup2.classList.toggle('active')
        }
    </script>

    <div class="registration-popup" id="popup2">
        <a href="login.php"><label for="" class="close-btn1 fa-solid fa-xmark"></label></a>
        <i class="fa-solid fa-dove"></i>
        <h2 class="chirp-regi">Account aanmaken</h2>
        <form action="">
            <label for="firstname-lastname" class="fname-lname">
                <input class="fname-input" type="text" placeholder="Voornaam">
                <input class="lname-input" type="text" placeholder="Achternaam">
            </label>
            <br>
            <label for="e_mail-number">
                <input class="mail-number-input" type="text" placeholder="E-Mail of telefoonnummer">
            </label>
            <br>
            <label for="username">
                <input class="username-input" type="text" placeholder="Gebruikersnaam">
            </label>
            <br>
            <label for="password">
                <input class="password-input" type="password" placeholder="Wachtwoord">
            </label>
            <p class="birthdate-text">Geboortedatum</p>
            <div class="birthdate">
                <label for="birthday-month">
                    <select class="month">
                        <option value="month">Maand</option>
                        <option value="month">Januari</option>
                        <option value="month">Februari</option>
                        <option value="month">Maart</option>
                        <option value="month">April</option>
                        <option value="month">Mei</option>
                        <option value="month">Juni</option>
                        <option value="month">Juli</option>
                        <option value="month">Augustus</option>
                        <option value="month">September</option>
                        <option value="month">Oktober</option>
                        <option value="month">November</option>
                        <option value="month">December</option>
                    </select>
                </label>
                <label for="birthday-day">
                    <select class="days">
                        <option value="days">Dag</option>
                        <option value="days">01</option>
                        <option value="days">02</option>
                        <option value="days">03</option>
                        <option value="days">04</option>
                        <option value="days">05</option>
                        <option value="days">06</option>
                        <option value="days">07</option>
                        <option value="days">08</option>
                        <option value="days">09</option>
                        <option value="days">10</option>
                        <option value="days">11</option>
                        <option value="days">12</option>
                        <option value="days">13</option>
                        <option value="days">14</option>
                        <option value="days">15</option>
                        <option value="days">16</option>
                        <option value="days">17</option>
                        <option value="days">18</option>
                        <option value="days">19</option>
                        <option value="days">20</option>
                        <option value="days">21</option>
                        <option value="days">22</option>
                        <option value="days">23</option>
                        <option value="days">24</option>
                        <option value="days">25</option>
                        <option value="days">26</option>
                        <option value="days">27</option>
                        <option value="days">28</option>
                        <option value="days">29</option>
                        <option value="days">30</option>
                        <option value="days">31</option>
                    </select>
                </label>
                <label for="birthday-year">
                    <select class="year">
                        <option value="year">Jaar</option>
                        <option value="year">2024</option>
                        <option value="year">2023</option>
                        <option value="year">2022</option>
                        <option value="year">2021</option>
                        <option value="year">2020</option>
                        <option value="year">2019</option>
                        <option value="year">2018</option>
                        <option value="year">2017</option>
                        <option value="year">2016</option>
                        <option value="year">2015</option>
                        <option value="year">2014</option>
                        <option value="year">2013</option>
                        <option value="year">2012</option>
                        <option value="year">2011</option>
                        <option value="year">2010</option>
                        <option value="year">2009</option>
                        <option value="year">2008</option>
                        <option value="year">2007</option>
                        <option value="year">2006</option>
                        <option value="year">2005</option>
                        <option value="year">2004</option>
                        <option value="year">2003</option>
                        <option value="year">2002</option>
                        <option value="year">2001</option>
                        <option value="year">2000</option>
                        <option value="year">1999</option>
                        <option value="year">1998</option>
                        <option value="year">1997</option>
                        <option value="year">1996</option>
                        <option value="year">1995</option>
                        <option value="year">1994</option>
                        <option value="year">1993</option>
                        <option value="year">1992</option>
                        <option value="year">1991</option>
                        <option value="year">1990</option>
                        <option value="year">1989</option>
                        <option value="year">1988</option>
                        <option value="year">1987</option>
                        <option value="year">1986</option>
                        <option value="year">1985</option>
                        <option value="year">1984</option>
                        <option value="year">1983</option>
                        <option value="year">1982</option>
                        <option value="year">1981</option>
                        <option value="year">1979</option>
                        <option value="year">1978</option>
                        <option value="year">1977</option>
                        <option value="year">1976</option>
                        <option value="year">1975</option>
                        <option value="year">1974</option>
                        <option value="year">1973</option>
                        <option value="year">1972</option>
                        <option value="year">1971</option>
                        <option value="year">1970</option>
                        <option value="year">1969</option>
                        <option value="year">1968</option>
                        <option value="year">1967</option>
                        <option value="year">1966</option>
                        <option value="year">1965</option>
                        <option value="year">1964</option>
                        <option value="year">1963</option>
                        <option value="year">1962</option>
                        <option value="year">1961</option>
                        <option value="year">1960</option>
                        <option value="year">1959</option>
                        <option value="year">1958</option>
                        <option value="year">1957</option>
                        <option value="year">1956</option>
                        <option value="year">1955</option>
                        <option value="year">1954</option>
                        <option value="year">1953</option>
                        <option value="year">1952</option>
                        <option value="year">1951</option>
                        <option value="year">1950</option>
                        <option value="year">1949</option>
                        <option value="year">1948</option>
                        <option value="year">1947</option>
                        <option value="year">1946</option>
                        <option value="year">1945</option>
                        <option value="year">1944</option>
                        <option value="year">1943</option>
                        <option value="year">1942</option>
                        <option value="year">1941</option>
                        <option value="year">1940</option>
                        <option value="year">1939</option>
                        <option value="year">1938</option>
                        <option value="year">1937</option>
                        <option value="year">1936</option>
                        <option value="year">1935</option>
                        <option value="year">1934</option>
                        <option value="year">1933</option>
                        <option value="year">1932</option>
                        <option value="year">1931</option>
                        <option value="year">1930</option>
                    </select>
                </label>
            </div>
            <br>
            <button class="register-account">Registreren</button>
        </form>
    </div>


    <div class="login-popup" id="popup">
        <a href="login.php"><label for="" class="close-btn fa-solid fa-xmark"></label></a>
        <form  action="">
            <i class="fa-solid fa-dove"></i>
        <h2 class="chirp-login">Inloggen</h2>
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