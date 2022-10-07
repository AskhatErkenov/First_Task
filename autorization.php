<?php require('header.php'); ?>
<body >
<main class="main">
<form>
    <div>
        <div>
            <input style="margin-left: 30%" type="text" placeholder="Логин" name="uname" required>
        </div>
        <div>
            <input style="margin-left: 30%" type="password" placeholder="Пароль" name="psw" required>
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
<?php require('footer.php'); ?>