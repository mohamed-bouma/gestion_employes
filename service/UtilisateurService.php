<?php

include_once(__DIR__ . "/../model/Utilisateur.php");
include_once(__DIR__ . "/../dao/UtilisateurDAO.php");

class UtilisateurService
{

    public function insertUser(Utilisateur $user): void
    {
        $mdpHash = password_hash($user->getHash_password(), PASSWORD_DEFAULT);
        $user->getHash_password($mdpHash);

        $userDAO = new UtilisateurDAO();
        $userDAO->insertUser($user);
    }

    public function searchById(int $id)
    {
        $userDAO = new UtilisateurDAO();
        $user = $userDAO->searchById($id);
        return $user;
    }
    public function selectAll()
    {
        $userDAO = new UtilisateurDAO();
        $user = $userDAO->selectAll();
        return $user;
    }
    public function nextId()
    {
        $userDAO = new UtilisateurDAO();
        $user = $userDAO->nextId();
        return $user;
    }
    function listeNomUser()
    {
        $userDAO = new UtilisateurDAO();
        $user = $userDAO->listeNomUser();
        return $user;
    }
    function selectAllByNom($nom)
    {
        $userDAO = new UtilisateurDAO();
        $user = $userDAO->selectAllByNom($nom);
        return $user;
    }
}
