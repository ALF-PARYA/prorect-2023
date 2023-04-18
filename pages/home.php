
    <div class="d-flex justify-content-center ">
<?php

foreach ($bonnets as $key => $bonnet) {
    if ($key < 3) {
        rebond($bonnet,$key);
    }
} ?>
</div>
<a class="button d-flex justify-content-center " href="?page=list">Voir tout les produits</a>
