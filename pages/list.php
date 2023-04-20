<?php

$beaniesFiltered = $beanies;

var_dump($_POST);
if(!empty($_POST['minPrice']))

$minPrice = floatval($_POST['minPrice']);
  $beaniesFiltered = array_filterbeaniesFiltered,function(Beanie $beanie){

    return $beanie->getPrice() >= $minPrice;

  });

?>


<div class="d-flex justify-content-center">
<form action="" method="post">
  <select class="custom-select" name="sizes" id="inputGroupSelect02">
    <option selected>taille</option>
    <?php 
      foreach(Beanie::SIZES_AVAILLABLES as $size){

          echo '<option value="'.$size.'">'.$size.'</option>';

      }

      
    ?>
  
  </select>

  <select class="custom-select" id="inputGroupSelect02" name="material">
    <option selected>matière</option>
    <?php 
      foreach(Beanie::MATERIALS as $material){
          echo '<option value="'.$material.'">'.$material.'</option>';
      }
    ?>

   
  </select>
  </form>

<div class="d-flex justify-content-center mt-5">
    <?php
    foreach ($bonnets as $key => $bonnet) {
        rebond($bonnet, $key);
    } ?>


</div>
