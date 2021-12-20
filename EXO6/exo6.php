<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 9 EXO 6</title>
</head>

<body>
    <?php
    $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
    echo 'Il y avait ' . $number . ' jours en février 2016.';
    ?>

</body>

</html>