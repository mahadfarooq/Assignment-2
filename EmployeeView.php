<?php
require_once 'EmployeeModel.php';

class EmployeeView{

    public function showEmployee(){
        $Employee2 = new EmployeeModel();
    echo $Employee2->getEmployee();
        }

}
