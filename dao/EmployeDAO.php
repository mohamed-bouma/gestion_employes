<?php

include_once("model/Employe.php");

class EmployeDAO
{

    public function selectAll()
    {
        $db = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        $stmt = $db->prepare("SELECT * FROM employes;");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $rs = $stmt->get_result();
        $tabNom = $rs->fetch_array(MYSQLI_ASSOC);
        $db->close();
        return $tabNom;
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
        $noserv = $obj->getNoserv();
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

    public function deleteEmp($noemp)
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
        $com = $obj->getComm();
        $noserv = $obj->getNoserv();
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
}
