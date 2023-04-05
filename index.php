<?php
$lorem = 'lorem dioljsqjdqihqs_çhzm';
$bonnets =
[
    ['Bonnet en laine' ,10, $lorem],
    ['Bonnet en laine bio' , 14, $lorem],
    ['Bonnet en laine et cachemire' , 20, $lorem],
    ['Bonnet arc-en-ciel' , 12, $lorem],
];
function displayBonnets(array $bonnet){
    ?><tr>
    <td>
        <?php echo $bonnet[0]; ?>
    </td>
    <?php 
    $couleur = 'c2';
        if($bonnet[1]<= 12 ){ 
            $couleur = 'c1' ;
        }?>
    
   
    <td class="<?php echo $couleur ?>">
        <?php echo $bonnet[1] . '€'; ?> 
    </td>
    <td>
        <?php echo number_format($bonnet[1] / 1.2, 2); ?>
    </td>
    <td>
        <?php echo $bonnet[2]; ?>
    </td>
</tr>
<?php
};

    

    

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