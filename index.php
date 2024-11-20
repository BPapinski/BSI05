<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylized Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .form-item {
            flex: 1 1 100%;
        }
        .form-item label p {
            margin: 0 0 5px;
            font-weight: bold;
            color: #555;
        }
        .form-item input,
        .form-item select {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-item input[type="submit"] {
            background: #007bff;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-item input[type="submit"]:hover {
            background: #0056b3;
        }
        .form-item input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }
        .go-back-container {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        .go-back-container .button {
            padding: 10px 15px;
            text-decoration: none;
            background: #333;
            color: #fff;
            font-size: 14px;
            text-align: center;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .go-back-container .button:hover {
            background: #555;
        }
        .logout-btn {
            background-color: red;
            color: white;
        }
        @media (min-width: 600px) {
            .form-item {
                flex: 1 1 calc(50% - 20px);
            }
            .form-item:last-child {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
    <?php 
        session_start();
        if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
            header("Location: login.php"); 
            exit();
        }
    ?>
    <div class="container">
        <form action="includes/formhandler.php" method="post" onsubmit="return Validate()">
            <div class="form-item" id="form-name">
                <label><p>Imię</p></label>
                <input type="text" id="imie" name="imie" placeholder="Podaj Imię..." value="Bartosz">
            </div>
            <div class="form-item" id="form-surname">
                <label><p>Nazwisko</p></label>
                <input type="text" id="nazwisko" name="nazwisko" placeholder="Podaj Nazwisko..." value="Papiński">
            </div>
            <div class="form-item" id="form-street">
                <label><p>Ulica</p></label>
                <input type="text" id="ulica" name="ulica" placeholder="Podaj Ulicę..." value="Nowoursynowska">
            </div>
            <div class="form-item" id="form-house-number">
                <label><p>Numer Domu</p></label>
                <input type="text" id="nrDomu" name="nrDomu" placeholder="Podaj Numer Domu..." value="161C">
            </div>
            <div class="form-item" id="form-flat-number">
                <label><p>Numer Mieszkania</p></label>
                <input type="number" id="nrMieszkania" name="nrMieszkania" placeholder="Podaj Numer Mieszkania..." value="11">
            </div>
            <div class="form-item" id="form-phone-number">
                <label><p>Numer Telefonu</p></label>
                <input type="number" id="nrTelefonu" name="nrTelefonu" placeholder="Podaj Numer Telefonu..." value="123123123">
            </div>
            <div class="form-item" id="form-date">
                <label><p>Podaj Datę Urodzenia:</p></label>
                <input id="dataUrodzenia" type="datetime-local" name="dataUrodzenia" value="2024-11-18T00:00" 
                    max="<?php echo date('Y-m-d\TH:i', strtotime('yesterday')); ?>">
            </div>
            <div class="form-item" id="form-license">
                <label><p>Czy posiadasz prawo jazdy?</p></label>
                <input type="checkbox" id="prawoJazdy" name="prawoJazdy">
            </div>
            <div class="form-item" id="form-password">
                <label><p>Hasło</p></label>
                <input id="haslo" type="password" name="haslo" value="Haslo123!">
            </div>
            <div class="form-item">
                <label for="plec"><p>Płeć:</p></label>
                <select name="plec" id="plec">
                    <option value="Mężczyzna">Mężczyzna</option>
                    <option value="Kobieta">Kobieta</option>
                </select>
            </div>
            <div class="form-item" id="form-city">
                <label><p>Miasto:</p></label>
                <input type="text" id="Miasto" name="Miasto" placeholder="..." value="Warszawa">
            </div>
            <div class="form-item" id="form-country">
                <label><p>Państwo:</p></label>
                <input type="text" id="Panstwo" name="Panstwo" placeholder="..." value="Polska">
            </div>
            <div class="form-item">
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="form-item">
            <form action="logouthandler.php" method="POST">
                <input type="submit" value="Logout" class="logout-btn">
            </form>
        </div>
        <div class="go-back-container">
            <a class="button" href="https://bpapinski.github.io/BSI/Index/index.html">See Pages List</a>
            <a class="button" href="login.php">Login Form</a>
            <a class="button" href="code.php">View Code</a>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
