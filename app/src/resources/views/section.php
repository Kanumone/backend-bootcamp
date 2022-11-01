<link rel="stylesheet" href="<?= SITE_PATH . "css/card.css" ?>">

<div class="card-list">
<?php foreach ($pageData['products'] as $id => $product) :?>
    <div class="card">
        <div class="card__preview">
            <img src="<?= SITE_PATH . $product['image_path'] ?>" alt="<?= $product['image_alt'] ?>"/>
        </div>
        <div class="card__section" style="text-align: end; padding: 4px"><?= $product['main_section_id'] ?></div>
        <a href="<?= $_SERVER["REQUEST_URI"] . "/product/{$product['product_id']}" ?>">
            <div class="card__title"><?= $product['title'] ?></div>
        </a>
    </div>
<?php endforeach ;?>
</div>

<?= $this->pagination(15, 5); ?>
