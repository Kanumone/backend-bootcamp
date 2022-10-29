<?php

namespace Kanumone\Bshop\Controllers;

use Kanumone\Bshop\Core\Controller;
use Kanumone\Bshop\Models\IndexModel;

class IndexController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->model = new IndexModel();
    }

    public function index() {
        $this->pageData['title'] = "Категории товаров";
        $this->pageData['breadcrumbs'] = array(
          array(
              'title' => 'Категории товаров',
              'active' => true
          )
        );
        $this->pageData['sections'] = $this->model->getAllSections();
        $this->view->render('index', $this->pageData);
    }
}