<?php
session_start();
if (!$_SESSION['nom_user']) {
    header('Location: index.php');
}
if (
    isset($_POST["noemp"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) &&
    isset($_POST["emploi"]) && isset($_POST["sup"]) && isset($_POST["embauche"]) && isset($_POST["sal"]) &&
    isset($_POST["comm"]) && isset($_POST["noserv"])
) {

    if ($_POST["comm"] == "") {
        $commission = "null";
    } else {
        $commission = $_POST["comm"];
    }

    $nextId = nextId();
    insererEmp($_POST, $commission, $nextId);
    header('Location: tableau.php');
} else {
    echo "erreur de saisie";
}
