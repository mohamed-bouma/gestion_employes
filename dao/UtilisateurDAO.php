<?php

include_once("model/Utilisateur.php");

class UtilisateurDAO
{

    function selectAll()
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("SELECT * FROM utilisateur;");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabNom = $rs->fetch_array(MYSQLI_ASSOC);
        $db->close();
        return $tabNom;
    }

    public function insertUser(Utilisateur $obj)
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $id = $this->nextId();
        $nom = $obj->getNom_user();
        $mdp = $obj->getHash_password();
        $stmt = $db->prepare("INSERT INTO utilisateur(id, nom_user, hash_password) 
                                VALUE (?;?;? );");
        $stmt->bind_param("iss", $id, $nom, $mdp);
        $stmt->execute();
        $db->close();
    }

    public function nextId()
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("SELECT Max(id) FROM utilisateur;");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_array(MYSQLI_NUM);
        $rs->free();
        $db->close();
        $nextId = $data[0] + 1;
        return $nextId;
    }
}
