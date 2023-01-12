<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width">
    <title><?php page_title() ?> | <?php site_name() ?></title>
    <link rel="shortcut icon" href="<?php site_url() ?>/template/img/logo.svg" type="image/x-icon">
    <link href="https://unpkg.com/98.css" rel="stylesheet">
    <link href="<?php site_url() ?>/template/css/constants.css" rel="stylesheet"/>
    <link href="<?php site_url() ?>/template/css/style.css" rel="stylesheet"/>
    <script defer src="<?php site_url() ?>/template/js/animatedTitle.js"></script>
    <script defer src="<?php site_url() ?>/template/js/visuals.js"></script>
</head>
<body>
    <nav>
        <?php nav_menu() ?>
    </nav>
    <main>
        <?php page_content() ?>
        <!-- sram -->
    </main>
    <footer>
        &copy; <script>document.write(new Date().getFullYear())</script> <?php site_name() ?>
        <br>Wersja <?php site_version() ?>
    </footer>
</body>
</html>