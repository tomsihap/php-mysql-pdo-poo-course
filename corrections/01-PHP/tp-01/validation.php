<?php
session_start();
require 'data.php';
/**
 * Si on n'a pas reçu de données en POST, on redirige vers le formulaire
 * avec une erreur en session
 */
if (empty($_POST)) {
    $_SESSION['errors'][] = "Il y a eu un problème lors de l'envoi du formulaire.";
} else {
    /**
     * Lors du développement, on vérifie ce qu'on reçoit en POST
     */
    // var_dump($_POST);

    /**
     * Validations nom
     */
    if (empty($_POST['lastname'])) {
        $_SESSION['errors'][] = "Le nom ne peut pas être vide.";
    } elseif (strlen($_POST['lastname']) > 150) {
        $_SESSION['errors'][] = "Le nom ne peut pas être plus grand que 150 caractères.";
    }

    /**
     * Validations prénom
     */
    if (empty($_POST['firstname'])) {
        $_SESSION['errors'][] = "Le prénom ne peut pas être vide.";
    } elseif (strlen($_POST['firstname']) > 50) {
        $_SESSION['errors'][] = "Le prénom ne peut pas être plus grand que 150 caractères.";
    }

    /**
     * Validations date
     */

    $birthdate = DateTime::createFromFormat('Y-m-d', $_POST['birthdate']);
    $today = new DateTime;

    if (empty($_POST['birthdate'])) {
        $_SESSION['errors'][] = "La date de naissance ne peut pas être vide.";
    } elseif (!$birthdate) {
        $_SESSION['errors'][] = "Le format de la date de naissance est invalide.";
    } elseif ($birthdate > $today) {
        $_SESSION['errors'][] = "La date de naissance ne peut pas être supérieure à aujourd'hui.";
    }

    /**
     * Validations nationalité
     */

    if (empty($_POST['nationality'])) {
        $_SESSION['errors'][] = "La nationalité ne peut pas être vide.";
    } else {
        $match = false;
        foreach ($countries as $country) {
            if ($_POST['nationality'] == $country->code) {
                $match = true;
                break;
            }
        }
        if (!$match) {
            $_SESSION['errors'][] = "La nationalité est invalide.";
        }
    }

    /**
     * Validations addresse postale
     */
    if (empty($_POST['address'])) {
        $_SESSION['errors'][] = "L'adresse ne peut pas être vide.";
    } elseif (strlen($_POST['address']) > 255) {
        $_SESSION['errors'][] = "L'adresse ne peut pas être plus grand que 150 caractères.";
    }

    /**
     * Validations adresse e-mail
     */
    if (empty($_POST['email'])) {
        $_SESSION['errors'][] = "L'adresse ne peut pas être vide.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors'][] = "L'adresse e-mail est invalide.";
    }

    /**
     * Validations numéro de téléphone
     */
    if (empty($_POST['phone'])) {
        $_SESSION['errors'][] = "Le numéro de téléphone ne peut pas être vide.";
    } elseif (!preg_match("/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/", $_POST['phone'])) {
        $_SESSION['errors'][] = "Le format de numéro de téléphone est invalide.";
    }

    /**
     * Validations numéro de téléphone
     */
    if (empty($_POST['personnality'])) {
        $_SESSION['errors'][] = "La question de personnalité ne peut pas être vide.";
    }

    /**
     * Validations diplôme
     */
    if (empty($_POST['diploma'])) {
        $_SESSION['errors'][] = "Le diplôme ne peut pas être vide.";
    } elseif (!in_array($_POST['diploma'],  $diplomes)) {
        $_SESSION['errors'][] = "L'expérience est invalide.";
    }

    /**
     * Validations expérience
     */
    if (!in_array($_POST['experience'], ['0', '1'])) {
        $_SESSION['errors'][] = "L'expérience est invalide.";
    }

    /**
     * Validations newsletter
     * Comme c'est une checkbox, si elle n'est pas cochée $_POST['newsletter'] n'existe pas.
     * On teste donc : SI existe ET SI in_array, pas juste SI existe.
     */
    if (!empty($_POST['newsletter']) && !in_array($_POST['newsletter'], ['0', '1'])) {
        $_SESSION['errors'][] = "La newsletter est invalide.";
    }
}

if (isset($_SESSION['errors'])) {
    Header('Location: formulaire.php');
} else {
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
        <div class="container my-4">
            <h3>Bienvenue, <?= $_POST['firstname'] ?> <?= $_POST['lastname'] ?> !</h3>

            <small>
                <?php

                if (isset($_POST['newsletter'])) {
                    echo "Vous <strong>avez</strong> accepté de recevoir la newsletter.";
                } else {
                    echo "Vous <strong>n'avez pas</strong> accepté de recevoir la newsletter.";
                }
                ?>

            </small>

            <ul>
                <li>Vous êtes né le <?= date("d/m/Y", strtotime($_POST['birthdate']));  ?> </li>
                <li>Votre adresse postale est au <?= $_POST['address'] ?> </li>
                <li>Votre pays de nationalité est : <?= $_POST['nationality'] ?> </li>
                <li>Vous êtes joignable au <?= $_POST['phone'] ?></li>
                <li>Ainsi que par email à <?= $_POST['email'] ?></li>
            </ul>

            <p>
                <strong>Diplôme le plus élevé :</strong> <?= $_POST['diploma'] ?><br>
                <?php
                if ($_POST['experience']) {
                    echo "Vous <strong>avez</strong> de l'expérience en programmation.";
                } else {
                    echo "Vous <strong>n'avez pas</strong> d'expérience en programmation.";
                }
                ?>
            </p>
            <h4>Si vous étiez un superhéros :</h4>
            <p><?= $_POST['personnality'] ?></p>

        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>


<?php } ?>