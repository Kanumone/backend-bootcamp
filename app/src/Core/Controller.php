<?php

namespace Kanumone\Bshop\Core;

class Controller
{
    protected View $view;
    protected Model $model;
    protected array $pageData = array();

    public function __construct()
    {
        $this->view = new View();
    }
}
