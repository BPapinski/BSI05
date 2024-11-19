<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }
    .container {
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
        width: 100%;
        max-width: 600px; 
    }
    form {
        display: flex;
        flex-direction: column;
        gap: 25px; 
    }
    .form-item label p {
        font-size: 18px; 
        font-weight: bold;
        margin-bottom: 8px;
    }
    .form-item input {
        padding: 15px; 
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: border-color 0.3s ease;
    }
    .form-item input:focus {
        outline: none;
        border-color: #007bff;
    }
    .form-item input.input-red {
        border-color: red;
    }
    input[type="submit"] {
        background-color: #007bff;
        color: white;
        font-size: 18px; 
        padding: 12px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .go-back-container {
        margin-top: 30px;
        text-align: center;
    }
    .go-back-container .button {
        padding: 12px 18px;
        text-decoration: none;
        background: #333;
        color: white;
        font-size: 16px; 
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }
    .go-back-container .button:hover {
        background-color: #555;
    }
</style>
</head>
<body>
    <div class="container">
        <form action="includes/loginhandler.php" method="post" onsubmit="return Login()">
            <div class="form-item" id="form-name">
                <label><p>Login</p></label>
                <input type="text" id="login" name="login" placeholder="Login..." value="Login">
            </div>
            <div class="form-item" id="form-password">
                <label><p>Hasło</p></label>
                <input id="haslo" type="password" name="haslo" value="Haslo123!">
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
