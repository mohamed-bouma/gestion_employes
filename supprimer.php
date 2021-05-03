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

function supprimeEmployes($id)
{
    $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
    $stmt = $db->prepare("DELETE FROM employes WHERE noemp = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $db->close();
}
