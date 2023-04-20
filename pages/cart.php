<?php

$total = 0;

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$type = 'inc';
if (isset($_GET['type'])) {
    $type = $_GET['type'];
}
if ($type == 'rem') {
    $_SESSION['cart'] = [];
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cart = &$_SESSION['cart'];

    if (!isset($cart[$id])) {
        $cart[$id] = 0;
    }


    if ($type == 'dec') {
        $cart[$id]--;
    } else {
        $cart[$id]++;
    }
}

// var_dump($_SESSION['cart']);
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
    // CECI EST POUR AFFICHER LES INFO !
    // var_dump($bonnets);
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $bonnet = $bonnets[$id];
        $sousTotal = $quantity * $bonnet->getPrice();

        ?>

        <tr>
            <td>
                <?php echo $id ?>
            </td>
            <td>
                <?php echo $bonnet->getName() ?>
            </td>
            <td>
                <?php echo $bonnet->getPrice() ?>
            </td>
            <td>


                <a class="text-decoration-none text-xl text-dark font-weight-bold"
                    href="?page=cart&id=<?php echo $id; ?>&type=dec"> - </a>

                <?php echo $quantity ?>

                <a class="text-decoration-none text-xl text-dark font-weight-bold" href="?page=cart&id=<?php echo $id; ?>">
                    + </a>



            </td>

            <td>
                <?php echo $sousTotal ?> €
            </td>
            <?php $total += $sousTotal ?>
        </tr>

        <?php
    }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <?php echo $total ?>€
        </td>
    </tr>
</table>

<a class="btn btn-primary" href="?page=cart&type=rem">vider le panier</a>