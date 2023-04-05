<?php
include 'includes/var.php';
include 'includes/func.php';
include 'includes/header.php';

?>

<?php
foreach ($bonnets as $key => $bonnet) {
    if ($key < 3) {
        rebond($bonnet);
        
    }
} ?>

<?php
include 'includes/footer.php';
?>