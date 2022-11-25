<?php
$min_value = 10;
$max_value = 20;
$precison = 3;
$x = 5;
$encounting = 20;
$step = 2;
$type = 'D';
if ($type == 'A') {
    echo '';
}
if ($type == 'B') {
    echo '<ul>';
}
if ($type == 'C') {
    echo '<ol>';
}
if ($type == 'D') {
    echo '<table border="1px">';
    echo '<tr>';
}
if ($type == 'E') {
    echo '<div class="etype">';
}

for ($i = 0; $i < $encounting; $i++, $x += $step) {
    if ($x <= 10) {
        $f = 3 * $x + 9;
    } else {
        if ($x == 11) {
            $f = 'error';
        } else if ($x > 10 && $x < 20) {
            $f = (($x + 3) / ($x ** 2 - 121));
        } else {
            $f = $x ** 2 * 4;
        }
    }

    switch ($type) {
        case 'A':
            if ($f != "error") {
                $f = (float)$f;
                echo 'f(' . $x . ')=' . round($f, $precison);                   // выводим аргумент и значение функции
            } else {
                echo 'f(' . $x . ')=' . $f;
            }
            if ($i < $encounting - 1) {                               // если это не последняя итерация цикла
                echo '<br>';                                         // выводим знак перевода строки
            }
            break;
        case 'B':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f(' . $x . ')=' . round($f, $precison) . '</li>';                   // выводим аргумент и значение функции
            } else {
                echo '<li>f(' . $x . ')=' . $f . '</li>';
            }
            break;
        case 'C':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f(' . $x . ')=' . round($f, $precison) . '</li>';                   // выводим аргумент и значение функции
            } else {
                echo '<li>f(' . $x . ')=' . $f . '</li>';
            }
            break;
        case 'D':
            for ($i = 1; $i <= $encounting; $i++, $x += $step) {
                if ($f != "error") {
                    $f = (float)$f;
                    echo '<tr><td>' . $i . '</td><td>argument = ' . $x . '</td><td>f(' . $x . ') = ' . round($f, $precison) . ' </td></tr>';
                } else {
                    echo '<tr><td>' . $i . '</td><td>argument = ' . $x . '</td><td>f(' . $x . ') = ' . $f . '</td></tr> ';
                }
            }

        case 'E':
            if ($f != "error") {
                $f = (float)$f;
                echo '<div class="typee">f(' . $x . ')=' . round($f, $precison) . '</div>';

            } else {

                echo '<div class="typee">f(' . $x . ')=' . $f . '</div>';

            }
    }
}

if ($type == 'A') {
    echo 'f(' . $x . ')=' . $f;
}
if ($type == 'B') {
    echo '</ul>';
} else if ($type == 'C') {
    echo '</ol>';
} else if ($type == 'D') {
    echo '</tr>';
    echo '</table>';
}
?>