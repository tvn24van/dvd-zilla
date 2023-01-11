<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title><?php page_title() ?> | <?php site_name() ?></title>
    <link href="<?php site_url() ?>/template/css/style.css" rel="stylesheet"/>
    <script defer src="<?php site_url() ?>/template/js/visuals.js"></script>
    <script defer src="<?php site_url() ?>/template/js/animatedTitle.js"></script>
</head>
<body>
    <nav>
        <?php nav_menu() ?>
    </nav>
    <main>
        <?php page_content() ?>
    </main>
    <footer>
        &copy; <script>document.write(new Date().getFullYear())</script> <?php site_name() ?>
        <br>Wersja <?php site_version() ?>
    </footer>
</body>
</html>