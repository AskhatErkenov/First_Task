<?php require('header.php'); ?>
<body >
<main class="main">
<form method="post" action="db_connecting.php">
    <div>
        <div>
            <input class = "log" style="margin-left: 30%" type="text" placeholder="Логин" name="login"
        </div>
        <div>
            <input style="margin-left: 30%" type="password" placeholder="Пароль" name="password">
        </div>
        <div>
            <button style="margin-left: 30%" type="submit">Войти</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Запомнить меня
            </label>
        </div>
    </div>
</form>
</main>

<?php
require('footer.php'); ?>