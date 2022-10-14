<?php
require('header.php');
?>

<?php
require('db_connecting.php');
$result = mysqli_query($mysql, "SELECT * FROM `image`");
?>
<main class="main">
    <table border="10" ; align="center">
        <tr>
            <th>Фото</th>
            <th>Пароль</th>
        </tr>
        <?php
        for ($data = []; $name = mysqli_fetch_assoc($result); $data[] = $name) ;
        $result = '';
        foreach ($data as $elem) {
            $result .= '<tr>';
            $result .= '<td>' . $elem['id'] . '</td>';
            $result .= '<td><img title="' . $elem['name'] . '" style="width: 200px" src=" ' . $elem['image'] . '" > </td>';
            $result .= '<td>' . $elem['name'] . '</td>';
            $result .= '</tr>';
        }
        echo $result;
        ?>
    </table>
</main>
<?php require('footer.php'); ?>
