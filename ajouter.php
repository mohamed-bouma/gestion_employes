<?php
session_start();
if (!$_SESSION['nom_user']) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>modifier employé</title>
</head>

<body>

    <div class="container">
        <form action="requete_ajout.php" method="POST">
            <input type="hidden" readonly class="form-control" name="noemp">
            <input type=" text" class="form-control" name="nom" placeholder="Nom">
            <input type="text" class="form-control" name="prenom" placeholder="Prenom">
            <input type="text" class="form-control" name="emploi" placeholder="Emploi">
            <input type="number" class="form-control" name="sup" placeholder="Suppérieur">
            <input type="date" class="form-control" name="embauche" placeholder="Date d'embauche">
            <input type="number" class="form-control" name="sal" placeholder="Salaire">
            <input type="number" class="form-control" name="comm" placeholder="Commission">
            <input type="number" class="form-control" name="noserv" placeholder="Numero Service">
            <input type="submit" class="btn btn-success" value="Soumettre">

        </form>
    </div>
</body>

</html>