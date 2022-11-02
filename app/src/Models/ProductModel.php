<?php

namespace Kanumone\Bshop\Models;

use Kanumone\Bshop\Core\Model;

class ProductModel extends Model {

    public function __construct(private $section_id, private $product_id) {
        parent::__construct();
    }

    public function getProductInfo() {
        $req = 'select  p.product_id,
                        p.title,
                        round(p.price) as price,
                        p.description,
                        p.main_section_id,
                        p.promo_price,
                        p.sale_price,
                        s.section_id,
                        s.title as section
                from products p
                join product_section ps
                    on ps.product_id = p.product_id
                join sections s
                    on ps.section_id = s.section_id
                where p.product_id = :product_id and ps.section_id = :section_id';
        $st = $this->db->prepare($req);
        $st->execute([
            "section_id" => $this->section_id,
            "product_id" => $this->product_id
        ]);
        return $st->fetch();
    }

    public function getImages() {
        $req = "select i.path, i.alt, i.type from images i
                join product_image pi
                on pi.image_id = i.image_id
                where pi.product_id = :product_id";
        $st = $this->db->prepare($req);
        $st->execute([
            "product_id" => $this->product_id
        ]);
        $res = $st->fetchAll();
        $images = array();
        foreach ($res as $idx => $image) {
            if ($image['type'] == "main") {
                $images['main'] = $image;
            } else {
                $images['other'][] = $image;
            }
        }
        return $images;
    }

    public function getSections() {
        $req = 'select s.title, s.section_id from sections s
	            join product_section ps
                on ps.section_id = s.section_id
                where ps.product_id = :product_id';
        $st = $this->db->prepare($req);
        $st->execute([
            "product_id" => $this->product_id
        ]);
        return $st->fetchAll();
    }
}