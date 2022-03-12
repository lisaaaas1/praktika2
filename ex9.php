<?php

if(!isset ($_POST['submit'])){
    ?>


    <form method="post" action="yourfile.php">
        <p>введите длину и ширину прямоугольника.</p>
        <p>длина:  <input type="text" name="length" size="5" />
            ширина:  <input type="text" name="width" size="5" /></p>
        <input type="submit" name="submit" value="Выполнить" />
    </form>


    <?php
} else {
//Получение пользовательских значений
    $l = $_POST['length'];
    $w = $_POST['width'];
//Определите функцию.
    function recArea($l, $w){
        $area = $l * $w;
        return $area;
    }
    echo "Площадь прямоугольника длиной $l и шириной $w равна " . recArea($l, $w). ".";
}
?>