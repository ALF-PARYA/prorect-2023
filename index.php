<?php
include 'includes/var.php';
include 'includes/func.php';
include 'includes/header.php';

?>

    <div class="d-flex justify-content-center ">
<?php

foreach ($bonnets as $key => $bonnet) {
    if ($key < 3) {
        rebond($bonnet);
    }
} ?>
</div>
<a class="button d-flex justify-content-center " href="list.php">Voir tout les produits</a>
<?php
include 'includes/footer.php';
?>