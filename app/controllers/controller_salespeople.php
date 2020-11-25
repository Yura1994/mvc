<?php

class Controller_Salespeople extends Controller
{
    function __construct()
    {
        $this->model = new Model_Salespeople();
        $this->view = new View();
    }

    function action_index()
    {
//        echo "lalalala";
//        die();
        $data = $this->model->get_date();
        $this->view->generate('salespeople_view.php', 'template_view.php');
    }
}