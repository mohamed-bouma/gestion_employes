<?php

include_once('Voiture.php');
include_once('Modele.php');

$voiture1 = new Voiture();
$voiture1->setMarque("RENAULT");

$voiture2 = new Voiture();
$voiture2->setMarque("PEUGEOT");

$voiture3 = new Voiture();
$voiture3->setMarque("CITROEN");

$voitures = [$voiture1, $voiture2, $voiture3];
if (isset($_GET["marque"])) {
    $voiture1modele1 = new Modele("RENAULT", "CLIO");
    $voiture1modele2 = new Modele("RENAULT", "CLIO");
    $voiture1modele3 = new Modele("RENAULT", "CLIO");

    $voiture2modele1 = new Modele("PEUGEOT", "208");
    $voiture2modele2 = new Modele("PEUGEOT", "308");
    $voiture2modele3 = new Modele("PEUGEOT", "508");

    $voiture3modele1 = new Modele("CITROEN", "c2");
    $voiture3modele2 = new Modele("CITROEN", "c3");
    $voiture3modele3 = new Modele("CITROEN", "c4");
}
