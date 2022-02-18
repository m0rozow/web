<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная страница</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="icon.png" type="image/x-icon">
        <script src="js/jquery.min.js" defer></script>
        <script src="js/reg.js" defer></script>
    </head>
    <body>
        <header>
            <div class="title">WEB-программирование</div>
            <div class="menu">
            <?php require_once("menu.php");?>

            <?php if($session->existsData("user")): ?>
                <a href="<?=SITE_DIR?>user"><?=$session->getData("user")->getName()?></a>
                <a href="<?=SITE_DIR?>logout">Выйти</a>
            <?php else:?>
                <a href="<?=SITE_DIR?>login">Войти</a>
            <?php endif;?>
            </div>
        </header>
        <main>