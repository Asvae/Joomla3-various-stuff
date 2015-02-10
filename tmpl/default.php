<?php
defined('_JEXEC') or die;

$desc = $params->get('desc');
$cash = $params->get('cash');
 ?>

<div class="ceiling_calculator <?php echo $moduleclass_sfx; ?>">
    <div class="desc row"><?php echo $desc; ?></div>
    <div class = "row">
        <div class = "span6"><div class = "row">

            <div class = "span3" style = "padding: 10px 0; font-weight: bold">
                Материал
            </div>
            <div class = "span3" style = "padding: 10px 0; font-weight: bold">
                Количество
            </div>

            <div title="Введите площадь вашего помещения">
                <div class = "span3">
                    Площадь
                </div>
                <div class = "span3">
                    <input type="number" name="area" />&nbsp;м<sup>2</sup>
                </div>
            </div>

            <div title="Выберите нужный вариант фактуры">
                <div class = "span3">
                    Фактура потолка
                </div>
                <div class = "span3">
                    <select name="type"><option value="1">Глянец,Мат-Россия</option><option value="2">Мат,Сатин-Англия/Бельгия</option><option value="3">Глянец-Англия/Мат,Сатин-Франция</option><option value="4">Глянец-Франция/Премиум-Англия</option><option value="5">Эксклюзивный/Тканевый CLIPSO,DESCOR</option><option value="6">Фотопечать/Двухуровневый</option></select>
                </div>
            </div>

            <div title="Периметр помещения нужен для определения стоимости декоративной накладки-плинтуса, которая закрывает технологическую щель между стеной и потолком. Укажите целое число, без знаков препинания.">
                <div class = "span3">
                    Периметр потолка п.м.
                </div>
                <div class = "span3">
                    <input type="number" name="per" />&nbsp;м
                </div>
            </div>

            <div title="Вставка-плинтус &mdash; декоративный элемент, закрывающий технологическую щель по периметру потолка. Можно покрасить в цвет потолка, можно использовать свой декоративный элемент.">
                <div class = "span3">
                    Вставка (плинтус)
                </div>
                <div class = "span3">
                    <select name="color"><option value="1">Нет</option><option value="2">Да</option></select>
                </div>
            </div>

            <div title="По умолчанию в помещении 4 угла. Если у вас углов на потолке больше, введите нужное количество">
                <div class = "span3">
                    Количество углов
                </div>
                <div class = "span3">
                    <input type="number" name="corner" />&nbsp;шт.
                </div>
            </div>

            <div title="" style = "font-size: 20px; color: #cd2122; font-weight: bold;">
                <div class = "span3">
                    Цена натяжного потолка
                </div>
                <div class = "span3">
                    <span id="calcResult">0</span> <?php echo $cash; ?>
                </div>
            </div>
        </div></div>


        <div class = "span6"><div class = "row">
            <div class = "span3" style = "padding: 10px 0; font-weight: bold">
                Материал
            </div>
            <div class = "span3" style = "padding: 10px 0; font-weight: bold">
                Количество
            </div>

            <div title="Введите количество встраиваемых элементов - светильников. Стоимость работ по установке стоек указана без стоимости светильника. Светильники можно приобрести в нашем интернет-магазине">
                <div class = "span3">
                    Кол-во светильников
                </div>
                <div class = "span3">
                    <input type="number" name="light" />&nbsp;шт.
                </div>
            </div>

            <div title="Введите количество люстр на потолке (Люстра крюковая)">
                <div class = "span3">
                    Отверстие под люстру
                </div>
                <div class = "span3">
                    <input type="number" name="hole" />&nbsp;шт.
                </div>
            </div>

            <div title="Если в помещении есть трубы и их нужно обходить, введите количество труб, уходящих в потолок.">
                <div class = "span3">
                    Окантовка трубы
                </div>
                <div class = "span3">
                    <input type="number" name="pipe" />&nbsp;шт.
                </div>
            </div>

            <div title="">
                <div class = "span3">
                    Стойка и отверстие для элемента вентиляции
                </div>
                <div class = "span3">
                    <input type="number" name="air" />&nbsp;шт.
                </div>
            </div>
        </div></div>
    </div>
<div>


<?php
// Get jQuery

// And custom script. Editable.
JHtml::script(JUri::base() . 'media/mod_ceiling_calculator/js/script.js');
?>
