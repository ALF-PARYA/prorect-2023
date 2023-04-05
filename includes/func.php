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

    <div class="d-flex">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $bonnet[3]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
    </div>
    <?php
}