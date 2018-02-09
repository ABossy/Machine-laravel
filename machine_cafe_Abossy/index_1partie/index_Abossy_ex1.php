<?php
$boissons = array("café", "cappuccino", "the", "chocolat");
//je déclare une variable boissons qui a pour valeur un tableau composé des differentes boissons.
$dat= date("d F Y");
//je déclare une variable dat qui a pour valeur la methode date(); avec pour parametre d F Y qui represente la date.
$total= 0;
// je declare une variable total qui a pour valeur 0.

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/my_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="coffee_machine.js"></script>
</head>
<body>
	
	<div class="ecran">en attente<br><?= $dat ?></div>
  <!-- j'appelle ma variable $dat à l'endroit ou je veux la voir apparaitre.
-->

    
    <div class="price"><?= $total?></div>
    <!-- j'appelle ma variable $total à l'endroit ou je veux la voir apparaitre.
-->
    <div class="euros"></div>
    <div class="coinsSlot"></div>

    <div class="sugar" style="top:175px;">
      <div class="button" style="left:10px;"></div>
      <div class="led-on led-drink" style="left:50px;top:0px;"></div>
      <div class="led-on led-drink" style="left:75px;top:0px;"></div>
      <div class="led-off led-drink" style="left:100px;top:0px;"></div>
      <div class="led-off led-drink" style="left:125px;top:0px;"></div>
      <div class="button"></div>
    </div>

    <div class="drink" style="top:215px;">
      <div class="drink-name"><font style="color:#fff"><?= $boissons[0]?></font></div>
      <!-- j'appelle ma variable $boisson[0] avec la position de mon parametre à l'endroit ou je veux la voir apparaitre.
-->
      <div class="led-off led-drink" style="left:130px;"></div>
      <div class="button"></div>
    </div>
    <div class="drink" style="top:255px;">
      <div class="drink-name"><font style="color:#fff"><?= $boissons[1]?></font></div>
      <div class="led-off led-drink" style="left:130px;"></div>
      <div class="button"></div>
    </div>
    <div class="drink" style="top:295px;">
      <div class="drink-name"><font style="color:#fff"><?= $boissons[2]?></font></div>
      <div class="led-off led-drink" style="left:130px;"></div>
      <div class="button"></div>
    </div>
    <div class="drink" style="top:335px;">
      <div class="drink-name"><font style="color:#fff"><?= $boissons[3]?></font></div>
      <div class="led-off led-drink" style="left:130px;"></div>
      <div class="button"></div>
    </div>


</body>
</html>

