<?php
include 'includes/header.php';

?>

    <div class="d-flex justify-content-center">
        <?php
        foreach ($bonnets as $key => $bonnet) {
            rebond($bonnet);
        } ?>

</div>

    <?php
include 'includes/footer.php';
?>