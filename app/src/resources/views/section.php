<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= SITE_PATH . "/css/card.css" ?>">
</head>
<body>
    <div class="container">
        <?php foreach ($pageData['products'] as $id => $product) :?>
            <div class="card">
                <img src="<?= SITE_PATH . $product['image_path'] ?>" alt="<?= $product['image_alt'] ?>" class="card__preview"/>
                <div class="card__price"><?= $product['price'] ?></div>
                <div class="card__title"><?= $product['title'] ?></div>
            </div>
        <?php endforeach ;?>
    </div>
</body>
</html>