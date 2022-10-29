<?php

namespace Kanumone\Bshop\Models;

use Kanumone\Bshop\Core\Model;

class IndexModel extends Model {
    public function getAllSections() {
        $req = "select s.section_id,
                       s.title,
                       s.description,
                       count(p.product_id) as product_quantity
                from sections s
                join product_section ps
                    on s.section_id = ps.section_id
                join products p
                    on p.product_id = ps.product_id
                group by s.title
                order by product_quantity desc";
        $st = $this->db->prepare($req);
        $st->execute();
        return $st->fetchAll(\PDO::FETCH_ASSOC);
    }
}