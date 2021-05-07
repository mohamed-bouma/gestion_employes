<?php

class Service
{
    private $noserv;
    private $service;
    private $ville;

    /**
     * Get the value of noserv
     */
    public function getNoserv(): int
    {
        return $this->noserv;
    }

    /**
     * Set the value of noserv
     *
     * @return  self
     */
    public function setNoserv(int $noserv)
    {
        $this->noserv = $noserv;

        return $this;
    }

    /**
     * Get the value of service
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */
    public function setService(string $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */
    public function setVille(string $ville)
    {
        $this->ville = $ville;

        return $this;
    }
}
