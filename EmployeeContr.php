<?php
require_once 'EmployeeModel.php';

class EmployeeContr extends EmployeeModel{
    
    public function createEmployee($FirstName, $LastName, $Gender, $HiredDate, $Salary){
        $this->setEmployee($FirstName, $LastName, $Gender, $HiredDate, $Salary);
    }

    public function updateEmployee($EmployeeId, $FirstName, $LastName, $Gender, $HiredDate, $Salary){
        $this->updEmployee($EmployeeId, $FirstName, $LastName, $Gender, $HiredDate, $Salary);
    }

    public function deleteEmployee($EmployeeId){
        $this->delEmployee($EmployeeId);
    }
}