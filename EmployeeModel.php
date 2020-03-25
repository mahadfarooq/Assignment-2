<?php
require_once 'dbconn.php';

class EmployeeModel extends dbh{

    public function getEmployee(){
        $sql = "SELECT * FROM employeedetails";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            return $row['FirstName'];
    }

    }
    protected function setEmployee($FirstName, $LastName, $Gender, $HiredDate, $Salary){
        $sql = "INSERT INTO employeedetails(FirstName, LastName, Gender, HiredDate, Salary) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$FirstName, $LastName, $Gender, $HiredDate, $Salary]);
    }

    protected function updEmployee($EmployeeId, $FirstName, $LastName, $Gender, $HiredDate, $Salary){
        $sql = "UPDATE employeedetails SET FirstName = '$FirstName', LastName = '$LastName', Gender = '$Gender', HiredDate = '$HiredDate', Salary = '$Salary' Where EmployeeId = '$EmployeeId'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$EmployeeId, $FirstName, $LastName, $Gender, $HiredDate, $Salary]);
    }

    protected function delEmployee($EmployeeId){
        $sql = "DELETE FROM  employeedetails Where EmployeeId = '$EmployeeId'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$EmployeeId]);
    }
}