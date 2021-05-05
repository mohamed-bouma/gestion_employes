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


function nextId()
{
    $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
    $stmt = $db->prepare("SELECT max(noemp) FROM employes;");
    $stmt->execute();
    $rs = $stmt->get_result();
    $data = $rs->fetch_array(MYSQLI_NUM);
    //$data = mysqli_fetch_array($max, MYSQLI_NUM);
    $rs->free();
    $db->close();
    $nextId = $data[0] + 1;
    return $nextId;
}
function insererEmp($tab, $commission, $Id)
{
    $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
    $stmt = $db->prepare("INSERT INTO employes (noemp, nom, prenom, emploi, sup, embauche, sal, comm, noserv)
VALUES (?,?,?,?,?,?,?,?,?);");
    $stmt->bind_param(
        "isssisddi",
        $Id,
        $tab["nom"],
        $tab["prenom"],
        $tab["emploi"],
        $tab["sup"],
        $tab["embauche"],
        $tab["sal"],
        $commission,
        $tab["noserv"]
    );
    $stmt->execute();
    $db->close();
}
