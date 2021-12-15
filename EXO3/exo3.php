<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 9 EXO 3</title>
</head>

<body>
    <?php
    $date1 = date('Y-m-d'); // Date du jour
    setlocale(LC_ALL, 'fr_FR', 'French');
    echo utf8_encode(strftime('%A %d %B %Y', strtotime($date1)));
    ?>

</body>

</html>