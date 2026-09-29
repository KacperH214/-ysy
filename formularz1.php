<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz 1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpeg" href="zformularz1.jpg">
</head>
<body style="background-image: url('zformularz1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">

    <header>
        <h1>KACPER HEBEL FORMULARZE</h1>
    </header>

    <div class="container">
        <h2>Formularz 1 (Dane osobowe)</h2>
        <!-- Wysyłamy dane do wynik1.php i otwieramy nową kartę -->
        <form action="wynik1.php" method="POST" target="_blank">
            <label>Imię i nazwisko:</label>
            <input type="text" name="osoba" value="Kacper Hebel" required>

            <label>Wiek:</label>
            <input type="number" name="wiek" required>

            <button type="submit">Wyślij</button>
        </form>
        <p><a href="index.php" class="przycisk">Powrót do menu</a></p>
    </div>

</body>
</html>