<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik Formularza 3</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpeg" href="zformularz3.jpg">
</head>
<body style="background-image: url('zformularz3.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">

    <header>
        <h1>KACPER HEBEL FORMULARZE</h1>
    </header>

    <div class="container">
        <h2>Wynik</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $wiadomosc = nl2br(htmlspecialchars($_POST['wiadomosc']));
            
            echo "<div class='wynik'>Treść wiadomości:<br><b>$wiadomosc</b></div>";
        } else {
            echo "<p>Brak danych do wyświetlenia.</p>";
        }
        ?>
        <p><a href="index.php" class="przycisk">Strona główna</a></p>
    </div>

</body>
</html>