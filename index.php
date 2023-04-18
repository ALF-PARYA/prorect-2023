<?php

require_once 'includes/header.php';

$pageToLoad = 'home';

if (isset($_GET['page'])){

    $pageToLoad = $_GET['page'] ;

}

include 'pages/' . $pageToLoad .'.php';
require_once 'includes/footer.php';