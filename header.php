<!DOCTYPE>
<html>
<head >
    <!--Название вкладки сайта-->
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="icon" href="logo_auto.png">
    <?php $title = 'Эркенов Асхат Артурович 211-362 3 ЛР' ?>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
</head>

<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

    <h1 class="my-0 mr-md-auto font-weight-normal">Auto+</h1>
    <?php
    $menu = ['Главная', 'Контакты', 'Вход', 'Картинки', 'JavaScript'];
    $menu_id = ['index.php', 'feedback_form.php', 'autorization.php', 'image_db.php', 'javaScript.php']
    ?>
    <nav class="my-2 my-md-0 mr-md-3">
            <?php for($i = 0; $i < count($menu); $i++){ ?>
                <a class="p-2 text-dark" href=<?php echo "./",$menu_id[$i] ?>><?php echo $menu[$i]?></a>
            <?php } ?>
    </nav>
</header>
