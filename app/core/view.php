<?php

class View
{
    function generate($content_view, $template_view, $date = null)
    {


        include 'app/views/' . $template_view;
    }
}