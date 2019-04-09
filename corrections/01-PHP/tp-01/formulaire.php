<?php
session_start();
require 'data.php';

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

    <div class="container my-5">

    <?php if (!empty($_SESSION) && !empty($_SESSION['errors'])) :
                foreach ($_SESSION['errors'] as $e) : ?>
                    <div class="alert alert-danger" role="alert"><?= $e ?></div>
            <?php endforeach;

            unset($_SESSION['errors']);
        endif; ?>

        <div class="row">
            <div class="col-12">

                <h3>Formulaire d'inscription</h3>
                <hr>
                <form action="validation.php" method="POST" class="form">

                    <div class="row">
                        <div class="col-6">

                            <div class="form-group">
                                <label for="lastname">Nom</label>
                                <small class="form-text text-muted">Moins de 150 caractères</small>
                                <input id="lastname" name="lastname" type="text" class="form-control" max="150">
                            </div>
                            <div class="form-group">
                                <label for="firstname">Prénom</label>
                                <small class="form-text text-muted">Moins de 50 caractères</small>
                                <input id="firstname" name="firstname" type="text" class="form-control" max="50">
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Date de naissance</label>
                                <small class="form-text text-muted">Vous devez être né avant le <?= date('d/m/Y') ?></small>
                                <input id="birthdate" name="birthdate" type="date" class="form-control" max="<?= date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationalité</label>
                                <small class="form-text text-muted">L'une de la liste</small>
                                <select id="nationality" name="nationality" class="form-control">
                                    <?php foreach ($countries as $country) : ?>
                                        <option value="<?= $country->code ?>"><?= $country->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Adresse postale</label>
                                <small class="form-text text-muted">Moins de 255 caractères</small>
                                <input id="address" name="address" type="text" class="form-control" max="255">
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse e-mail</label>
                                <small class="form-text text-muted">Le format doit être valide</small>
                                <input id="email" name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <small class="form-text text-muted">Au format 0612345678</small>
                                <input id="phone" name="phone" type="tel" pattern="[0-9]{10}" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="diploma">Diplôme</label>
                                <small class="form-text text-muted">L'un de la liste</small>
                                <select id="diploma" name="diploma" class="form-control">
                                    <?php foreach ($diplomes as $diplome) : ?>
                                        <option value="<?= $diplome ?>"><?= $diplome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="personnality">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                                <textarea name="personnality" id="personnality" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                <div id="experience" class="form-check">
                                    <input class="form-check-input" type="radio" name="experience" id="experienceYes" value="0" checked>
                                    <label class="form-check-label" for="experienceYes">
                                        Non
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="experience" id="experienceNo" value="1">
                                    <label class="form-check-label" for="experienceNo">
                                        Oui
                                    </label>
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="newsletter" value="1" id="newsletter">
                                <label class="form-check-label" for="newsletter">
                                    Acceptez-vous de recevoir la newsletter ?
                                </label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="float-right btn btn-primary">Envoyer</button>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>