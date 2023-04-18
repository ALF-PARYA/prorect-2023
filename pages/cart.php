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




foreach ($_SESSION['cart'] as $id) {
    ?>

    <table class="table">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prix</th>
            <th>quantité</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </tr>

    </table>
    <?php
}
?>