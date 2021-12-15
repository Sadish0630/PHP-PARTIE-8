<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 9 EXO 5</title>
</head>

<body>
    <?php
    $date1 = new DateTime('2016-05-16');
    $date2 = new DateTime('2021-12-14');
    $diff = $date2->diff($date1)->format('%a');
    echo $diff;
    ?>
</body>

</html>