<?php // nie trzeba domykac bo caly plik bedzie php     
    session_start();
    
    if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
        header("Location: login.php"); // Przekieruj na login jeśli nie jest zalogowany
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $firstname = htmlspecialchars($_POST["imie"]);

        $lastname = htmlspecialchars( $_POST["nazwisko"]);
        $street = htmlspecialchars($_POST["ulica"]);
        $houseNumber = htmlspecialchars($_POST["nrDomu"]);
        $flatNumber = htmlspecialchars($_POST["nrMieszkania"]);
        $phoneNumber = htmlspecialchars($_POST["nrTelefonu"]);
        $birthDate = isset($_POST["dataUrodzenia"]) ? htmlspecialchars($_POST["dataUrodzenia"]) : '';
        $password = htmlspecialchars($_POST["haslo"]);

        $hasLicense = isset($_POST["prawoJazdy"]) ? 'Tak' : 'Nie';
        $gender = isset($_POST["plec"]) ? htmlspecialchars($_POST["plec"]) : 'Nie podano'; 
        $city = htmlspecialchars($_POST["Miasto"]);
        $country = htmlspecialchars($_POST["Panstwo"]);
        $password = htmlspecialchars($_POST["haslo"]);

        echo "<h2>Wprowadzone do formularza wartości:</h2>";
        echo "<p>Imię: $firstname</p>";
        echo "<p>Nazwisko: $lastname</p>";
        echo "<p>Ulica: $street</p>";
        echo "<p>Numer Domu: $houseNumber</p>";
        echo "<p>Numer Mieszkania: $flatNumber</p>";
        echo "<p>Numer Telefonu: $phoneNumber</p>";
        echo "<p>Data Urodzenia: $birthDate</p>";
        echo "<p>Haslo: $password</p>";
        echo "<p>Prawo Jazdy: $hasLicense</p>";
        echo "<p>Płeć: $gender</p>";
        echo "<p>Miasto: $city</p>";
        echo "<p>Państwo: $country</p>";
        
        echo '<button onclick="window.history.back()">Powrót</button>';
    }
    else{
        header("Location: ../index.php");
    }
    
