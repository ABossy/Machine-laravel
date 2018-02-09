<?php

function prepareExpresso($nbSucres) {
  if ($nbSucres > 0){
  echo "Expresso avec ".$nbSucres."sucre(s)";
  } else if($nbSucres === 0){
    echo "Expresso sans sucre";
  }

  echo "Une dose de café ";
  echo " Une dose d'eau" ;
}

function prepareCafeLong($nbSucres) {
  if ($nbSucres >0){
  echo "Café long avec ".$nbSucres."sucre(s)";
  } else if($nbSucres === 0){
    echo "Café long sans sucre";
  }

  echo "Deux doses de café ";
  echo "Deux doses d'eau" ;
}

function prepareThe($nbSucres) {
  if ($nbSucres >0){
  echo "Thé ".$nbSucres."sucre(s)";
  } else if($nbSucres === 0){
    echo "Thé sans sucre";
  }

  echo "Une dose de thé ";
  echo "Trois doses d'eau" ;
}

function preparerBoisson($boisson , $nbSucres){
	switch($boisson):
		case "expresso"; 
		prepareExpresso($nbSucres);
		break;
		case "cafe long" ;
		prepareCafeLong($nbSucres);
		break;
		case "the";
		prepareThe($nbSucres);
		break;
		default : 
		echo "selectionnez une boisson";
		break;
		endswitch;
}

//preparerBoisson(expresso , 3);


  ?>

