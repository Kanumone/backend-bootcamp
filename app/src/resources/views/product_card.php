
<div class="layout">
    <div class="slider">
        <?php if (!empty($pageData['images']['other'])) :?>
            <?php foreach($pageData['images']['other'] as $idx => $image): ?>
                <img src="<?= SITE_PATH . $image['path'] ?>"
                    <?php if ($idx === 0) echo "class='first'" ?>
                     alt="<?= $image['alt'] ?>"
                >
            <?php endforeach; ?>
        <?php endif ;?>

    </div>
    <img class="main-img" src="<?= SITE_PATH . $pageData['images']['main']['path'] ?>" alt="<?= $pageData['images']['main']['alt'] ?>">
    <div class="product-info">
        <div class="product-info__header">
            <h2><?= $pageData['product_info']['title'] ?></h2>
            <div class="product-info__categories">
                <?php foreach ($pageData['sections'] as $idx => $section): ?>
                    <a href="<?= SITE_PATH . "section/{$section['section_id']}" ?>"><?= $section['title'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="product-info__price">
            <div class="price__main" style="font-weight: 600"><span class="price__main_through"><?= $this->formatPrice($pageData['product_info']['price'], 2) ?></span><span
                        style="margin-left: 8px;"><?= $this->formatPrice($pageData['product_info']['sale_price']) ?></span></div>
            <div class="price__promo"><span style="font-weight: 600"><?= $this->formatPrice($pageData['product_info']['promo_price']) ?> ₽</span><span style="font-size: 16px"> — с промокодом</span>
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
            <?= $pageData['product_info']['description'] ?>
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
