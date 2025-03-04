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

    function deleteEmployee($id){
        try {
            $this->query("DELETE FROM employees WHERE id = ?", [$id], false);
        } catch (PDOException $e) {
            return null;
        }
    }
    function getEmployee(string $id)
    {
        try {
            return $this->query("SELECT * FROM employees WHERE id = ?", [$id])[0];
        } catch (PDOException $e) {
            return null;
        }
    }

    function updateEmployee($employee){
        $id = $employee['id'];
        unset($employee['id']);

        $query = "UPDATE employees SET " .
            implode(', ', array_map(function ($key) {
                return "$key = :$key";
            }, array_keys($employee)))
            . " WHERE id = :id;";

        $employee['id'] = $id;

        try {
            $this->query($query, $employee, false);
        } catch (PDOException $e) {
            return null;
        }
        return $employee;
    }

}