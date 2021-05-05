<?php

class Utilisateur
{
    private $id;
    private $nom_user;
    private $hash_password;
    private $profil;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom_user
     */
    public function getNom_user()
    {
        return $this->nom_user;
    }

    /**
     * Set the value of nom_user
     *
     * @return  self
     */
    public function setNom_user($nom_user)
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    /**
     * Get the value of hash_password
     */
    public function getHash_password()
    {
        return $this->hash_password;
    }

    /**
     * Set the value of hash_password
     *
     * @return  self
     */
    public function setHash_password($hash_password)
    {
        $this->hash_password = $hash_password;

        return $this;
    }

    /**
     * Get the value of profil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }
}
