
    <h1 style="font-size: 56px"><?= $pageData['title'] ?></h1>
    <nav class="navbar">
        <ol class="breadcrumb">
            <?php foreach ($pageData['breadcrumbs'] as $idx => $item): ?>
                <?php if ($item['active']): ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= $item['title'] ?></li>
                <?php else: ?>
                    <li class="breadcrumb-item"><?= $item['title'] ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
        <div class="navbar__buttons">
            <a>Обратная связь</a>
            <a href="#" style="margin-left: 8px;">Назад</a>
        </div>

    </nav>
    <div class="sections-wrapper">
        <?php foreach ($pageData['sections'] as $idx => $section) :?>
            <div class="section">
                <div class="section__header">
                    <a href="<?= '/section/' . $section['section_id'] ?>" style="text-decoration: none; color: black"><h2><?= $section['title'] ?></h2></a>
                    <div class="quantity"><?= "Товаров: " . $section['product_quantity'] ?></div>
                </div>
                <div class="section__content"><?= $section['description'] ?></div>
            </div>
        <?php endforeach ;?>
    </div>

