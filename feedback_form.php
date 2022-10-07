<?php require('header.php'); ?>
<body>
<main class="main">
<div class="form-wrapper">

    <form class="contact-form" id="contact-form_1" method="POST" enctype="multipart/form-data">
        <div>
            <input style="margin-left: 30%" name="name" type="text" class="contact-form__input contact-form__input_name" placeholder="ФИО">
        </div>
        <div>
            <input style="margin-left: 30%" name="email" type="email" class="contact-form__input contact-form__input_email" placeholder="email">
        </div>
        <div style="margin-left: 30%">
            <input type="radio" name="inset" value="" checked>
            <label>Из Интернета</label>

            <input type="radio" name="inset" value="">
            <label>От родственников</label>

            <input type="radio" name="inset" value="">
            <label>От друзей</label>
        </div>

        <div style="margin-left: 30%">
            <select>
                <option disabled>Выберите</option>
                <option value="1">Жалоба</option>
                <option value="2">Предложение</option>
            </select>
        </div>

        <div >
            <textarea style="margin-left: 30%" name="text" placeholder="Текст сообщения"></textarea>
        </div>

        <div style="margin-left: 30%">
            <input type="file" name="files1">
        </div>

        <div style="margin-left: 30%">
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement" class="contact-form__checkbox-label">Даю согласие на обработку персональных данных</label>
        </div>
        <div style="margin-left: 30%">
        <button style="margin-left: 30%" type="submit">Отправить</button>
        </div>
    </form>

</div>
</main>
<?php require('footer.php'); ?>