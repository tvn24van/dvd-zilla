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
    </main>

    <footer class="window">
        <div class="title-bar">
            <div class="title-bar-text">
                &copy; <script>document.write(new Date().getFullYear())</script> <?php echo(config('name').' v'.config('version')) ?>
            </div>
            <div class="title-bar-controls">
                <button aria-label="Minimize"></button>
                <button aria-label="Maximize"></button>
                <button aria-label="Close"></button>
            </div>
        </div>
        <div class="window-body footer-window-body">
            <ul class="tree-view">
                <li>
                    W projekt zaangażowani byli następujący kontrybutorzy:
                    <ul>
                        <li><a target="_blank" href="https://github.com/tvn24van"><img src="https://github.com/tvn24van.png">Wojciech Smaza</a></li>
                        <li><a target="_blank" href="https://github.com/zahutech"><img src="https://github.com/zahutech.png">Michał Zahuta</a></li>
                        <li><a target="_blank" href="https://github.com/R1kst3r"><img src="https://github.com/R1kst3r.png">Adam Wróblewski</a></li>
                    </ul>
                </li>
                <li>*Liczymy na solidną 3*</li>
                <li>
                    Źródła
                    <ul>
                        <li><a target="_blank" href="https://github.com/jdan/98.css">98.css</a></li>
                        <li><a target="_blank" href="https://github.com/divshot/geo-bootstrap">Zdjęcia</a></li>
                    </ul>
                </li>
            </ul>
            <img id="webAward" src="<?php site_url() ?>/template/img/fillers/community.gif" alt="Web award">
        </div>
        <img id="mchammer" src="<?php site_url() ?>/template/img/fillers/mchammer.gif" alt="mchammer">
    </footer>
</body>
</html>