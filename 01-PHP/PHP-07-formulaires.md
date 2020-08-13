# PHP - Les formulaires
Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....)

## Exercice 1
Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **GET**.

## Exercice 2
Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**.

## Exercice 3
Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.

## Exercice 4
Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.

## Exercice 5
Créer un formulaire sur la page **index.php** avec :
- Une liste déroulante pour la civilité (Mr ou Mme)
- Un champ texte pour le nom
- Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page **index.php**.
Vous avez le choix de la méthode.

## Exercice 6
Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.

## Exercice 7
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

## Exercice 8
Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier **pdf**.

# Correction

https://github.com/tomsihap/php-post-correction


# Correction de l'exercice 5/6 :

```php
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

    <div class="container mt-3">
        <div class="row">
            <div class="col">

                <?php if (!empty($_POST)) : ?>
                    <h1>Bienvenue <?= $_POST['firstname'] ?> <?= $_POST['lastname'] ?> !</h1>
                <?php else : ?>
                    <form action="formulaire.php" method="POST">
                        <div class="form-group">
                            <label for="formCiv">Civilité</label>
                            <select name="civility" id="formCiv" class="form-control">
                                <option value="Madame">Madame</option>
                                <option value="Monsieur">Monsieur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formFirstname">Prénom</label>
                            <input id="formFirstname" name="firstname" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="formLastname">Nom</label>
                            <input id="formLastname" name="lastname" type="text" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary float-right" value="Envoyer">
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </div>

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


