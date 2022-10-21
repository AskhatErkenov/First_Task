<?php
require('header.php');
?>
<main class="main">
    <script>
        while (true){
        let f = prompt("1-Возведение в степень. 2-Нахождение НОД. 3-Наименьшая цифра. 4-Pluralization. 5-Числа Фибоначчи. v-Выход", '');
        if(f == 'v')
            break;
        switch (f) {
            case '1':

            function pow(x, n) {
                let result = x;
                for (let i = 1; i < n; i++) {
                    result *= x;
                }
                return result;
            }

                let x = prompt("x", '');
                let n = prompt("n", '');
                if (n < 1) {
                    alert('используйте натуральное число');
                } else {
                    alert(pow(x, n));
                }
                break;

            case '2':

            function gcd(a, b) {
                if (b == 0) {
                    return a;
                }
                return gcd(b, a % b);
            }

                let a = prompt("a", '');
                let b = prompt("b", '');
                alert(gcd(a, b))
                break;

            case '3':

            function minDigit(x) {
                x = (x + '').split('').sort();
                return x[0];
            }

                let x1 = prompt("x", '');
                alert(minDigit(x1));
                break;

            case '4':

            function pluralizeRecords(value) {
                value = Math.abs(value) % 100;
                let num = value % 10;
                if (value > 10 && value < 20)
                    return 'В результате выполнения запроса было найдено' + value + ' записей';
                if (num > 1 && num < 5)
                    return 'В результате выполнения запроса было найдено' + value + ' записи';
                if (num == 1)
                    return 'В результате выполнения запроса было найдена' + value + ' запись';
                return 'В результате выполнения запроса было найдено' + value + ' записей';
            }

                let n3 = prompt("n", '');
                alert(pluralizeRecords(n3.valueOf()))
                break;

            case '5':

            function fibb(n) {
                let a = 0;
                let b = 1;
                for (let i = 3; i <= n; i++) {
                    let c = a + b;
                    a = b;
                    b = c;
                }
                return b;
            }

                let n4 = prompt("n", '');
                alert(fibb(n4));
                break;
        }
        }
    </script>

</main>
<?php
require('footer.php');
?>
