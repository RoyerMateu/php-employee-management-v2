<?php

class EmployeeController extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->loadModel("employee");
    }

    function dashboard()
    {
        $this->view->render("employee/dashboard");
    }

    function getEmployees()
    {
        echo json_encode($this->model->getEmployees());
    }

    function addEmployee()
    {
        $employee = json_decode(file_get_contents("php://input"), true);
        //print_r($employee);
        $createdEmployee = $this->model->addEmployee($employee);
        echo json_encode($createdEmployee);
    }

    function updateEmployee()
    {
        $employee = json_decode(file_get_contents("php://input"),true);
        $updatedEmployee = $this->model->updateEmployee($employee);
        echo json_encode($updatedEmployee);
    }

function show($id)
{
    $this->view->employee = $this->model->getEmployee($id);
    $this->view->render("employee/employee");
}

function deleteEmployee($id)
{
    $this->model->deleteEmployee($id);
}
}
?>