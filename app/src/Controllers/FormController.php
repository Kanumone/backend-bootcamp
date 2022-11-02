<?php

namespace Kanumone\Bshop\Controllers;

use Kanumone\Bshop\Core\Controller;
use Kanumone\Bshop\Models\FormModel;

class FormController extends Controller
{

    private $saveParams = ['name', 'email', 'sex', 'birthday'];
    public function __construct() {
        parent::__construct();
        $this->model = new FormModel();
        $this->pageData['title'] = 'Обратная связь';
        foreach ($this->saveParams as $idx => $param) {
            if (isset($_COOKIE[$param])) {
                $this->pageData[$param] =  htmlspecialchars($_COOKIE[$param]);
            } else {
                $this->pageData[$param] = '';
            }
        }
    }

    public function show() {
        $this->view->render('form', $this->pageData);
    }

    public function send() {

        $errorLogs = array();
        foreach ($_POST as $name => $param) {
            if ($name == 'email') {
                $correct = preg_match('#@#', $param);
                if (!$correct || $correct > 1) $errorLogs[$name] = 'incorrect';
            }

            if (empty($param)) {
                $errorLogs[$name] = 'empty';
            }
            $params[$name] = $param;

        }

        if (!empty($errorLogs)) {
            $this->pageData['errors'] = $errorLogs;
            $this->show();
        } else {
            $res = $this->model->create($params);
            if ($res) {
                $this->changeCookie($params);
                $this->view->render('success_form', $this->pageData);
            } else {
                return 'Server error';
            }
        }
    }

    private function changeCookie($params) {
        foreach ($this->saveParams as $idx => $param) {
            $this->pageData[$param] = '';
            setcookie($param, $params[$param], strtotime("+7 days"));
        }
    }
}