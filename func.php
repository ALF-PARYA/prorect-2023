<?php


function displayBonnets(array $bonnet)
{
    ?>
    <tr>
        <td>
            <?php echo $bonnet[0]; ?>
        </td>
        <?php
        $couleur = 'c2';
        if ($bonnet[1] <= 12) {
            $couleur = 'c1';
        } ?>


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