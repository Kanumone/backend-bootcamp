<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageData['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= SITE_PATH . "css/style.css" ?>">
    <link rel="stylesheet" href="<?= SITE_PATH . 'css/main.css' ?>">
</head>
<body>
<header class="bg-light">
    <h1 style="font-size: 38px"><?= $pageData['title'] ?></h1>
    <?php
        $is_nest = isset($pageData['breadcrumbs'][1]['active']);
        if ($is_nest && $pageData['breadcrumbs'][1]['active'] == 1 ) :?>
        <div class="header-description"><?= $pageData['description'] ?></div>
    <?php endif ;?>
</header>
<div class="container">
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
            <?php
                $nesting = count($pageData['breadcrumbs']);
                if ($nesting === 2) :?>
                <a href="<?= SITE_PATH ?>" style="margin-left: 8px; text-decoration: none">Назад</a>
            <?php elseif ($nesting === 3 ):?>

                <a href="<?= SITE_PATH . 'section/' . $pageData['product_info']['section_id'] ?>" style="margin-left: 8px; text-decoration: none">Назад</a>

            <?php endif ;?>

        </div>
    </nav>