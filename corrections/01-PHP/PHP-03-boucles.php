<?php

// # PHP - Les boucles
// ## Exercice 1
// Créer une variable et l'initialiser à 0.
// Tant que cette variable n'atteint pas 10, il faut :
// - l'afficher
// - l'incrementer

$var = 0;

while ($var < 10) {
    var_dump($var);
    $var++;
}

echo '<hr>';
// ## Exercice 2
// Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
// Tant que la première variable n'est pas supérieure à 20 :
// - multiplier la première variable avec la deuxième
// - afficher le résultat
// - incrementer la première variable

$varA = 0;
$varB = 42;

while ($varA <= 20) {

    $result = $varA * $varB;
    var_dump($result);
    $varA++;

}

echo '<hr>';
// ## Exercice 3
// Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
// Tant que la première variable n'est pas inférieure ou égale à 10 :
// - multiplier la première variable avec la deuxième
// - afficher le résultat
// - décrémenter la première variable

$varB = 42;

for ($varA=100; $varA >= 10; $varA--) {

    $result = $varA * $varB;
    var_dump($result);

}
echo '<hr>';

// ## Exercice 4
// Créer une variable et l'initialiser à 1.
// Tant que cette variable n'atteint pas 10, il faut :
// - l'afficher
// - l'incrementer de la moitié de sa valeur

for ($i=1; $i < 10; $i += $i/2) {
    var_dump($i);
}
echo '<hr>';

// ## Exercice 5
// En allant de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque**.
for ($i=1; $i < 15; $i++) {
    echo 'On y arrive presque<br>';
}

echo '<hr>';
// ## Exercice 6
// En allant de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**.
for ($i=20; $i > 0; $i--) {
    echo 'C\'est presque bon<br>';
}

echo '<hr>';
// ## Exercice 7
// En allant de 1 à 100 avec un pas de 15, afficher le message **On tient le bon bout**.
for ($i=1; $i < 100; $i += 15) {
    echo 'On tient le bon bout<br>';
}

echo '<hr>';
// ## Exercice 8
// En allant de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**.
for ($i=200; $i > 0 ; $i -= 12) {
    echo 'Enfin !!!!<br>';
}