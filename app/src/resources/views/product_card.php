<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= SITE_PATH . "css/main.css"?>">
</head>
<body>
<div class="layout">
    <div class="slider">
        <?php foreach($pageData['images'] as $idx => $image): ?>
            <img src="<?= SITE_PATH . $image['path'] ?>"
                 <?php if ($idx === 0) echo "class='first'" ?>
                 alt="<?= $image['alt'] ?>"
            >
        <?php endforeach; ?>
    </div>
    <img class="main-img" src="<?= SITE_PATH . $pageData['images'][0]['path'] ?>" alt="<?= $pageData['images'][0]['alt'] ?>">
    <div class="product-info">
        <div class="product-info__header">
            <h2><?= $pageData['product_info'][0]['title'] ?></h2>
            <div class="product-info__categories">
                <?php foreach ($pageData['sections'] as $idx => $section): ?>
                    <a href="#"><?= $section['title'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="product-info__price">
            <div class="price__main" style="font-weight: 600"><span class="price__main_through"><?= number_format($pageData['product_info'][0]['price'], 0, ',',' ') ?></span><span
                        style="margin-left: 8px;">2 499 ₽</span></div>
            <div class="price__promo"><span style="font-weight: 600">2 227 ₽</span><span style="font-size: 16px"> — с промокодом</span>
            </div>
        </div>
        <div class="product-info__options">
            <div>
                <img src="<?= SITE_PATH .  "assets/check.webp"?>" alt="check"><span class="options__text">В наличии в магазине <a
                            href="#">Lamoda</a></span>
            </div>
            <div>
                <img src="<?= SITE_PATH .  "assets/shipping.webp"?>" alt="shipping"><span class="options__text">Бесплатная доставка</span>
            </div>
        </div>
        <div class="product-info__quantity">
            <button disabled>-</button>
            <input class="quantity" type="number" value="1" oninput="this.value = this.value.replace(/\d?\./g, ''); this.value = this.value.replace(/[+-]/g, '$1')" >
            <button>+</button>
        </div>
        <div class="product-info__buttons">

            <button class="product-info__button_primary">КУПИТЬ</button>
            <button class="product-info__button">В ИЗБРАННОЕ</button>
        </div>
        <div class="product-info__description">
            <?= $pageData['product_info'][0]['description'] ?>
        </div>
        <div class="product-info__social">
            <div class="social__text">ПОДЕЛИТЬСЯ:</div>
            <div class="social__icons">
                <a href="#"><img src="<?= SITE_PATH . 'assets/vk.webp'?>" alt=""></a>
                <a href="#"><img src="<?= SITE_PATH . 'assets/g+.webp'?>" alt=""></a>
                <a href="#"><img src="<?= SITE_PATH . 'assets/fb.webp'?>" alt=""></a>
                <a href="#"><img src="<?= SITE_PATH . 'assets/twitter.webp'?>" alt=""></a>
                <a href="#"><img src="<?= SITE_PATH . 'assets/share.webp'?>" alt=""></a>
                <div class="share">123</div>
            </div>
        </div>
    </div>
</div>
<div class="notification"></div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?= SITE_PATH . "js/changeImg.js"?>"></script>
<script src="<?= SITE_PATH .  "js/quantity.js"?>"></script>
</body>
</html>