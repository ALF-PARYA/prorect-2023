<?php


/* function displayBonnets(array $bonnet)
{
?>
<tr>
<td class="col-2">
<?php echo $bonnet[0]; ?>
</td>
<?php
$couleur = 'c2';
if ($bonnet[1] <= 12) {
$couleur = 'c1';
} ?>
<td class="col-2" <?php echo $couleur ?>">
<?php echo $bonnet[1] . '€'; ?>
</td>
<td class="col-2">
<?php echo number_format($bonnet[1] / 1.2, 2); ?>
</td>
<td class="col-2">
<?php echo $bonnet[2]; ?>
</td>
<td class="col-4">
<img class="w-50" src="<?php echo $bonnet[3]; ?>" alt="#">
</td>
</tr>
<?php
};*/

function rebond(array $bonnet)
{
    ?>


        <div class="card" style="width: 18rem;">
            <img src="<?php echo $bonnet[3]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Nom: <?php echo $bonnet[0]; ?> </p>
                <p class="card-text">prix: <?php echo $bonnet[1]; ?>€ </p>
                <p class="card-text">prix HT: <?php echo $bonnet[1]; ?>€ </p>
                <p class="card-text"><?php echo $bonnet[2]; ?></p>
            </div>
            
        </div>
    
    <?php
}