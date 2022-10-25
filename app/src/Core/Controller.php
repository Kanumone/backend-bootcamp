<?php

namespace Kanumone\Bshop\Core;

class Controller
{
    public View $view;
    public Model $model;
    protected array $pageData = array();

    public function __construct($Model)
    {
        $this->view = new View();
        $this->model = new $Model();
    }
}
