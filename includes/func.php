<?php

function rebond(Beanie $v , int $id): void
{
    ?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $v ->getImagePath(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Nom:
                <?php echo $v->getName(); ?>
            </p>
            <p class="card-text">prix:
                <?php echo $v->getPrice(); ?>€
            </p>
            <p class="card-text">prix HT:
                <?php echo $v->getPrice(); ?>€
            </p>
            <p class="card-text">
                <?php echo $v->getDescript(); ?>
            </p>
            <a class="btn btn-primary" href="?page=cart&id=<?php echo $id; ?>"> Ajouter au panier</a>
        </div>

    </div>

    <?php
} ?>
