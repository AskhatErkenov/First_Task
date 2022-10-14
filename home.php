<?php require('header.php'); ?>
<main class="main">
    <?php
    echo '<p style="margin-left: 30%">' . $_POST['name'] . '</b></p>';
    if ($_POST['select'] == '2') {
        echo '<p style="margin-left: 30%">Предложение</p>';
    } else {
        echo '<p style="margin-left: 30%">Жалоба</p>';
    }
    echo '<p><textarea disabled style="resize: none; margin-left: 30%" rows="10" cols="50">' . $_POST['text'] . '</textarea></p>';
    if (isset($_POST['files1']) && $_POST['files1'] != '') echo '<p><span style="margin-left: 30%">' . $_POST['files1'] . '</span></p>';
    echo '<div><button style="margin-left: 30%"><a class = "btn" href="feedback_form.php?name=' . $_POST['name'] . '&email=' . $_POST['email'] . '&inset=' . $_POST['inset'] . '">Заполнить снова</a></button></div>'
    ?>
</main>
<?php require('footer.php'); ?>

