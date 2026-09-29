<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz 2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpeg" href="zformularz2.jpg">
</head>
<body style="background-image: url('zformularz2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">

    <header>
        <h1>KACPER HEBEL FORMULARZE</h1>
    </header>

    <div class="container">
        <h2>Formularz 2 (Zainteresowania)</h2>
        <form action="wynik2.php" method="POST" target="_blank">
            <label>Wybierz zainteresowanie:</label>
            <select name="zainteresowanie" required>
                <option value="Sport">Sport</option>
                <option value="Muzyka">Muzyka</option>
                <option value="Gry komputerawe">Gry komputerowe</option>
                <option value="Książki">Książki</option>
            </select>

            <button type="submit">Wyślij</button>
        </form>
        <p><a href="index.php" class="przycisk">Powrót do menu</a></p>
    </div>

</body>
</html>