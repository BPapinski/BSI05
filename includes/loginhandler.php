<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = htmlspecialchars($_POST["login"]);
        $password = htmlspecialchars($_POST["haslo"]);
    
        if($login == "Login" && $password == "Haslo123!"){
            $_SESSION["loggedIn"] = true;
            header("Location: ../index.php");
            exit(); // Zatrzymanie dalszego wykonywania
        }
    }
    else{
        header("Location: ../login.php");
    }