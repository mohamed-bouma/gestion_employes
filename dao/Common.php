<?php

class Common
{
    public function connexion()
    {
        $connexion = new mysqli("127.0.0.1", "root", "", "gestion_employes");
        return $connexion;
    }
}
