<?php

function ckBox(){

    $args=func_get_args();

    foreach ($args as $a){
        echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$a\" />" .
            ucwords($a). "<br />\n";
    }
}

if (!isset($_POST['submit'])){
    ?>
    <form method="post" action="yourfile.php">
        <p>введите:</p>
        Город: <input type = "text" name = "city" />
        Месяц: <input type = "text" name = "month" />
        Год: <input type = "text" name = "year" />
        <p> Выберите тип погоды</p>
        <?php
        ckBox('солнечно', 'облачно', 'дождливо', 'град', 'мокрый снег', 'снежно', 'ветренно', 'холодно', 'тепло');
        ?>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php

}else{

    $inputLocal = array(
        $_POST['city'],
        $_POST['month'],
        $_POST['year']
    );
    echo "В городе $inputLocal[0] в месяце $inputLocal[1] $inputLocal[2] года, 
вы наблюдали следующую погоду:<br/> <ul>";

    $weather = $_POST['weather'];
    foreach($weather as $w){
        echo "<li>" . ucwords($w) . "</li>\n";
    }
    echo "</ul>";
}
?>
