<?php require('header.php');
$car_photo = ['cars/lexus1.png', 'cars/audi1.png', 'cars/bmw_c1.png', 'cars/mercedes1.png'];
$car_photo_1 = ['cars/lexus2.png', 'cars/audi2.png', 'cars/bmw_c2.png', 'cars/mercedes2.png'];
$car_model = ['Lexus RC 350', 'Audi A8', 'BMW M4', 'Mercedes-Benz C 300 Coupe'];
$car_year = ['2014', '2018', '2014', '2016'];
$car_price = ['2 400 000', '6 295 000', '2 450 000', '2 800 000'];

$track_photo = ['trucks/kamaz1.png', 'trucks/hyundai1.png', 'trucks/gaz1.png'];
$track_photo_1 = ['trucks/kamaz2.png', 'trucks/hyundai2.png', 'trucks/gaz2.png'];
$track_model = ['КамАЗ 65222', 'Hyundai Xcient Truck', 'ГАЗ'];
$track_year = ['2019', '2009', '2004'];
$track_price = ['5 885 000', '5 885 000', '214 344'];

$bike_photo = ['bikes/yamaha1.png', 'bikes/bmw_b1.png', 'bikes/honda1.png'];
$bike_photo_1 = ['bikes/yamaha2.png', 'bikes/bmw_b2.png', 'bikes/honda2.png'];
$bike_model = ['Yamaha YZF-R15', 'BMW R1250RT', 'Honda VFR 800'];
$bike_year = ['2013', '2019', '2002'];
$bike_price = ['190 000', '1 459 000', '320 000'];

$s = date('s');	// определяем текущую секунду
$os = $s % 2;	// вычисляем остаток от деления

if( $os === 0 ){
    $c_ph=$car_photo;
    $t_ph=$track_photo;
    $b_ph=$bike_photo;
}
else{
    $c_ph=$car_photo_1;
    $t_ph=$track_photo_1;
    $b_ph=$bike_photo_1;
}
?>
<main class="main">
<form>
    <div id="Tablica"  style="background: white">
        <!--Категории-->
    <div class="carsCategories" id="category">
        <div class="tabs">
            <input type="radio" name="inset" value="" id="tab_1" checked>
            <label for="tab_1"><h2>Весь транспорт</h2></label>

            <input type="radio" name="inset" value="" id="tab_2">
            <label for="tab_2"><h2>Машины</h2></label>

            <input type="radio" name="inset" value="" id="tab_3">
            <label for="tab_3"><h2>Грузовые</h2></label>

            <input type="radio" name="inset" value="" id="tab_4">
            <label for="tab_4"><h2>Мотоциклы</h2></label>
        <!--Таблица с автомобилями, грузовиками и мотоциклами-->
            <div id="tb_1">
<table  border="1"; align="center" style="background:black; color: white; width: 700px">
    <tr> <th>Фото</th> <th>Модель</th> <th>Год выпуска</th> <th>Цена</th> </tr>
    <tr><td colspan="4">Машины</td></tr>
    <?php array_map(function($a, $b, $c, $d) { echo "<tr><td><img src='$a'style='width: 200px'></td><td>$b</td><td>$c</td><td>$d</td></tr>\n"; }, $c_ph, $car_model, $car_year, $car_price);?>
    <tr><td colspan="4">Грузовые</td></tr>
    <?php array_map(function($a, $b, $c, $d) { echo "<tr><td><img src='$a'style='width: 200px'></td><td>$b</td><td>$c</td><td>$d</td></tr>\n"; }, $t_ph, $track_model, $track_year, $track_price);?>
    <tr><td colspan="4">Мотоциклы</td></tr>
    <?php array_map(function($a, $b, $c, $d) { echo "<tr><td><img src='$a'style='width: 200px'></td><td>$b</td><td>$c</td><td>$d</td></tr>\n"; }, $b_ph, $bike_model, $bike_year, $bike_price);?>
</table>
            </div>
            <div id="tb_2" >
                <table border="1"; align="center" style="background:black; color: white; width: 700px">
                    <tr> <th>Фото</th> <th>Модель</th> <th>Год выпуска</th> <th>Цена</th> </tr>
                    <tr><td colspan="4">Машины</td></tr>
                    <?php array_map(function($a, $b, $c, $d) { echo "<tr><td><img src='$a'style='width: 200px'></td><td>$b</td><td>$c</td><td>$d</td></tr>\n"; }, $c_ph, $car_model, $car_year, $car_price);?>
                </table>
            </div>
            <div id="tb_3">
                <table border="1"; align="center" style="background:black; color: white; width: 700px">
                    <tr> <th>Фото</th> <th>Модель</th> <th>Год выпуска</th> <th>Цена</th> </tr>
                    <tr><td colspan="4">Грузовые</td></tr>
                    <?php array_map(function($a, $b, $c, $d) { echo "<tr><td><img src='$a'style='width: 200px'></td><td>$b</td><td>$c</td><td>$d</td></tr>\n"; }, $t_ph, $track_model, $track_year, $track_price);?>
                </table>
            </div>
            <div id="tb_4">
                <table border="1"; align="center" style="background:black; color: white; width: 700px">
                    <tr> <th>Фото</th> <th>Модель</th> <th>Год выпуска</th> <th>Цена</th> </tr>
                    <tr><td colspan="4">Мотоциклы</td></tr>
                    <?php array_map(function($a, $b, $c, $d) { echo "<tr><td><img src='$a'style='width: 200px'></td><td>$b</td><td>$c</td><td>$d</td></tr>\n"; }, $b_ph, $bike_model, $bike_year, $bike_price);?>
                </table>
            </div>
    </div>
    </div>
    </div>
</form>
</form>
</main>
<?php require('footer.php'); ?>