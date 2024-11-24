<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kod PHP w Boxach</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .php-box {
            background-color: #2d2d2d;
            color: #f8f8f2;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-family: "Courier New", Courier, monospace;
            font-size: 16px;
            overflow-x: auto;
        }
        .php-box::before {
            content: "PHP Code:";
            display: block;
            color: #66d9ef;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .output {
            background-color: #fff;
            color: #333;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .output h2 {
            color: #444;
        }
        .output p {
            margin: 5px 0;
        }
        .output span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        login.php
        <div class="php-box">
            &lt;body&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="container"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;form action="includes/loginhandler.php" method="post" onsubmit="return Login()"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="form-item" id="form-name"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&gt;&lt;p&gt;Login&lt;/p&gt;&lt;/label&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="text" id="login" name="login" placeholder="Login..." value="Login"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="form-item" id="form-password"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&gt;&lt;p&gt;Hasło&lt;/p&gt;&lt;/label&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input id="haslo" type="password" name="haslo" value="Haslo123!"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="submit" value="Submit"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/form&gt;<br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="go-back-container"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="button" href="https://bpapinski.github.io/BSI/Index/index.html"&gt;See Pages List&lt;/a&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;script src="script.js"&gt;&lt;/script&gt;<br>
            &lt;/body&gt;
        </div>
        
        formhandler.php
        <div class="php-box">
            &lt;?php<br>
            &nbsp;&nbsp;&nbsp;&nbsp;session_start();<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header("Location: login.php"); <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit();<br>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;if ($_SERVER["REQUEST_METHOD"] == "POST") {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$firstname = htmlspecialchars($_POST["imie"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$lastname = htmlspecialchars($_POST["nazwisko"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$street = htmlspecialchars($_POST["ulica"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$houseNumber = htmlspecialchars($_POST["nrDomu"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$flatNumber = htmlspecialchars($_POST["nrMieszkania"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$phoneNumber = htmlspecialchars($_POST["nrTelefonu"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$birthDate = isset($_POST["dataUrodzenia"]) ? htmlspecialchars($_POST["dataUrodzenia"]) : '';<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$password = htmlspecialchars($_POST["haslo"]);<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$hasLicense = isset($_POST["prawoJazdy"]) ? 'Tak' : 'Nie';<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$gender = isset($_POST["plec"]) ? htmlspecialchars($_POST["plec"]) : 'Nie podano'; <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$city = htmlspecialchars($_POST["Miasto"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$country = htmlspecialchars($_POST["Panstwo"]);<br>
            } else {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header("Location: ../index.php");<br>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            ?&gt;<br><br>

            &lt;div class=&quot;container&quot;&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;Wprowadzone do formularza wartości:&lt;/h2&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Imię:&lt;/span&gt; &lt;?php echo isset($firstname) ? $firstname : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Nazwisko:&lt;/span&gt; &lt;?php echo isset($lastname) ? $lastname : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Ulica:&lt;/span&gt; &lt;?php echo isset($street) ? $street : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Numer domu:&lt;/span&gt; &lt;?php echo isset($houseNumber) ? $houseNumber : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Numer mieszkania:&lt;/span&gt; &lt;?php echo isset($flatNumber) ? $flatNumber : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Numer telefonu:&lt;/span&gt; &lt;?php echo isset($phoneNumber) ? $phoneNumber : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Data urodzenia:&lt;/span&gt; &lt;?php echo isset($birthDate) ? $birthDate : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Prawo jazdy:&lt;/span&gt; &lt;?php echo isset($hasLicense) ? $hasLicense : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Płeć:&lt;/span&gt; &lt;?php echo isset($gender) ? $gender : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Miasto:&lt;/span&gt; &lt;?php echo isset($city) ? $city : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;span&gt;Państwo:&lt;/span&gt; &lt;?php echo isset($country) ? $country : &quot;Nie podano&quot;; ?&gt;&lt;/p&gt;<br>
            &lt;/div&gt;
        </div>
        
        loginhandler.php
        <div class="php-box">
            &lt;?php<br>
            &nbsp;&nbsp;&nbsp;&nbsp;session_start();<br><br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;if($_SERVER["REQUEST_METHOD"] == "POST") {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$login = htmlspecialchars($_POST["login"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$password = htmlspecialchars($_POST["haslo"]);<br><br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($login == "Login" && $password == "Haslo123!") {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$_SESSION["loggedIn"] = true;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header("Location: ../index.php");<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit();<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br><br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            &nbsp;&nbsp;&nbsp;&nbsp;else {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header("Location: ../login.php");<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit();<br>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            
            ?&gt;
        </div>

        logouthandler.php
        <div class="php-box">
            &lt;?php<br>
            &nbsp;&nbsp;&nbsp;&nbsp;session_start();<br>
            &nbsp;&nbsp;&nbsp;&nbsp;session_unset();<br>
            &nbsp;&nbsp;&nbsp;&nbsp;session_destroy();<br><br>

            &nbsp;&nbsp;&nbsp;&nbsp;header("Location: login.php");<br>
            &nbsp;&nbsp;&nbsp;&nbsp;exit();<br>
            ?&gt;
        </div>

        <a href="http://bpapinski2.cba.pl/">back</a>
    </div>
</body>
</html>
