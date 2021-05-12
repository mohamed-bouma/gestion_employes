<?php
include_once(__DIR__ . "/../service/EmployeService.php");

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
        $commission = null;
    } else {
        $commission = $_POST["comm"];
    }
    $obj = new EmployeService;
    $objService = new Service;
    $nextId = $obj->nextId();

    $objPost = new Employe;
    $objPost->setNoemp($nextId);
    $objPost->setNom($_POST["nom"]);
    $objPost->setPrenom($_POST["prenom"]);
    $objPost->setEmploi($_POST["emploi"]);
    $objPost->setSup($_POST["sup"]);
    $objPost->setEmbauche($_POST["embauche"]);
    $objPost->setSal($_POST["sal"]);
    $objPost->setComm($commission);
    $objService->setNoserv($_POST["noserv"]);
    $objPost->setService($objService);

    $obj->insert($objPost);
    header('Location: tableau.php');
} else {
    echo "erreur de saisie";
}
