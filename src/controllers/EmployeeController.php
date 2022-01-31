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
}

?>