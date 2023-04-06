<?php

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
}?>

<?php

