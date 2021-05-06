<?php

include_once(__DIR__ . "/../model/Employe.php");

class EmployeDAO
{
    public function searchByNoemp(int $id)
    {

        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("SELECT * FROM employes WHERE noemp =?;");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabEmploye = $rs->fetch_array(MYSQLI_ASSOC);

        $obj = new Employe;
        $obj->setNoemp($tabEmploye["noemp"]);
        $obj->setNom($tabEmploye["nom"]);
        $obj->setPrenom($tabEmploye["prenom"]);
        $obj->setEmploi($tabEmploye["emploi"]);
        $obj->setSup($tabEmploye["sup"]);
        $obj->setEmbauche($tabEmploye["embauche"]);
        $obj->setSal($tabEmploye["sal"]);
        $obj->setComm($tabEmploye["comm"]);
        $obj->service->setNoserv($tabEmploye["noserv"]);

        $db->close();
        return $obj;
    }





    public function selectAll()
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("SELECT * FROM employes;");
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabNom = $rs->fetch_all(MYSQLI_ASSOC);
        $tabObj = [];
        foreach ($tabNom as $value) {
            $obj = new Employe;
            $obj->setNoemp($value["noemp"]);
            $obj->setNom($value["nom"]);
            $obj->setPrenom($value["prenom"]);
            $obj->setEmploi($value["emploi"]);
            $obj->setSup($value["sup"]);
            $obj->setEmbauche($value["embauche"]);
            $obj->setSal($value["sal"]);
            $obj->setComm($value["comm"]);
            $obj->service->setNoserv($value["noserv"]);
            $tabObj[] = $obj;
        }
        $db->close();
        return $tabObj;
    }

    public function insert(Employe $obj)
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $id = $this->nextId();
        $nom = $obj->getNom();
        $prenom = $obj->getPrenom();
        $emploi = $obj->getEmploi();
        $sup = $obj->getSup();
        $embauche = $obj->getEmbauche();
        $sal = $obj->getSal();
        $comm = $obj->getComm();
        $noserv = $obj->service->setService();
        $stmt = $db->prepare("INSERT INTO employes(noemp, nom, prenom, emploi, sup, embauche, sal, comm, noserv)
        VALUES(?,?,?,?,?,?,?,?);");
        $stmt->bind_param(
            "isssisddi",
            $id,
            $nom,
            $prenom,
            $emploi,
            $sup,
            $embauche,
            $sal,
            $comm,
            $noserv
        );
        $stmt->execute();
        $db->close();
    }

    public function nextId()
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("SELECT Max(noemp) FROM employes;");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_array(MYSQLI_NUM);
        $rs->free();
        $db->close();
        $nextId = $data[0] + 1;
        return $nextId;
    }

    public function supprimerEmp($noemp)
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("DELETE FROM employes WHERE noemp =?;");
        $stmt->bind_param("i", $noemp);
        $stmt->execute();
        $db->close();
    }

    public function updateEmp(Employe $obj, int $noemp)
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $nom = $obj->getNom();
        $prenom = $obj->getPrenom();
        $emploi = $obj->getEmploi();
        $sup = $obj->getSup();
        $embauche = $obj->getEmbauche();
        $sal = $obj->getSal();
        $comm = $obj->getComm();
        $noserv = $obj->service->setService();
        $stmt = $db->prepare("UPDATE employes SET 
        nom=?,
        prenom=?,
        emploi=?,
        sup=?,
        embauche=?,
        sal=?,
        comm=?,
        noserv=?, WHERE noemp = ?;");
        $stmt->bind_param(
            "sssisddi",
            $nom,
            $prenom,
            $emploi,
            $sup,
            $embauche,
            $sal,
            $comm,
            $noserv,
        );
        $stmt->execute();
        $db->close();
    }

    public function detailByName(int $id)
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("SELECT * FROM employes as e INNER JOIN services AS s ON e.noserv = s.noserv WHERE noemp =?;");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabEmploye = $rs->fetch_array(MYSQLI_ASSOC);

        $obj = new Employe;
        $obj->setNoemp($tabEmploye["noemp"]);
        $obj->setNom($tabEmploye["nom"]);
        $obj->setPrenom($tabEmploye["prenom"]);
        $obj->setEmploi($tabEmploye["emploi"]);
        $obj->setSup($tabEmploye["sup"]);
        $obj->setEmbauche($tabEmploye["embauche"]);
        $obj->setSal($tabEmploye["sal"]);
        $obj->setComm($tabEmploye["comm"]);
        $obj->service->setNoserv($tabEmploye["noserv"]);
        $obj->service->setService($tabEmploye["service"]);
        $obj->service->setVille($tabEmploye["ville"]);

        $db->close();
        return $obj;
    }

    function listeChef()
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("SELECT DISTINCT sup FROM employes;");
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabSup = $rs->fetch_all(MYSQLI_ASSOC);
        $rs->free();
        $db->close();
        return $tabSup;
    }

    function compteur()
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $saisie = $db->query("SELECT COUNT(date_ajout) FROM employes WHERE date_ajout = DATE_FORMAT(SYSDATE(),'%Y-%m-%d');");
        $compteur = $saisie->fetch_array(MYSQLI_NUM);
        $saisie->free();
        $db->close();
        return $compteur;
    }
}
