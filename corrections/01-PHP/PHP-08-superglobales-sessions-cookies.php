<?php


// # PHP - Variables superglobales, sessions et cookies
// Dans tous les exercices, il faudra faire une page HTML 5 valide et soigner son CSS.
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

    <!-- // ## Exercice 1
    // Faire une page HTML permettant de donner à l'utilisateur :
    // - son User Agent
    // - son adresse ip
    // - le nom du serveur -->

    <p>
        Hello ! Vous vous connectez depuis <?= $_SERVER['HTTP_USER_AGENT'] ?>,<br>
        votre IP est <?= $_SERVER['REMOTE_ADDR'] ?>,<br>
        et le serveur sur lequel vous êtes est <?= $_SERVER['SERVER_NAME'] ?>.
    </p>


    <!-- // ## Exercice 2
    // Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables **lastname**, **firstname** et **age** grâce aux sessions.
    // Ces variables auront été définies directement dans le code.
    // Il faudra afficher le contenu de ces variables sur la deuxième page. -->


    <!-- DANS index.php -->
        <?php
            $_SESSION['lastname'] = 'Doe';
            $_SESSION['firstname'] = 'Jane';
            $_SESSION['age'] = 32;
        ?>

        <a href="autrepage.php">Lien vers une autre page !</a>
    <!-- ///////////// -->

    <!-- DANS autrepage.php -->
        <p>
            Hello, vous êtes <?= $_SESSION['lastname'] ?> <?= $_SESSION['lastname'] ?> et vous avez <?= $_SESSION['age'] ?> ans.
        </p>
    <!-- ///////////// -->



    <!-- // ## Exercice 3
    // Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie. -->

    <form action="PHP-08-superglobales-sessions-cookies.php" method="POST">
        <input type="text" name="login" placeholder="Votre login" id="">
        <input type="password" name="password" placeholder="Votre mot de passe" id="">
        <button type="submit">Connexion</button>
    </form>

    <?php
        // Dans action.php

        if (!empty($_POST)) {

            $duree = 365*24*3600;
            setcookie ("login", $_POST['login'], time() + $duree);
            setcookie ("password", $_POST['password'], time() + $duree);

            var_dump($_COOKIE);
        }
    ?>


    <!-- // ## Exercice 4
    // Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche. -->

    <p>
        <?php
            if (isset($_COOKIE['login'])) {
                echo 'Votre login est : ' . $_COOKIE['login'];
            }
        ?>
    </p>



    <!-- // ## Exercice 5
    // Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3. -->

    <?php
        $_COOKIE['login'] = 'newLogin';

        echo 'Nouveau login : ' . $_COOKIE['login'];
    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>