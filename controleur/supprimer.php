<?php


session_start();
if (!$_SESSION['nom_user']) {
    header('Location: index.php');
}
if (isset($_GET["id"])) {

    supprimeEmployes($_GET["id"]);

    header("location: tableau.php");
} else {
    echo "suppression echoué";
}
