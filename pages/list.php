<?php

if (!empty($_POST['minPrice'])) {

  $minPrice = floatval($_POST['minPrice']);
  $bonnets = array_filter($bonnets, function (Beanie $beanie) use ($minPrice) {

    return $beanie->getPrice() >= $minPrice;

  });
}

if (!empty($_POST['maxPrice'])) {

  $maxPrice = floatval($_POST['maxPrice']);
  $bonnets = array_filter($bonnets, function (Beanie $beanie) use ($maxPrice) {

    return $beanie->getPrice() <= $maxPrice;

  });
}

if (!empty($_POST['material'])) {

  $material = $_POST['material'];
  $bonnets = array_filter($bonnets, function (Beanie $beanie) use ($material) {

    return in_array($material , $beanie->getMatieres());

  });
}

if (!empty($_POST['sizes'])) {

  $sizes = $_POST['sizes'];
  $bonnets = array_filter($bonnets, function (Beanie $beanie) use ($sizes) {

    return in_array($sizes , $beanie->getTailles());

  });
}
?>


<div class="d-flex justify-content-center">
  <form action="" method="post">
    <select class="custom-select" name="sizes" id="inputGroupSelect02">
      <option selected value="">taille</option>
      <?php
      foreach (Beanie::SIZES_AVAILLABLES as $size) {

        echo '<option value="' . $size . '">' . $size . '</option>';

      }


      ?>

    </select>

    <select class="custom-select" id="inputGroupSelect02" name="material">
      <option selected value="">matière</option>
      <?php
      foreach (Beanie::MATERIALS as $material) {
        echo '<option value="' . $material . '">' . $material . '</option>';
      }
      ?>


    </select>
    <input type="number" name="minPrice" id="minPrice" placeholder="prix min">
    <input type="number" name="maxPrice" id="maxPrice" placeholder="prix max">
    <button type="submit">filtrer</button>
  </form>
</div>

<div class="d-flex justify-content-center mt-5">
  <?php
  foreach ($bonnets as $key => $bonnet) {
    rebond($bonnet, $key);
  } ?>


</div>