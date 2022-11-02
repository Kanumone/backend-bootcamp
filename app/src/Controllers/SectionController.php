<?php

namespace Kanumone\Bshop\Controllers;

use Kanumone\Bshop\Core\Controller;
use Kanumone\Bshop\Models\SectionModel;

class SectionController extends Controller {
    public function __construct($section_id) {
        parent::__construct();
        $this->model = new SectionModel($section_id);
    }

    public function show() {
        $itemPerPage = 12;
        $this->pageData['pagination'] = $this->pagination($itemPerPage);
        $products = $this->model->getProducts($itemPerPage, $this->pageData['pagination']['currentPage']);
        if (empty($products)) $this->view->notFound();
        $section = $this->model->getSection();
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

    private function pagination($itemPerPage): array | bool {
        $params = array(
            'currentPage' => empty($_GET['page']) ? 1 : $_GET['page'],
            'countPages' => ceil($this->model->countProducts() / $itemPerPage)
        );

        if ($params['countPages'] == 1) return false;
        else return $params;
    }
}