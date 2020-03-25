<?php
require_once 'EmployeeModel.php';

class EmployeeView{

    public function showEmployee(){
        $employee1 = new EmployeeModel();
        echo $employee1->getEmployee();
        }

}
