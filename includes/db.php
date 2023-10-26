<?php
$host = "localhost"; // adres hosta bazy danych
$username = "root"; // nazwa użytkownika bazy danych
$password = "binary"; // hasło do bazy danych
$database = "dzienniczek"; // nazwa bazy danych

// Połączenie z bazą danych
$conn = new mysqli($host, $username, $password, $database);

// Sprawdź połączenie
if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}
?>
