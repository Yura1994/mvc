<?php

class Controller_Main extends Controller
{
    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index()
    {
//        echo "lalalala";
//        die();
        $data = $this->model->get_date();
        $this->view->generate('main_view.php', 'template_view.php');
    }
}