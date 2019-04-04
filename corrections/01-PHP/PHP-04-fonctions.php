<?php

// # PHP - Les fonctions
// ## Exercice 1
// Faire une fonction qui retourne **true**.

function exo1() {
    return true;
}
var_dump(exo1());
echo "<hr>";

// ## Exercice 2
// Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

function exo2(string $chaine) {
    return $chaine;
}
var_dump( exo2('hello !') );
echo "<hr>";


// ## Exercice 3
// Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines

function exo3(string $chaine1, string $chaine2) {
    return $chaine1 . $chaine2;
}
var_dump( exo3('hello ', 'world') );
echo "<hr>";

// ## Exercice 4
// Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
// - **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
// - **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
// - **Les deux nombres sont identiques** si les deux nombres sont égaux

function exo4(int $numberA, int $numberB) {

    if ($numberA < $numberB) {
        return "Le premier nombre est plus petit";
    }
    else if ($numberA > $numberB) {
        return "Le premier nombre est plus grand";
    }
    else {
        return "Les deux nombres sont identiques";
    }
}

var_dump( exo4(1, 2) );
var_dump( exo4(2, 1) );
var_dump( exo4(1, 1) );
echo "<hr>";

// ## Exercice 5
// Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.

function exo5(int $number, string $chaine) {
    return $number . $chaine;
}
var_dump( exo5(49, 'ers') );
echo "<hr>";

// ## Exercice 6
// Faire une fonction qui prend trois paramètres : **le nom, le prénom et l'âge d'une personne**. Elle doit renvoyer une chaine de la forme :
// "Bonjour" + **nom** + **prénom** + ",tu as" + **age** + "ans".

function exo6(string $nom, string $prenom, int $age) {
    return 'Bonjour ' . $nom . ' ' . $prenom . ', tu as ' . $age . ' ans.';
}

var_dump( exo6('Jane', 'Doe', 32) );
echo "<hr>";

// ## Exercice 7
// Faire une fonction qui prend deux paramètres : **l'âge et le genre d'une personne**. Le genre peut être :
// - Homme
// - Femme
// La fonction doit renvoyer en fonction des paramètres :
// - **Vous êtes un homme et vous êtes majeur**
// - **Vous êtes un homme et vous êtes mineur**
// - **Vous êtes une femme et vous êtes majeur**
// - **Vous êtes une femme et vous êtes mineur**

// Gérer tous les cas.

function exo7(int $age, string $gender) {

    $majorite = ($age < 18) ? 'mineur' : 'majeur';
    $genre = ($gender === 'homme') ? 'un homme' : 'une femme';

    return 'Vous êtes ' . $genre . ' et vous êtes ' . $majorite ;
}
var_dump ( exo7(15, 'homme') );
var_dump ( exo7(25, 'homme') );
var_dump ( exo7(15, 'femme') );
var_dump ( exo7(25, 'femme') );
echo "<hr>";

// ## Exercice 8
// Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
// Tous les paramètres doivent avoir une valeur par défaut.

function exo8(?int $numberA = 64, ?int $numberB = 128, ?int $numberC = 256) {
    return $numberA + $numberB + $numberC;
}

var_dump( exo8(1, 2, 3) );
var_dump( exo8(null, 2, 3) );
var_dump( exo8(1, null, 3));
var_dump( exo8(1, 2) );
echo "<hr>";

