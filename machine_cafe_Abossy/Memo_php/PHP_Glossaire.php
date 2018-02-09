/////(1) OUVRIR UNE BALISE PHP:

<?php       ?>



/////(2) FONCTIONS:

echo "Bonjour !"; = Permet d'écrire des chaines de caractères
echo 17 * 123; = Permet d'affichier le résultat de la multiplication
substr(string, start, length) =  Cette fonction vous permet d'extraire une partie (un morceau) de la chaine passée en paramètre.
strlen("yoo") = Calcule le nombre de caractères d'une chaine, 3 dans cet exemple
strtoupper() = Transforme la chaine de caractère passée en majuscule 
strtolower() = Transforme la chaine de caractère passée en minuscule 
strpos() = Recherche un extrait dans une chaine de caractères
rond() = Arondit les nombres décimaux
rand(min, max) = Permet d'obtenir un nombre aléatoire
count($tableau) = Permet de connaître le nombre d'éléments d'un tableau
sort($tableau) = Permet de trier le tableau. 
rsort($tableau) = Permet de trier le tableau en ordre inverse. 
join("," , $tableau) =  Créer une chaine de caractères contenant chaque élément du tableau en les séparant du caractère fournit en paramètre
array_push ($variableCible, "Contenu") = Ajoute un nouvel élément à la fin d'un tableau



/////(3) OPERATEURS:

. = Concaténation (exemple:  "Bonjour "."tout le monde"; )




/////(5) VARIABLES:

$NomDeLaVariable ="Christophe";
$NomDeLaVariable = 32;



/////(6) CONDITIONS:
// OPERATEURS DE COMPARAISONS:

> Est supérieur à
< Est inférieur à
<= Est inférieur ou égal à
>= Est supérieur ou égal à
== Est égal à
!= Est différent de (est non égal à)


// IF ELSE:

$age = 19; 

   if ($age > 17) {
     echo "Vous pouvez conduire !"; 
   } 
   else {
     print "Qui êtes-vous ?"; 
   } 



/////(7) INSTRUCTIONS:
// SWITCH (pratique lorsqu'on a besoin d'une série de if / elseif / else):

$maVariable= 4;
    
switch ($maVariable):
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Le nombre est compris entre 0 et 5';
        break;
    default:
        echo 'je ne connais pas la valeur de ce nombre';
endswitch;


/ SYNTHAXE: 

    switch ($maVariable) {

    }
    
    === (La synthaxe du haut est égal à celle du bas, les deux ce valent.)
    
    switch ($maVariable): 
        
    endswitch; 



/////(8) TABLEAUX:

    $tableau = array("Oeuf", "Tomate", "Haricot");  
    echo $tableau[0] = accède a l'élément du tableau d'index 0

    $tableau[0] = "Patate"; l'élément index 0 devient la chaine de caractère "Patate"

    unset($tableau[0]) = Supprime l'élement du tableau à l'index 0



/////(5) BOUCLE:

// FOR:
 
for ($i = 0; $i <10; $i++) {
     echo $i; 


// FOREACH: 
Permet de parcourir un tableau ou les membres d'un objet 

$mesNombres = array(1, 2, 3); 

   foreach($mesNombres as $unNombre) {
       echo $unNombre; 


// WHILE:
Tant qu'une certaine condition est vrai 

$number = 10;
while ($number<20):

echo "<p>Nombre: [$number]</p>";
            OU
echo "<p>Nombre: ".$number."</p>";

$number++;
endwhile;


// DO-WHILE:

$nbJets = 1;
do {
    $jet = rand (1,6);
    echo $nbJets;
    $nbJets ++;
    } while ($jet != 6);

while = until (pour ce rapeller). Elle est similaire à la boucle while à ceci près que les instructions sont exécutées au moins une fois, la condition n'étant testé pour la première fois qu'après exécution des instructions.



