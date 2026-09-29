<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik Formularza 1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpeg" href="zformularz1.jpg">
</head>
<body style="background-image: url('zformularz1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">

    <header>
        <h1>KACPER HEBEL FORMULARZE</h1>
    </header>

    <div class="container">
        <h2>Wynik</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $osoba = htmlspecialchars($_POST['osoba']);
            $wiek = htmlspecialchars($_POST['wiek']);
            
            // Dokładnie ten komunikat ze zdjęcia w ramce wynikowej
            echo "<div class='wynik'>Wysłano: <b>$osoba</b> ($wiek lat)</div>";
        } else {
            echo "<p>Brak danych do wyświetlenia.</p>";
        }
        ?>
        <p><a href="index.php" class="przycisk">Strona główna</a></p>
    </div>

</body>
</html>