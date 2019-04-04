<?php

// ## Exercice 1
// Créer une variable **name** et l'initialiser avec la valeur de votre choix.  Afficher son contenu.

$name = 'Jane';
var_dump($name);
echo '<hr>';

// ## Exercice 2
// Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.  **Attention** age est de type entier.  Afficher leur contenu.

$lastname = 'Doe';
$firstname = 'Jane';
$age = (int) 32;
var_dump($lastname);
var_dump($firstname);
var_dump($age);
echo '<hr>';

// ## Exercice 3
// Créer une variable **km**. L'initialiser à 1. Afficher son contenu.
// Changer sa valeur par 3. Afficher son contenu.
// Changer sa valeur par 125. Afficher son contenu.

$km = 1;
var_dump($km);

$km = 3;
var_dump($km);

$km = 25;
var_dump($km);

echo '<hr>';

// ## Exercice 4
// Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
// Les afficher.

$string = (string) 'hello !';
$integer = (int) 42;
$float = (float) 3.14;
$boolean = (bool) true;

var_dump($string);
var_dump($integer);
var_dump($float);
var_dump($boolean);
echo '<hr>';

// ## Exercice 5
// Créer une variable de type int. L'initialiser avec **rien**. Afficher sa valeur.
// Donner une valeur à cette variable et l'afficher.

$int = (int) null;
var_dump($int);

$int = 3;
var_dump($int);

// ## Exercice 6
// Créer une variable **name** et l'initialiser avec la valeur de votre choix.
// Afficher : "Bonjour" + **name** + ", comment vas tu ?".

$name = 'Thomas';
var_dump( 'Bonjour ' . $name . ', comment vas-tu ?');
echo '<hr>';


// ## Exercice 7
// Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.  **Attention** age est de type entier.
// Afficher : "Bonjour" + **lastname** + **firstname** + ",tu as" + **age** + "ans".

$lastname = 'Jane';
$firstname = 'Doe;';
$age = 32;
var_dump($firstname . ' ' . $lastname . ' a ' . $age . ' ans.');
echo '<hr>';



// ## Exercice 8
// Créer 3 variables.
// Dans la première mettre le résultat de l'opération **3 + 4**.
// Dans la deuxième mettre le résultat de l'opération **5 * 20**.
// Dans la troisième mettre le résultat de l'opération **45 / 5**.
// Afficher le contenu des variables.

$var1 = 3 + 4;
$var2 = 5 * 20;
$var3 = 45 / 5;

var_dump($var1);
var_dump($var2);
var_dump($var3);