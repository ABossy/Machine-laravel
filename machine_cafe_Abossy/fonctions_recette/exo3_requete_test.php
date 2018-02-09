<?php

$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'AstridB', 'volcom1806', array
	(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$reponse = $bdd -> query('SELECT* FROM ingredients');
while ($donnees = $reponse -> fetch()){
echo'<p>'.$donnees['Nom'].$donnees['Stock']." dose(s)".'</p>';
}
$reponse->closeCursor();

$reponse = $bdd -> query('SELECT* FROM boissons');
  while ($donnees = $reponse -> fetch()){
    echo'<p>'.$donnees['Nom'].$donnees['Prix'].'</p>';
}
    $reponse->closeCursor();
?>