<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageData['title'] ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Welcome to Bootcamp Shop!</h1>
    <div class="sections-wrapper">
        <?php foreach ($pageData['sections'] as $idx => $section) :?>
            <div class="section">
                <h2><?= $section['title'] ?></h2>
                <div class="section__content"><?= $section['description'] ?></div>
            </div>
        <?php endforeach ;?>
    </div>
</div>
</body>
</html>
