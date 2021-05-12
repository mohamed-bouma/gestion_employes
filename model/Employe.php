<?php
include_once("Service.php");

class Employe
{
    private $noemp;
    private $nom;
    private $prenom;
    private $emploi;
    private $embauche;
    private $sup;
    private $sal;
    private $comm;
    private Service $service;

    /**
     * Get the value of noemp
     */
    public function getNoemp(): int
    {
        return $this->noemp;
    }

    /**
     * Set the value of noemp
     *
     * @return  self
     */
    public function setNoemp(int $noemp)
    {
        $this->noemp = $noemp;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of emploi
     */
    public function getEmploi(): string
    {
        return $this->emploi;
    }

    /**
     * Set the value of emploi
     *
     * @return  self
     */
    public function setEmploi(string $emploi)
    {
        $this->emploi = $emploi;

        return $this;
    }

    /**
     * Get the value of embauche
     */
    public function getEmbauche(): string
    {
        return $this->embauche;
    }

    /**
     * Set the value of embauche
     *
     * @return  self
     */
    public function setEmbauche(string $embauche)
    {
        $this->embauche = $embauche;

        return $this;
    }

    /**
     * Get the value of sup
     */
    public function getSup(): ?int
    {
        return $this->sup;
    }

    /**
     * Set the value of sup
     *
     * @return  self
     */
    public function setSup(?int $sup)
    {
        $this->sup = $sup;

        return $this;
    }

    /**
     * Get the value of sal
     */
    public function getSal(): float
    {
        return $this->sal;
    }

    /**
     * Set the value of sal
     *
     * @return  self
     */
    public function setSal(float $sal)
    {
        $this->sal = $sal;

        return $this;
    }

    /**
     * Get the value of comm
     */
    public function getComm(): ?float
    {
        return $this->comm;
    }

    /**
     * Set the value of comm
     *
     * @return  self
     */
    public function setComm(?float $comm)
    {
        $this->comm = $comm;

        return $this;
    }



    /**
     * Get the value of service
     */
    public function getService(): Service
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */
    public function setService(Service $service)
    {
        $this->service = $service;

        return $this;
    }
}
