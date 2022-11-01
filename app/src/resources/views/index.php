
    <div class="sections-wrapper">
        <?php foreach ($pageData['sections'] as $idx => $section) :?>
            <div class="section">
                <div class="section__header d-flex justify-content-between">
                    <a href="<?= '/section/' . $section['section_id'] ?>" style="text-decoration: none; color: black"><h2><?= $section['title'] ?></h2></a>
                    <div class="quantity"><?= "Товаров: " . $section['product_quantity'] ?></div>
                </div>
                <div class="section__content"><?= $section['description'] ?></div>
            </div>
        <?php endforeach ;?>
    </div>

