<?php

namespace Kanumone\Bshop\Controllers;

use Kanumone\Bshop\Core\Controller;
use Kanumone\Bshop\Models\ProductModel;

class ProductController extends Controller
{
    public function __construct($section_id, $product_id)
    {
        parent::__construct();
        $this->model = new ProductModel($section_id, $product_id);
    }

    public function show() {
        $this->pageData['product_info'] = $this->model->getProductInfo();
        if ($this->pageData['product_info'] === false) $this->view->notFound();

        $this->pageData['images'] = $this->model->getImages();
        $this->pageData['sections'] = $this->model->getSections();
        $this->pageData['title'] = $this->pageData['product_info']['title'];

        $this->pageData['breadcrumbs'] = array(
            array(
                'title' => 'Категории товаров',
                'active' => false
            ),
            array(
                'title' => $this->pageData['product_info']['section'],
                'active' => false
            ),
            array(
                'title' => $this->pageData['product_info']['title'],
                'active' => true
            ),
        );

        $this->view->render('product_card', $this->pageData);
    }
}