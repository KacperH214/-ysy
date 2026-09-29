<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz 3</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpeg" href="zformularz3.jpg">
</head>
<body style="background-image: url('zformularz3.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">

    <header>
        <h1>KACPER HEBEL FORMULARZE</h1>
    </header>

    <div class="container">
        <h2>Formularz 3 (Wiadomość)</h2>
        <form action="wynik3.php" method="POST" target="_blank">
            <label>Treść wiadomości:</label>
            <textarea name="wiadomosc" rows="4" required></textarea>

            <button type="submit">Wyślij</button>
        </form>
        <p><a href="index.php" class="przycisk">Powrót do menu</a></p>
    </div>

</body>
</html>