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
            max-width: 800px;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Przykładowe Boxy na Kod PHP</h1>
        
        <div class="php-box">
            &lt;?php // placeholder ?>
        </div>

        <div class="php-box">
            &lt;?php // placeholder ?>
        </div>

        formhandler
        <div class="php-box">
            &lt;?php // placeholder ?>
        </div>

        login.php<br>
        <div class="php-box">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html lang="en"&gt;<br>
            &lt;head&gt;<br>
            &lt;meta charset="UTF-8"&gt;<br>
            &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
            &lt;title&gt;Document&lt;/title&gt;<br>
            &lt;link rel="stylesheet" href="aboutStyle.css"&gt;<br>
            &lt;link rel="stylesheet" href="reset.css"&gt;<br>
            &lt;/head&gt;<br>
            &lt;body&gt;<br>
            &nbsp;&nbsp;&lt;div class="container"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;form action="includes/loginhandler.php" method="post" onsubmit="return Login()"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="form-item" id="form-name"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&gt;&lt;p&gt;Login&lt;/p&gt;&lt;/label&gt;&lt;br&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="text" id="login" name="login" placeholder="Login..." value="Login"&gt;&lt;br&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="form-item" id="form-password"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&gt;&lt;p&gt;Hasło&lt;/p&gt;&lt;/label&gt;&lt;br&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input id="haslo" type="password" name="haslo" value="Haslo123!"&gt;&lt;br&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="submit" value="Submit"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;/form&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="go-back-container"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a class="button" href="https://bpapinski.github.io/BSI/Index/index.html"&gt;See Pages List&lt;/a&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
            &nbsp;&nbsp;&lt;/div&gt;<br>
            &lt;script src="script.js"&gt;&lt;/script&gt;<br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        
        loginhandler.php
        <div class="php-box">
            &lt;?php<br>
            &nbsp;&nbsp;&nbsp;&nbsp;session_start();<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;if($_SERVER["REQUEST_METHOD"] == "POST"){<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$login = htmlspecialchars($_POST["login"]);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$password = htmlspecialchars($_POST["haslo"]);<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($login == "Login" && $password == "Haslo123!"){<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$_SESSION["loggedIn"] = true;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header("Location: ../index.php");<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(); // Zatrzymanie dalszego wykonywania<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            &nbsp;&nbsp;&nbsp;&nbsp;else{<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header("Location: ../login.php");<br>
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

    </div>
</body>
</html>
