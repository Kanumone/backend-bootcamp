<?php

namespace Kanumone\Bshop\Core;

class View
{
    public function render($template, $pageData = array())
    {
        require_once TEMPLATES_PATH . 'header.php';
        if (!empty($pageData['breadcrumbs'])) require_once TEMPLATES_PATH . 'breadcrumbs.php';
        require_once TEMPLATES_PATH . $template . '.php';
        if (!empty($pageData['pagination']['render'])) require_once TEMPLATES_PATH . 'pagination.php';
        require_once TEMPLATES_PATH . 'footer.php';
    }

    public function formatPrice($price, $decimal = 0): string {
        if (empty($price)) {
            return '';
        } else {
            return number_format($price, $decimal, '.',' ');
        }
    }

    public function notFound() {
        http_response_code(404);
        require_once SRC_PATH . '/resources/404.php';
        die();
    }
}
