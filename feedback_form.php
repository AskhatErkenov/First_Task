<?php
$name = '';
$email = '';
$inset = '';
require('header.php'); ?>
    <body>

<main class="main">
    <div class="form-wrapper">

        <form class="contact-form" method="post" action="home.php">
            <?php

            if (isset($_GET['name']))
                $name = $_GET['name'];
            if (isset($_GET['email']))
                $email = $_GET['email'];
            if (isset($_GET['inset']))
                $inset = $_GET['inset'];
            ?>
            <div>
                <input  style="margin-left: 30%" name="name" type="text"
                       class="name" value="<?php echo $name ?>">
            </div>
            <div>
                <input style="margin-left: 30%" name="email" type="email"
                       class="contact-form__input contact-form__input_email" placeholder="email"
                       value="<?php echo $email ?>">
            </div>
            <div style="margin-left: 30%">
                <input type="radio" name="inset" value="0" <?php if ($inset == '0') echo 'checked' ?>>
                <label>Реклама из интернета</label>

                <input type="radio" name="inset" value="1" <?php if ($inset == '1') echo 'checked' ?>>
                <label>Рассказали друзья</label>
            </div>

            <div style="margin-left: 28.7%" class="select">
                <select name="select">
                    <option disabled>Выберите</option>
                    <option value="1">Жалоба</option>
                    <option value="2">Предложение</option>
                </select>
            </div>

            <div>
                <textarea style="margin-left: 30%" name="text" placeholder="Текст сообщения"></textarea>
            </div>

            <div style="margin-left: 30%">
                <input type="file" name="files1">
            </div>

            <div style="margin-left: 30%">
                <input type="checkbox" name="agreement" id="agreement">
                <label for="agreement" class="contact-form__checkbox-label">Даю согласие на обработку персональных
                    данных</label>
            </div>
            <div>
                <button style="margin-left: 30%" type="submit">Отправить</button>
            </div>

        </form>
    </div>
</main>

<?php

require('footer.php'); ?>