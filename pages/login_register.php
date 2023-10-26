<?php
session_start();
// Połączenie z bazą danych - użyj danych z pliku konfiguracyjnego

// Obsługa logowania
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    // Sprawdź dane logowania, porównaj z danymi w bazie danych
    // Jeśli dane są poprawne, ustaw sesję użytkownika
    // Przekieruj na odpowiednią stronę w zależności od roli użytkownika
}

// Obsługa rejestracji
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    // Pobierz dane z formularza
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $haslo = $_POST["haslo"];
    $rola = $_POST["rola"]; // nauczyciel lub uczen
    $klasa = ($_POST["rola"] == "uczen") ? $_POST["klasa"] : null;

    // Sprawdź czy użytkownik o podanym emailu już istnieje w bazie danych
    // Jeśli nie istnieje, zarejestruj użytkownika, dodaj do bazy danych
    // Po rejestracji, przekieruj użytkownika na stronę logowania
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie i Rejestracja</title>
</head>

<body>
    <h1>Logowanie</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- Formularz logowania -->
        <!-- Pola: email, hasło -->
        <button type="submit" name="login">Zaloguj</button>
    </form>

    <h1>Rejestracja</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- Formularz rejestracji -->
        <!-- Pola: imię, nazwisko, hasło, rola (nauczyciel/uczeń), klasa (tylko dla uczniów) -->
        <button type="submit" name="register">Zarejestruj</button>
    </form>
</body>

</html>