<?php
class EmployeeModel extends Model
{

    function getEmployees(){
        try {
            return $this->query("SELECT * FROM employees");
        } catch (PDOException $e) {
            return null;
        }
    }

    function addEmployee(array $employee){
        $query = "INSERT INTO employees (" . implode(', ', array_keys($employee)) . ") VALUES " .
            '(' . implode(', ', array_map(function ($key) {
                return ":$key";
            }, array_keys($employee))) . ')';

        try {
            $this->query($query, $employee, false);
            return $this->query("SELECT * FROM employees WHERE phoneNumber = ?", [$employee['phoneNumber']])[0];
        } catch (PDOException $e) {
            return $e;
        }
    }
}