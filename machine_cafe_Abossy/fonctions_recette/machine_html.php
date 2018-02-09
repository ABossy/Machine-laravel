<?php include "fonctions_recipe.php";
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'AstridB', 'volcom1806', array
  (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>

<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
  <div class="ecran">Hello<br><?= $dat ?></div>
  <!-- j'appelle ma variable $dat à l'endroit ou je veux la voir apparaitre.
-->

    
    <div class="price"><?= $total?></div>
    <!-- j'appelle ma variable $total à l'endroit ou je veux la voir apparaitre.
-->
    <div class="euros"></div>
    <div class="coinsSlot"></div>


  	<form method="POST" action="machine_html.php">
     <p>
       Veuillez choisir une boisson :<br>
       <?php
       $reponse = $bdd ->query ("SELECT Nom FROM boissons");

       while ($donnees = $reponse -> fetch()){

        echo '<input type="radio" name="boisson" value="'.$donnees['Nom'].'" id="'.$donnees['Nom'].'" /> <label for="'.$donnees['Nom'].'">'.$donnees['Nom'].'</label><br />';
      }

      ?>

  </p>
  <p>
  	Nombre de Sucre :<br>
  	<?php afficheSucre(4)?>

  	<input type="submit" value="Valider" />
  </p>



  <p>Recette </p>
  <?php if (isset($_POST['boisson'])){
  	recipe();
  	echo sucre();
  }?>

  <p>Stock</p>
  <?php stock();
  calculstocksucre();
  ?>

  <?= $ret ?>


 </form>





</body>
</html>


