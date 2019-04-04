<?php

// # PHP - Les paramètres d'URL
// ## Exercice 1
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?lastname=Nemare&firstname=Jean**

/**
 * Dans un fichier index.php
 * En allant sur l'url : index.php?lastname=Nemare&firstname=Jean
 */
if (isset($_GET['lastname'])) {
    echo $_GET['lastname'];
    echo '<br>';
}
if (isset($_GET['firstname'])) {
    echo $_GET['firstname'];
    echo '<br>';
}

echo '<hr>';

// ## Exercice 2
// Faire une page index.php. Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : **index.php?lastname=Nemare&firstname=Jean**

/**
 * Dans un fichier index.php
 * En allant sur l'url : index.php?lastname=Nemare&firstname=Jean
 */
if (isset($_GET['age'])) {
    echo $_GET['lastname'];
    echo '<br>';
}
else {
    echo 'Attention, l\'âge n\'a pas été précisé !';
}

echo '<hr>';

// ## Exercice 3
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?startDate=2/05/2016&endDate=27/11/2016**

/**
 * Dans un fichier index.php
 * En allant sur l'url : index.php?startDate=2/05/2016&endDate=27/11/2016
 */
if (isset($_GET['startDate'])) {
    echo $_GET['startDate'];
    echo '<br>';
}
if (isset($_GET['endDate'])) {
    echo $_GET['endDate'];
    echo '<br>';
}

echo '<hr>';

// ## Exercice 4
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?language=PHP&server=LAMP**

/**
 * Dans un fichier index.php
 * En allant sur l'url : index.php?language=PHP&server=LAMP
 */
if (isset($_GET['language'])) {
    echo $_GET['language'];
    echo '<br>';
}
if (isset($_GET['server'])) {
    echo $_GET['server'];
    echo '<br>';
}

echo '<hr>';


// ## Exercice 5
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?week=12**

/**
 * Dans un fichier index.php
 * En allant sur l'url : index.php?week=12
 */
if (isset($_GET['week'])) {
    echo $_GET['week'];
    echo '<br>';
}

echo '<hr>';

// ## Exercice 6
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: **index.php?building=12&room=101**

/**
 * Dans un fichier index.php
 * En allant sur l'url : index.php?building=12&room=101
 */
if (isset($_GET['building'])) {
    echo $_GET['building'];
    echo '<br>';
}
if (isset($_GET['room'])) {
    echo $_GET['room'];
    echo '<br>';
}

echo '<hr>';