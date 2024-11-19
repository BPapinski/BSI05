<!DOCTYPE html>
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
        <form action="includes/loginhandler.php" method="post" onsubmit="return Login()">
            <div class="form-item" id="form-name">
                <label><p>Login</p></label><br>
                <input type="text" id="login" name="login" placeholder="Login..." value="Login"><br>
            </div>
            <div class="form-item" id="form-password">
                <label><p>Hasło</p></label><br>
                <input id="haslo" type="password" name="haslo" value="Haslo123!"><br>
            </div>  
            <div>
                <input type="submit" value="Submit">
            </div>         
        </form>
        
        <div class="go-back-container">
            <a class="button" href="https://bpapinski.github.io/BSI/Index/index.html">See Pages List</a>
        </div> 
    </div>
    <script src="script.js"></script>
</body>
</html>