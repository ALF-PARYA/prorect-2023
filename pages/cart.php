<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cart = &$_SESSION['cart'];

    if (!isset($cart[$id])) {
        $cart[$id] = 0;
    }
    $cart[$id]++;
}

var_dump($_SESSION['cart']);
?>

<table class="table">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prix unitaire</th>
        <th>quantité</th>
        <th>prix total</th>
    </tr>

    <?php
    var_dump($bonnets);
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $bonnet = $bonnets[$id];
        ?>

        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $bonnet[0] ?></td>
            <td><?php echo $bonnet[1] ?></td>
            <td><?php echo $quantity ?> +</td>
            <td><?php echo $quantity * $bonnet[1] ?>€</td>

        </tr>

        <?php
    }
    ?>
</table>