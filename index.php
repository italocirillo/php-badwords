<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="censura.php" method="$_GET">
        <!-- Stringa -->
        <label for="stringa">Stringa:</label>
        <textarea type="text-area" id="stringa" name="stringa" rows="4" cols="50" style="vertical-align:middle" placeholder="Inserisci la tua stringa"></textarea>
        <!-- Parola -->
        <label for="parola">Parola da censurare:</label>
        <input type="text" id="parola" name="parola">
        <!-- Bottone -->
        <button type="submit">INVIA</button>
    </form>
</body>

</html>