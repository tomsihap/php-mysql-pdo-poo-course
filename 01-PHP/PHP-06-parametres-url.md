# PHP - Les paramètres d'URL

> Pour chaque exercice :
> 1. Tester que je récupère bien mes variable (var_dump)
> 2. Tester l’existence de chaque variable demandée dans l’exercice
> 3. Si la variable n’existe pas : throw new Exception("texte de l'erreur");
> 4. Si elle existe : l’afficher !
> 5. Enfin : reprendre chaque test (point 1.) et rajouter un test de type (vérifier si le type est bien string/int/date...)

## Exercice 1
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?lastname=Nemare&firstname=Jean**

## Exercice 2
Faire une page index.php. Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : **index.php?lastname=Nemare&firstname=Jean**

## Exercice 3
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?startDate=2/05/2016&endDate=27/11/2016**

## Exercice 4
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?language=PHP&server=LAMP**

## Exercice 5
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?week=12**

## Exercice 6
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?building=12&room=101**


---

# Correction

Vous pouvez tester cette correction en saisissant tous les paramètres d'un seul coup :

```
?firstname=luke&lastname=skywalker&age=29&startDate=12/12/2019&endDate=12/12/2020&language=PHP&server=LAMP&week=12&building=12&room=1201


```php
<?php

/**
 * Exercice 1
 * ?lastname=Nemare&firstname=Jean
 */

if (!isset($_GET['lastname']) OR !ctype_alpha($_GET['lastname'])) {
    throw new Exception("Il y a eu un problème de saisie sur le nom.");
}

if (!isset($_GET['firstname']) or !ctype_alpha($_GET['firstname'])) {
    throw new Exception("Il y a eu un problème de saisie sur le prénom.");
}

echo "Bonjour " . $_GET['firstname'] .  " " . $_GET["lastname"] . ", bienvenue sur votre page d'accueil.";
echo "<hr>";

/**
 * Exercice 2
 * ?age=30
 */

if (!isset($_GET['age']) or !ctype_digit($_GET['age'])) {
    throw new Exception("Il y a eu un problème de saisie sur l'âge.");
}

echo "Votre âge est de " . $_GET['age'] . ".";
echo "<hr>";

/**
 * Exercice 3
 * ?startDate=2/05/2016&endDate=27/11/2016
 */

if (!isset($_GET['startDate'])) {
    throw new Exception("Il y a eu un problème de saisie sur la date de départ.");
}

if (!isset($_GET['endDate'])) {
    throw new Exception("Il y a eu un problème de saisie sur la date de fin.");
}

// On utilise la fonction explode() qui retourne une string découpée sous forme d'array, dont on précise le séparateur (ici: le slash "/")
$startDateArray = explode('/', $_GET['startDate']);
$endDateArray = explode('/', $_GET['endDate']);

// Si tout se passe bien, on devrait avoir un array avec 3 éléments: 0: jour, 1: mois, 2: année, on en prépare une string au format standard YYYY-MM-DD :

$startDateString= $startDateArray[2] . "-" . $startDateArray[1] . "-" . $startDateArray[0];
$endDateString = $endDateArray[2] . "-" . $endDateArray[1] . "-" . $endDateArray[0];

// Maintenant que nos strings de date supposément au format YYYY-MM-DD sont prêtes, on essaie de créer des objets DateTime. On met ça dans un try/catch de sorte
// à gérer l'erreur si l'objet n'a pas pu être créé (ce qui voudrait dire que la date saisie au départ n'était pas au bon format).
try {
    $startDate = new DateTime($startDateString);
    $endDate = new DateTime($endDateString);
} catch (Exception $e) {
    echo "Une erreur est survenue sur le format de la date : " . $e->getMessage();
}

// On peut ajouter une  comparaison entre les dates afin de s'assurer que startDate est plus petit que endDate

if ($startDate > $endDate) {
    throw new Exception("La date de fin est supérieure à la date de démarrage.");
}

echo "Votre contrat commence le " . $startDate->format('d/m/Y') . " et se termine le  " . $endDate->format('d/m/Y') . ".";
echo "<hr>";

/**
 * Exercice 4
 * ?language=PHP&server=LAMP
 */

if (!isset($_GET['language']) OR !ctype_alnum($_GET['language'])) {
    throw new Exception("Il y a eu un problème de saisie sur le language.");
}

if (!isset($_GET['server']) or !ctype_alnum($_GET['server'])) {
    throw new Exception("Il y a eu un problème de saisie sur le serveur.");
}

echo "Le serveur " . $_GET['server'] . " a été lancé avec un intérpréteur pour le langage  " . $_GET['language'] . ".";
echo "<hr>";

/**
 * Exercice 5
 * ?week=12
 */


if (!isset($_GET['week']) or !ctype_digit($_GET['week'])) {
    throw new Exception("Il y a eu un problème de saisie sur la semaine.");
}

echo "Votre calendrier est préparé sur la semaine #" . $_GET['week'] . ".";
echo "<hr>";
/**
 * Exercice 6
 * ?building=12&room=101
 */

if (!isset($_GET['building']) or !ctype_digit($_GET['building'])) {
    throw new Exception("Il y a eu un problème de saisie sur le bâtiment.");
}

if (!isset($_GET['room']) or !ctype_digit($_GET['room'])) {
    throw new Exception("Il y a eu un problème de saisie sur la chambre.");
}

echo "La chambre " . $_GET['room'] . " du bâtiment " . $_GET['building'] . " a bien été réservée.";
echo "<hr>";
```
