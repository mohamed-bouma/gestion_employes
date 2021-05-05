<?php

include_once(__DIR__ . "/../model/Utilisateur.php");
include_once(__DIR__ . "/../dao/UtilisateurDAO.php");

class UtilisateurService
{

    public function inscription(Utilisateur $user): void
    {
        $mdpHash = password_hash($user->gethash_password(), PASSWORD_DEFAULT);
        $user->gethash_password($mdpHash);

        $userDAO = new UtilisateurDAO();
        $userDAO->insertUser($user);
    }
}
