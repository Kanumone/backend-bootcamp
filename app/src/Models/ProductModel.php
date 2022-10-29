<?php

namespace Kanumone\Bshop\Models;

use Kanumone\Bshop\Core\Model;

class ProductModel extends Model
{
    private int $product_id;

    public function __construct($product_id) {
        parent::__construct();
        $this->product_id = $product_id;
    }

    public function getProductInfo() {
        $req = 'select p.title,  round(p.price) as price, p.description
                from products p
                where product_id = :product_id';
        $st = $this->db->prepare($req);
        $st->execute([
            "product_id" => $this->product_id
        ]);
        return $st->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getImages() {
        $req = 'select i.path, i.alt, i.type from images i
                join product_image pi
                on pi.image_id = i.image_id
                where pi.product_id = :product_id';
        $st = $this->db->prepare($req);
        $st->execute([
            "product_id" => $this->product_id
        ]);
        return $st->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getSections() {
        $req = 'select s.title from sections s
	            join product_section ps
                on ps.section_id = s.section_id
                where ps.product_id = :product_id;';
        $st = $this->db->prepare($req);
        $st->execute([
            "product_id" => $this->product_id
        ]);
        return $st->fetchAll(\PDO::FETCH_ASSOC);
    }
}