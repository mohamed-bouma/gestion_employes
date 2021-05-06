<?php

include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../dao/EmployeDAO.php");

class EmployeService
{

    public function searchByNoemp(int $noemp): Employe
    {

        $employeDao = new EmployeDAO();
        $employe = $employeDao->searchByNoemp($noemp);
        return $employe;
    }

    public function insert(Employe $employe): void
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->insert($employe);
    }

    public function selectAll()
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->selectAll();
        return $employe;
    }
    public function nextId()
    {
    }
    public function supprimerEmp($noemp)
    {
    }
    public function updateEmp(Employe $obj, int $noemp)
    {
    }
    public function detailByName(int $id)
    {
    }
    function listeChef()
    {
    }
    function compteur()
    {
    }
}
