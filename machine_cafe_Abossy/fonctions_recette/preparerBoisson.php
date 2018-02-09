<?php 
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'AstridB', 'volcom1806', array
  (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$boissons = array("café", "cappuccino", "the", "chocolat");
//je déclare une variable boissons qui a pour valeur un tableau composé des differentes boissons.
$dat = date("d F Y");
//je déclare une variable dat qui a pour valeur la methode date(); avec pour parametre d F Y qui represente la date.
$total = 0;
// je declare une variable total qui a pour valeur 0.
$ret = "";
//
$recette = array( 
//on le remplit
  'expresso' => array(
    'cafe'=>1,
    'eau'=>1,),
  'cafelong'=> array (
    'cafe'=>2, 
    'eau'=> 2,),
  'The'=> array(
    'the'=>1,
    'eau'=>2,), 

  );



//$drink = $_POST['boisson'];


// function prepareExpresso($nbSucres) {
//   global $recette;
//   if ($nbSucres > 0){
//   echo "Expresso avec ".$nbSucres."sucre(s)";
//   } else if($nbSucres === 0){
//     echo "Expresso sans sucre";
//   }

//   echo "Une dose de café ";
//   echo " Une dose d'eau" ;
// }

// function prepareCafeLong($nbSucres) {
//   global $recette;
//   if ($nbSucres >0){
//   echo "Café long avec ".$nbSucres."sucre(s)";
//   } else if($nbSucres === 0){
//     echo "Café long sans sucre";
//   }

//   echo "Deux doses de café ";
//   echo "Deux doses d'eau" ;
// }

// function prepareThe($nbSucres) {
//   global $recette; 
//   if ($nbSucres >0){
//   echo "Thé ".$nbSucres."sucre(s)";
//   } else if($nbSucres === 0){
//     echo "Thé sans sucre";
//   }

//   echo "Une dose de thé ";
//   echo "Deux doses d'eau" ;
// }


function preparerBoisson($boisson,$nbSucres){
	global $recette;

  $retour="";
  foreach ($recette[$boisson] as $key => $value) {
     $retour .= $key.' : '.$value.' dose(s) ';
   }
   if(isset($_POST['sucre'])){
    $retour .= "sucre : ".$nbSucres;
   
   } else {
    //(!isset($_POST['sucre'])){
    $retour .= "sans sucre";
  
  }
  return $retour;
}


if(isset($_POST['boisson']) && isset($_POST['sucre'])){
    $ret = preparerBoisson($_POST['boisson'],$_POST['sucre']);
  } else if
    (isset($_POST['boisson']) && !isset($_POST['sucre'])){
    $ret = preparerBoisson($_POST['boisson'],0);
  }else{
    $ret = "choisissez une boisson";
  }




 ?> 


