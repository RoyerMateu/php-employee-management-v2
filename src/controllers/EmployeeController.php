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

<<<<<<< HEAD
    function show($id)
    {
        $this->view->employee = $this->model->getEmployee($id);
        $this->view->render("employee/employee");
    }
=======
    function deleteEmployee($id)
    {
        $this->model->deleteEmployee($id);
>>>>>>> 7f9e3f10b0be65dafc29c41eb3e96cdf51fff0cf
    }

?>