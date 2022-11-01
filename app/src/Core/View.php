<?php

namespace Kanumone\Bshop\Core;

class View
{
    public function render($template, $pageData = array())
    {
        require_once TEMPLATES_PATH . 'header.php';
        require_once TEMPLATES_PATH . $template . '.php';
        require_once TEMPLATES_PATH . 'footer.php';
    }

    public function formatPrice($price, $decimal = 0): string {
        if (empty($price)) {
            return '';
        } else {
            return number_format($price, $decimal, '.',' ');
        }
    }

    public function pagination($amountItems, $itemPerPage) {
        $countPages = $amountItems / $itemPerPage;
        $html = '
            <nav aria-label="pagination">
              <ul class="pagination pagination-lg justify-content-center">
        ';
        for ($i = 1; $i <= $countPages; $i++) {
            $html .= "
                <li class=\"page-item\" aria-current=\"page\">
                  <span class=\"page-link\">$i</span>
                </li>
            ";
        }
        $html .= '
                </ul>
            </nav>
        ';
        return $html;
    }
}
