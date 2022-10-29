<?php

namespace Kanumone\Bshop\Core;

class View
{
    public function render($template, $pageData = array())
    {
        include TEMPLATES_PATH . $template . '.php';
    }
}
