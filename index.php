<?php
include 'includes/var.php';
include 'includes/func.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr>
            <th>Article</th>
            <th>prix</th>
            <th>prix ht</th>
            <th>description</th>

        </tr>
        <?php
        foreach ($bonnets as $key => $bonnet) {
            displayBonnets($bonnet)
                ?>

            <?php
        } ?>



    </table>

</body>

</html>

