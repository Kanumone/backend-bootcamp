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
