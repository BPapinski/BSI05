<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aboutStyle.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body>    
    <div class="container">
        <form action="includes/formhandler.php" method="post" onsubmit="return Validate()">
            <div class="form-item" id="form-name">
                <label><p>Imię</p></label><br>
                <input type="text" id="imie" name="imie" placeholder="Podaj Imię..." value="Bartosz"><br>
            </div>
            <div class="form-item" id="form-surname">
                <label><p>Nazwisko</p></label><br>
                <input type="text" id="nazwisko" name="nazwisko" placeholder="Podaj Nazwisko..." value="Papiński"><br>
            </div>
            <div class="form-item" id="form-street">
                <label><p>Ulica</p></label><br>
                <input type="text" id="ulica" name="ulica" placeholder="Podaj Ulicę..." value="Nowoursynowska"><br>
            </div>
            <div class="form-item" id="form-house-number">
                <label><p>Numer Domu</p></label><br>
                <input type="text" id="nrDomu" name="nrDomu" placeholder="Podaj Numer Domu..." value="161C"><br>
            </div>
            <div class="form-item" id="form-flat-number">
                <label><p>Numer Mieszkania</p></label><br>
                <input type="number" id="nrMieszkania" name="nrMieszkania" placeholder="Podaj Numer Mieszkania..." value="11"><br>
            </div>
            <div class="form-item" id="form-phone-number">
                <label><p>Numer Telefonu</p></label><br>
                <input type="number" id="nrTelefonu" name="nrTelefonu" placeholder="Podaj Numer Telefonu..." value="123123123"><br>
            </div>
            <div class="form-item" id="form-date">
                <label><p>Podaj Date Urodzenia:</p></label><br>
                <input id="dataUrodzenia" type="datetime-local" name="dataUrodzenia" value="2024-11-18T00:00" 
                    max="<?php echo date('Y-m-d\TH:i', strtotime('yesterday')); ?>"><br>
            </div>
            <div class="form-item" id="form-license">
                <label><p>Czy posiadasz prawo jazdy ?</p></label>
                <input type="checkbox"><br>
            </div>
            <div class="form-item" id="form-password">
                <label><p>Hasło</p></label><br>
                <input id="haslo" type="password" name="haslo" value="Haslo123!"><br>
            </div>           
            <div class="form-item">
                <label for="plec"><p>Płeć:</p></label>
                <select name="plec" id="plec">
                    <option value="Mężczyzna">Mężczyzna</option>
                    <option value="Kobieta">Kobieta</option>
                </select>
            </div>
            <div class="form-item" id="form-city">
                <label><p>Miasto:</p></label><br>
                <input type="text" id="Miasto" name="Miasto" placeholder="..." value="Warszawa"><br>
            </div>
            <div class="form-item" id="form-country">
                <label><p>Państwo:</p></label><br>
                <input type="text" id="Panstwo" name="Panstwo" placeholder="..." value="Polska"><br>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="go-back-container">
            <a class="button" href="https://bpapinski.github.io/BSI/Index/index.html">See Pages List</a>
            <a class="button" href="login.php">Login Form</a>
            <a class="button" href="code.php">View Code</a>
            <form action="logouthandler.php" method="POST">
                <button type="submit">Wyloguj się</button>
            </form>
        </div> 
    </div>
    <script src="script.js"></script>
</body>
</html>