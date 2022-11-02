<?php

namespace Kanumone\Bshop\Models;

use Kanumone\Bshop\Core\Model;

class SectionModel extends Model
{
    public function __construct(private $section_id) {
        parent::__construct();
    }

    public function getProducts($limit, $currentPage) {
        $offset = ($currentPage - 1) * $limit;
        $req = "select p.product_id,
                       p.title,
                       p.main_section_id,
                       i.path as image_path,
                       i.alt as image_alt,
                       s.title as main_section
                from products p
                join images i
                    on i.image_id = p.anounce_image_id
                join product_section ps
                    on ps.product_id = p.product_id
                join sections s
                    on p.main_section_id = s.section_id
                where ps.section_id = :section_id and p.activity = 1
                limit $limit offset $offset";
        $st = $this->db->prepare($req);
        $st->bindValue(":section_id", $this->section_id);
        $st->execute();
        return $st->fetchAll();
    }

    public function getSection() {
        $req = 'select * from sections where section_id = :section_id';
        $st = $this->db->prepare($req);
        $st->bindValue(":section_id", $this->section_id);
        $st->execute();
        return $st->fetch();
    }

    public function countProducts() {
        $req = 'select count(product_id) as count_pages from product_section where section_id = :section_id';
        $st = $this->db->prepare($req);
        $st->bindValue(":section_id", $this->section_id);
        $st->execute();
        $res = $st->fetch();
        return $res['count_pages'];
    }
}