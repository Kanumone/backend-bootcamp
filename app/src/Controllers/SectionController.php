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
        $section = $this->model->getSection($section_id);
        $this->pageData["products"] = $products;
        $this->pageData["title"] = $section['title'];
        $this->pageData['description'] = $section['description'];
        $this->pageData["section"] = $section;
        $this->pageData['breadcrumbs'] = array(
            array(
                'title' => 'Категории товаров',
                'active' => false
            ),
            array(
                'title' => $section['title'],
                'active' => true
            ),
        );
        $this->view->render('section', $this->pageData);
    }
}