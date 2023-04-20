<?php
spl_autoload_register(function ($class) { 
    require_once "classes/$class.php";
});

$mdp = 'daw';
$lorem = 'lorem dolores sigmeras';

// $bonnets = 
//     [
//         ['Bonnet en laine', 10, $lorem,'img/bonnet1.png',],
//         ['Bonnet en laine bio', 14, $lorem,'img/bonnet1.png',],
//         ['Bonnet en laine et cachemire', 20, $lorem,'img/bonnet3.png',],
//         ['Bonnet arc-en-ciel', 12, $lorem , 'img/bonnet1.png',],
//     ];

 $bonnets = [
(new Beanie())

->setId(0)
->setName('Bonnet en laine')
->setPrice(10)
->setDescript ($lorem)
->setimagePath ('img/bonnet1.png')
->setTailles (['S','M',])
->setMatieres (['laine',]),

(new Beanie())
->setId(1)
->setName('Bonnet en laine bbio')
->setPrice(14)
->setDescript ($lorem)
->setimagePath ('img/bonnet1.png')
->setTailles (['L','XL',])
->setMatieres (['laine',]),

(new Beanie())
->setId(2)
->setName('Bonnet en laine et cachemire')
->setPrice(20)
->setDescript ($lorem)
->setimagePath ('img/bonnet3.png')
->setTailles (['M','XL',])
->setMatieres (['laine','cachemire',]),

(new Beanie())
->setId(3)
->setName('Bonnet arc-en-ciel')
->setPrice(12)
->setDescript ($lorem)
->setimagePath ('img/bonnet1.png')
->setTailles (['S','M',])
->setMatieres (['laine',]),

];


