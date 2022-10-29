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
}
