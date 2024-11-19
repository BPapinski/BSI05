<?php
session_start(); // Rozpocznij sesję
session_unset(); // Usuwamy wszystkie zmienne sesji
session_destroy(); // Kończymy sesję

// Po wylogowaniu, przekierowanie na stronę logowania
header("Location: login.php");
exit(); // Zatrzymanie dalszego wykonywania
?>