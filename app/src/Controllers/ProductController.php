<?php

namespace Kanumone\Bshop\Controllers;

use Kanumone\Bshop\Core\Controller;
use Kanumone\Bshop\Models\ProductModel;

class ProductController extends Controller
{
    public function __construct($product_id)
    {
        parent::__construct();
        $this->model = new ProductModel($product_id);
    }

    public function show() {
        $this->pageData['product_info'] = $this->model->getProductInfo();
        $this->pageData['images'] = $this->model->getImages();
        $this->pageData['sections'] = $this->model->getSections();
        $this->view->render('product_card', $this->pageData);
    }
}