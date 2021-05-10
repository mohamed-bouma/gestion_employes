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

    public function selectAll(): Employe
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->selectAll();
        return $employe;
    }
    public function nextId(): array
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->nextId();
        return $employe;
    }
    public function supprimerEmp($noemp): void
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->supprimerEmp($noemp);
    }
    public function updateEmp(Employe $obj, int $noemp): void
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->updateEmp($obj, $noemp);
    }
    public function detailByName(int $id): Employe
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->detailByName($id);
        return $employe;
    }
    function listeChef(): array
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->listeChef();
        return $employe;
    }
    function compteur(): int
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->compteur();
        return $employe;
    }
}
