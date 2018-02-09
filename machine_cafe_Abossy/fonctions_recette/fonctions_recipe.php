<?php 

$dat = date("d F Y");
//je déclare une variable dat qui a pour valeur la methode date(); avec pour parametre d F Y qui represente la date.
$total = 0;
// je declare une variable total qui a pour valeur 0.
$ret = "";

function recipe(){
global $bdd;
$reponse = $bdd ->query ("SELECT nbdose,boissons.nom, ingredients.Nom AS ingredient
  FROM boissons_has_ingredients 
  INNER JOIN ingredients 
  ON boissons_has_ingredients.Ingredients_idIngredients = ingredients.idIngredients  
  INNER JOIN boissons
  ON boissons.idBoissons = boissons_has_ingredients.Boissons_idBoissons
  WHERE boissons.Nom = '".$_POST['boisson']."'");
  

  while ($donnees = $reponse -> fetch()){

    echo '<li>'.$donnees['nbdose'].'dose(s) '.$donnees['ingredient'].'</li>';
  }
}
  
//permet d'afficher mes recettes de boissons.
function sugar(){
global $bdd;
$sucre =0;
$reponse = $bdd->query('SELECT ingredients.stock FROM ingredients
  WHERE ingredients.idIngredients = 4');
$donnees = $reponse ->fetch();
$sugar = $donnees['stock'];
return $sugar;
}
//permet d'aller chercher ma requete dans la bdd(je veux le stock dans ingredients avec pour condition si idingredients vaut 4)
function afficheSucre($x){
  $sucre = sugar();
  for ($i=0; $i <= $sucre && $i <=$x; $i++){
    echo'<input type="radio" name="sucre" value="'.$i.'">'.$i;
  }
}
// permet de creer et afficher mes radios boutons en fonction de ma condition for en recuperant la valeur de la fonction sugar.

function sucre(){
$sucre = "";
  if (isset($_POST["boisson"]) && isset($_POST["sucre"])) {
    $sucre = "<li> Sucre : ".$_POST["sucre"]."</li></ul></p>";
  }
  return $sucre;
};
//si boisson et sucre sont verifiés, on renvoit la donnée stocké dans la variable sucre.(le choix du client = radio bouton selectionné).



/*$sucres = "<li>".$_POST['sucre']."sucre(s)</li>";
return $sucres;
}
//permet d'afficher le sucre en fonction du clic selectionné.
}
*/


function stock(){
global $bdd;
$reponse = $bdd ->query ("SELECT Nom, Stock 
  FROM ingredients");
while ($donnees = $reponse -> fetch()){

    echo '<li>'.$donnees['Nom'].$donnees['Stock'].'</li>';
  }

}
function calculstocksucre(){
global $bdd;
if (isset($_POST["boisson"]) && isset($_POST["sucre"])){
$stocksucre =$_POST["sucre"];
$reponsesucre = $bdd->prepare("UPDATE ingredients SET Stock = Stock-? WHERE
  ingredients.idIngredients = 4");
$reponsesucre->execute(array($stocksucre));

}
}


?>