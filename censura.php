<?php
$stringa = $_GET["stringa"];
$parolaDaCensurare = $_GET["parola"];
$stringaCensurata = str_replace($parolaDaCensurare, '***', $stringa);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
    <?php
    echo
    "
    <p><strong>La stringa è</strong>: $stringa. <strong>lunghezza: " . strlen($stringa) . "</strong> caratteri</p>
    <p><strong>La parola è</strong>: $parolaDaCensurare <strong> lunghezza: " . strlen($parolaDaCensurare) . "</strong> caratteri </p>

    <h1>Stringa censurata</h1>
    <p>" . $stringaCensurata . "</p>
    <strong>nuova lunghezza: " . strlen($stringaCensurata) . " caratteri</strong>
    "

    ?>
</head>

<body>

</body>

</html>