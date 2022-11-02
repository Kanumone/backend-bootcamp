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
        <a href="<?= SITE_PATH . "form" ?>">Обратная связь</a>
        <?php
        $nesting = count($pageData['breadcrumbs']);
        if ($nesting === 2) :?>
            <a href="<?= SITE_PATH ?>" style="margin-left: 8px; text-decoration: none">Назад</a>
        <?php elseif ($nesting === 3 ):?>

            <a href="<?= SITE_PATH . 'section/' . $pageData['product_info']['section_id'] ?>" style="margin-left: 8px; text-decoration: none">Назад</a>

        <?php endif ;?>

    </div>
</nav>