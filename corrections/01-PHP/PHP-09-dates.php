<?php

// # PHP - Les dates
// **Pour tous les exercices, vous pouvez utiliser le site <http://php.net>**
// **N'hesitez pas à faire des pages avec du HTML/CSS**
// ## Exercice 1
// Afficher la date courante en respectant la forme **jj/mm/aaaa** *(ex : 16/05/2016)*

// Version procédurale :
$date = date('d/m/Y');
var_dump($date);

echo '<hr>';

// Version object :
$date = new DateTime();
var_dump($date);
$dateFr = $date->format('d/m/Y');
var_dump($dateFr);

echo '<hr>';

// ## Exercice 2
// Afficher la date courante en respectant la forme **jj-mm-aa** *(ex : 16-05-16)*

$date = new DateTime();
$dateFr = $date->format('d-m-y');
var_dump($dateFr);

echo '<hr>';

// ## Exercice 3
// Afficher la date courante avec le jour de la semaine et le mois en toutes lettres *(ex : mardi 2 août 2016)*
// **Bonus** : Le faire en français.

$date = new DateTime();
$dateFormat = $date->format('l j F Y');
var_dump($dateFormat);

// Version FR :

setlocale(LC_TIME, 'fr_FR');

$dateLangFr = strftime("%A%e %B %Y", time());
var_dump($dateLangFr);

echo '<hr>';

// ## Exercice 4
// Afficher le timestamp du jour.
// Afficher le timestamp du mardi 2 août 2016 à 15h00.

$dateNow = new DateTime();
$dateNowTimestamp = $dateNow->getTimestamp();
var_dump($dateNowTimestamp);

$dateOld = new DateTime('2016-08-02 15:00:00');
$dateOldTimestamp = $dateOld->getTimestamp();

var_dump($dateOldTimestamp);

echo '<hr>';

// ## Exercice 5
// Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.

$dateNow = new DateTime();
$dateOld = new DateTime('2016-05-16');

$diff = date_diff($dateNow, $dateOld);
var_dump($diff);

$daysDiff = $diff->days;
var_dump($daysDiff);

echo '<hr>';

// ## Exercice 6
// Afficher le nombre de jour dans le mois de février de l'année 2016.

$fevrier = cal_days_in_month(CAL_GREGORIAN, 02, 2016);
var_dump($fevrier);

echo '<hr>';

// ## Exercice 7
// Afficher la date du jour + 20 jours.


// Version procédurale
$dateFuture = strtotime("+7 day");
var_dump(date('d/m/Y', $dateFuture));

// Version object
$date = new DateTime("+7 day");
var_dump($date->format('d/m/Y'));

echo '<hr>';

// ## Exercice 8

// Afficher la date du jour - 22 jours

// Version procédurale
$datePassee = strtotime("-22 day");
var_dump(date('d/m/Y', $datePassee));

// Version object
$date = new DateTime("-22 day");
var_dump($date->format('d/m/Y'));


echo '<hr>';

// ## TP
// Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
// En fonction des choix, afficher un calendrier comme celui ci :
// ![Calendrier](http://icalendrier.fr/media/imprimer/2019/mensuel/avril/calendrier-avril-2019.png "Calendrier")

// On commence par faire un tableau de mois pour l'affichage français :

$monthsFr = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="PHP-09-dates.php" method="POST" class="form">
        <select name="month" id="" class="form-control">
            <?php for ($month = 1; $month <= 12; $month++) : ?>
                <option value="<?= $month ?>">Mois : <?= $monthsFr[ $month -1 ] ?></option>
            <?php endfor; ?>
        </select>

        <select name="year" id="" class="form-control">
            <?php for ($year = 2014; $year <= 2030; $year++) : ?>
                <option value="<?= $year ?>">Année : <?= $year ?></option>
            <?php endfor; ?>
        </select>

        <button type="submit" class="btn btn-primary">Créer le calendrier</button>
    </form>

    <?php if (!empty($_POST)) : ?>
        <img src="http://icalendrier.fr/media/imprimer/<?= $_POST['year'] ?>/mensuel/<?= $monthsFr[$_POST['month'] - 1] ?>/calendrier-<?= $monthsFr[$_POST['month'] - 1] ?>-<?= $_POST['year'] ?>.png" alt="calendrier">
    <?php endif; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>