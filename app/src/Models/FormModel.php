<?php

namespace Kanumone\Bshop\Models;

use Kanumone\Bshop\Core\Model;

class FormModel extends Model {
    public function create($params) {
        $req = 'INSERT INTO bootcamp.forms (`id`, `name`, `email`, `sex`, `birthday`, `subject`, `comment`) 
                VALUES (NULL, :name, :email, :sex, :birthday, :subject, :comment);';
        $st = $this->db->prepare($req);
        $st->execute([
            "name" => $params['name'],
            "email" => $params['email'],
            "sex" => $params['sex'],
            "birthday" => $params['birthday'],
            "subject" => $params['subject'],
            "comment" => $params['comment'],
        ]);
        return $st;
    }
}