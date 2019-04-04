<?php

// # PHP - Les tableaux
// ## Exercice 1
// Créer un tableau **months** et l'initialiser avec les valeurs suivantes :
// - **janvier**
// - **février**
// - **mars**
// - **avril**
// - **mai**
// - **juin**
// - **juillet**
// - **aout**
// - **septembre**
// - **octobre**
// - **novembre**
// - **décembre**

$array = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];

// ## Exercice 2
// Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
var_dump( $array[2] );
echo '<hr>';

// ## Exercice 3
// Avec le tableau de l'exercice , afficher la valeur de l'index 5.
var_dump( $array[5] );
echo '<hr>';

// ## Exercice 4
// Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant.
$array[7] = 'août';

// ## Exercice 5
// Créer un tableau associatif avec comme index le numéro des départements de Auvergne-Rhône-Alpes et en valeur leur nom.
$ara = [
    '01' => 'Ain',
    '03' => 'Allier',
    '07' => 'Ardèche',
    '15' => 'Cantal',
    '26' => 'Drôme',
    '38' => 'Isère',
    '42' => 'Loire',
    '43' => 'Haute-Loire',
    '63' => 'Puy-de-Dôme',
    '69D' => 'Rhône',
    '69M' => 'Métropole de Lyon',
    '73' => 'Savoie',
    '74' => 'Haute-Savoie',
];

// ## Exercice 6
// Avec le tableau de l'exercice 5, afficher la valeur de l'index 63.

var_dump($ara[63]);
echo '<hr>';

// ## Exercice 7
// Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Chambéry.
var_dump($ara[73]);

// ## Exercice 8
// Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

foreach($array as $a) {
    var_dump($a);
}
echo '<hr>';

// ## Exercice 9
// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

foreach($ara as $departement) {
    var_dump($departement);
}
echo '<hr>';


// ## Exercice 10
// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
// Cela pourra être, par exemple, de la forme : **"Le département" + nom du département + "a le numéro" + numéro du département**

foreach ($ara as $code => $departement) {
    echo 'Le département ' . $departement . ' a le numéro ' . $code;
    echo '<br>';
}