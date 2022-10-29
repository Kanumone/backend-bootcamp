<?php

namespace Kanumone\Bshop\Models;

use Kanumone\Bshop\Core\Model;

class SectionModel extends Model
{
    public function getProducts($section_id) {
        $req = 'select p.title,
                       round(p.price, 2) as price,
                       i.path as image_path,
                       i.alt as image_alt
                from products p
                 join images i
                      on i.image_id = p.anounce_image_id
                 join product_section ps
                      on ps.product_id = p.product_id
                where ps.section_id = :section_id and p.activity = 1;
                ';
        $st = $this->db->prepare($req);
        $st->bindValue(":section_id", $section_id);
        $st->execute();
        return $st->fetchAll(\PDO::FETCH_ASSOC);
    }
}