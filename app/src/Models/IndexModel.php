<?php

namespace Kanumone\Bshop\Models;

use Kanumone\Bshop\Core\Model;

class IndexModel extends Model {
    public function getAllSections() {
        $req = "select title, description from sections";
        $st = $this->db->prepare($req);
        $st->execute();
        return $st->fetchAll(\PDO::FETCH_ASSOC);
    }
}