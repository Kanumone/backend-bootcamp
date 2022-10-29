<?php

namespace Kanumone\Bshop\Controllers;

use Kanumone\Bshop\Core\Controller;
use Kanumone\Bshop\Models\SectionModel;

class SectionController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new SectionModel();
    }

    public function show($section_id) {
        $products = $this->model->getProducts($section_id);
        $this->pageData["products"] = $products;
        $this->view->render('section', $this->pageData);
    }
}