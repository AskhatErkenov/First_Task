<!DOCTYPE>
<html>
<head >
    <link rel="stylesheet"  href="function/style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="icon" href="logo_auto.png">
    <?php $title = 'Эркенов Асхат Артурович 211-362 9 ЛР 5 Вариант' ?>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
</head>

<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a href="index.php"><img src="Logo_Polytech_rus_main.jpg" width="200"></a> <h1 class = "h">Эркенов Асхат Артурович 211-362 9 ЛР 5 Вариант</h1>
</header>
<body>
    <main class="main">
    <div>
        <div>
            <?php include "math.php" ?>
        </div>
    </div>        
    </main>
    <?php require('footer.php')?>