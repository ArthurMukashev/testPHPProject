<html lang="ru">
<head>
    <title><?= SITE_NAME ?></title>
</head>
<body>
<header>
    <? include 'includes/header.php' ?>
</header>
<main>
    <?= isset($content) ? $content : '' ?>
</main>
<footer>
    <? include 'includes/footer.php' ?>
</footer>
</body>
</html>