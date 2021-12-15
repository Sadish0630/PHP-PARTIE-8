<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 9 EXO 4</title>
</head>

<body>
    <?php
    $t1 = mktime(15, 0, 0, 8, 2, 2016);

    echo "Il s'est écoulé " . time() .  ' secondes depuis le 1er Janvier 1970' . '<br>';
    echo 'Timestamp du Mardi 2 août 2016 15h00 (GMT+1) : ' . $t1 . '<br>';
    ?>
</body>

</html>