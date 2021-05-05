<?php

include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../dao/EmployeDAO.php");

class EmployeService
{

    public function serachByNoemp(int $noemp): Employe
    {

        $employeDao = new EmployeDAO();
        $employe = $employeDao->serachByNoemp($noemp);
        return $employe;
    }

    public function insert($employe): void
    {
        $employeDao = new EmployeDAO();
        $employe = $employeDao->insert();
    }
}
