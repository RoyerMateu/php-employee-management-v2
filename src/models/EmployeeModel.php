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
}