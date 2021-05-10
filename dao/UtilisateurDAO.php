<?php

include_once(__DIR__ . "/../model/Utilisateur.php");
include_once(__DIR__ . "/../model/Common.php");

class UtilisateurDAO extends Common
{

    public function searchById(int $id)
    {

        $db = parent::connexion();
        $stmt = $db->prepare("SELECT * FROM utilisateur WHERE id =?;");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabUtilisateur = $rs->fetch_array(MYSQLI_ASSOC);

        $obj = new Utilisateur;
        $obj->setId($tabUtilisateur["id"]);
        $obj->setNom_user($tabUtilisateur["nom_user"]);
        $obj->setHash_password($tabUtilisateur["hash_password"]);
        $obj->setProfil($tabUtilisateur["profil"]);

        $db->close();
        return $obj;
    }

    public function selectAll()
    {
        $db = parent::connexion();
        $stmt = $db->prepare("SELECT * FROM utilisateur;");
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabNom = $rs->fetch_all(MYSQLI_ASSOC);
        $tabObj = [];
        foreach ($tabNom as $value) {
            $obj = new Utilisateur;
            $obj->setId($value["id"]);
            $obj->setNom_user($value["nom_user"]);
            $obj->setHash_password($value["hash_password"]);
            $obj->setProfil($value["profil"]);
            $tabObj[] = $obj;
        }
        $db->close();
        return $tabObj;
    }

    public function insertUser(Utilisateur $obj)
    {
        $db = parent::connexion();
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
        $db = parent::connexion();
        $stmt = $db->prepare("SELECT Max(id) FROM utilisateur;");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_array(MYSQLI_NUM);
        $rs->free();
        $db->close();
        $nextId = $data[0] + 1;
        return $nextId;
    }

    function listeNomUser()
    {
        $db = parent::connexion();
        $nomUnique = $db->query("SELECT DISTINCT nom_user FROM utilisateur;");
        $tabNom = $nomUnique->fetch_array(MYSQLI_ASSOC);
        // $tabNom = mysqli_fetch_array($requeteNomUnique, MYSQLI_ASSOC);
        $nomUnique->free();
        $db->close();
        return $tabNom;
    }

    function selectAllByNom($nom): Utilisateur
    {
        $db = parent::connexion();
        $stmt = $db->prepare("SELECT * FROM utilisateur WHERE nom_user =?;");
        $stmt->bind_param("s", $nom);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabUtilisateur = $rs->fetch_array(MYSQLI_ASSOC);

        $obj = new Utilisateur;
        $obj->setId($tabUtilisateur["id"]);
        $obj->setNom_user($tabUtilisateur["nom_user"]);
        $obj->setHash_password($tabUtilisateur["hash_password"]);
        $obj->setProfil($tabUtilisateur["profil"]);

        $db->close();
        return $obj;
    }
}
