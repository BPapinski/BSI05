
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        p span {
            font-weight: bold;
            color: #333;
        }

        button {
            display: block;
            width: 200px;
            margin: 30px auto 0;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
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
        }
        else{
            header("Location: ../index.php");
        }
    ?>

    <div class="container">
        <h2>Wprowadzone do formularza wartości:</h2>
        <p><span>Imię:</span> <?php echo $firstname; ?></p>
        <p><span>Nazwisko:</span> <?php echo $lastname; ?></p>
        <p><span>Ulica:</span> <?php echo $street; ?></p>
        <p><span>Numer Domu:</span> <?php echo $houseNumber; ?></p>
        <p><span>Numer Mieszkania:</span> <?php echo $flatNumber; ?></p>
        <p><span>Numer Telefonu:</span> <?php echo $phoneNumber; ?></p>
        <p><span>Data Urodzenia:</span> <?php echo $birthDate; ?></p>
        <p><span>Hasło:</span> <?php echo $password; ?></p>
        <p><span>Prawo Jazdy:</span> <?php echo $hasLicense; ?></p>
        <p><span>Płeć:</span> <?php echo $gender; ?></p>
        <p><span>Miasto:</span> <?php echo $city; ?></p>
        <p><span>Państwo:</span> <?php echo $country; ?></p>

        <button onclick="window.history.back()">Powrót</button>
    </div>
</body>
</html>