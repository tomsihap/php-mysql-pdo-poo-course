<?php

// # PHP - Les formulaires
// Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....)
?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP 07 : Formulaire</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- // ## Exercice 1
    // Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php**
    avec la méthode **GET**. -->

    <form action="user.php" method="GET">
        <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
        <input type="text" name="nom" class="form-control" placeholder="Votre nom">
        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- // ## Exercice 2
    // Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php**
    avec la méthode **POST**. -->

    <form action="user.php" method="POST">
        <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
        <input type="text" name="nom" class="form-control" placeholder="Votre nom">
        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- // ## Exercice 3
    // Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis. -->
    <?php

    /**
     * Dans user.php
     */
    if (!empty($_GET)) {
        echo "Votre nom est " . $_GET['nom'] . " et votre prénom est " . $_GET['prenom'];
    }

    ?>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- // ## Exercice 4
    // Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises. -->
    <?php

    /**
     * Dans user.php
     */

    if (!empty($_POST)) {
        echo "Votre nom est " . $_POST['nom'] . " et votre prénom est " . $_POST['prenom'];
    }

    ?>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- // ## Exercice 5
    // Créer un formulaire sur la page **index.php** avec :
    // - Une liste déroulante pour la civilité (Mr ou Mme)
    // - Un champ texte pour le nom
    // - Un champ texte pour le prénom

    // Ce formulaire doit rediriger vers la page **index.php**.
    // Vous avez le choix de la méthode. -->

    <form action="index.php" method="POST">
        <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
        <input type="text" name="nom" class="form-control" placeholder="Votre nom">
        <select name="civilite">
            <option value="Mr">Mr.</option>
            <option value="Mme">Mme.</option>
        </select>
        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- // ## Exercice 6
    // Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, le formulaire ne doit pas
    être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
    // Utiliser qu'une seule page. -->

    <?php

    /**
     * Dans une page index.php
     */

    if (!empty($_POST) or  !empty($_GET)) {
        // Cas où on a envoyé le formulaire à index.php ($_GET ou $_POST n'est pas vide), il reçoit des données
    } else {
        // Cas où on n'a pas envoyé de données de formulaire... On accède juste à index.php via le navigateur, on affiche le form :
        ?>
        <form action="index.php" method="POST">
            <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
            <input type="text" name="nom" class="form-control" placeholder="Votre nom">
            <select name="civilite">
                <option value="Mr">Mr.</option>
                <option value="Mme">Mme.</option>
            </select>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
        <?php
    }   // On n'oublie pas de refermer l'accolade du else !!!
    ?>



    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- // ## Exercice 7
    // Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à
    l'exercice 6, le nom et l'extension du fichier. -->

    <!-- Dans un fichier index.php -->
    <form action="sendfile.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
        <input type="text" name="nom" class="form-control" placeholder="Votre nom">
        <select name="civilite">
            <option value="Mr">Mr.</option>
            <option value="Mme">Mme.</option>
        </select>

        <input type="file" name="carte_id" id="">

        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>

    <!-- Dans un fichier sendfile.php -->
    <?php

    if (!empty($_FILES)) {

        $fichier = $_FILES['carte_id'];

        $nomFichier = basename($_FILES['carte_id']['name']);

        $extensionFichier = pathinfo($_FILES['carte_id']['name'], PATHINFO_EXTENSION);

        $allowed =  array('gif', 'png', 'jpg');
        $filename = $_FILES['video_file']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            echo 'error';
        }

    }

    ?>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- // ## Exercice 8
    // Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier
    transmis est bien un fichier **pdf**. -->

    <!-- Dans un fichier index.php -->
    <form action="sendfile.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
        <input type="text" name="nom" class="form-control" placeholder="Votre nom">
        <select name="civilite">
            <option value="Mr">Mr.</option>
            <option value="Mme">Mme.</option>
        </select>

        <input type="file" name="carte_id" id="">

        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>

    <!-- Dans un fichier sendfile.php -->
    <?php

    if (!empty($_FILES)) {

        $fichier = $_FILES['carte_id'];

        $nomFichier = basename($_FILES['carte_id']['name']);
        $extensionFichier = pathinfo($_FILES['carte_id']['name'], PATHINFO_EXTENSION);

        $extensionsAutorisees = ['pdf']; // Tableau des extensions acceptées

        if (!in_array($extensionFichier, $extensionsAutorisees)) {
            echo 'Attention, le fichier n\'est pas un pdf !';
        }

    }

    ?>


    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>