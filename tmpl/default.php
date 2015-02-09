<?php
defined('_JEXEC') or die;

$decs = $params->get('desc');
$cash = $params->get('cash');
 ?>

<div class="row ceiling_calculator <?php echo $moduleclass_sfx; ?>">
<?php echo $desc; ?>
<table>
    <tbody>
        <tr>
            <th>
                <div class="control-label">Параметры</div>
            </th>
            <th>Количество</th>
        </tr>
        <tr>
            <td title="Введите площадь вашего помещения">Площадь</td>
            <td><input type="number" name="area" />&nbsp;(м<sup>2</sup>)</td>
        </tr>
        <tr>
            <td title="Выберите нужный вариант фактуры">Фактура потолка</td>
            <td><select name="type"><option value="1">Глянец,Мат-Россия</option><option value="2">Мат,Сатин-Англия/Бельгия</option><option value="3">Глянец-Англия/Мат,Сатин-Франция</option><option value="4">Глянец-Франция/Премиум-Англия</option><option value="5">Эксклюзивный/Тканевый CLIPSO,DESCOR</option><option value="6">Фотопечать/Двухуровневый</option></select>
            </td>
        </tr>
        <tr>
            <td title="Периметр помещения нужен для определения стоимости декоративной накладки-плинтуса, которая закрывает технологическую щель между стеной и потолком. Укажите целое число, без знаков препинания.">Периметр потолка п.м.</td>
            <td><input type="number" name="per" />&nbsp;(м.)</td>
        </tr>
        <tr>
            <td title="Вставка-плинтус &mdash; декоративный элемент, закрывающие технологическую щель по периметру потолка. Можно покрасить в цвет потолка, можно использовать свой декоративный элемент.">Вставка (плинтус)</td>
            <td><input type="number" name="area" />&nbsp;(м<sup>2</sup>)</td>
        </tr>
        <tr>
            <td title="Введите площадь вашего помещения">Площадь</td>
            <td><select name="color"><option value="1">Нет</option><option value="2">Да</option></select>
            </td>
        </tr>
        <tr>
            <td title="По умолчанию в помещении 4 угла. Если у вас углов на потолке больше, введите нужное количество">Количество углов</td>
            <td><input type="number" name="corner" />&nbsp;(шт.)</td>
        </tr>
        <tr>
            <td title="Введите количество встраиваемых элементов - светильников. Стоимость работ по установке стоек указана без стоимости светильника. Светильники можно приобрести в нашем интернет-магазине">Кол-во светильников</td>
            <td><input type="number" name="light" />&nbsp;(шт.)</td>
        </tr>
        <tr>
            <td title="Введите количество люстр на потолке (Люстра крюковая)">Отверстие под люстру</td>
            <td><input type="number" name="hole" />&nbsp;(шт.)</td>
        </tr>
        <tr>
            <td title="Если в помещении есть трубы и их нужно обходить, введите количество труб, уходящих в потолок.">Окантовка трубы</td>
            <td><input type="number" name="pipe" />&nbsp;(шт.)</td>
        </tr>
        <tr>
            <td>Стойка и отверстие для элемента вентиляции</td>
            <td><input type="number" name="air" />&nbsp;(шт.)</td>
        </tr>
        <tr>
            <td><strong>Цена натяжного потолка</strong>
            </td>
            <td id="calcResult">0 <?php echo $cash; ?></td>
        </tr>
    </tbody>
</table>

</div>

<?php
// Get jQuery
JHtml::_('jquery.framework');

// And custom script. Editable.
JHtml::script(JUri::base() . 'media/mod_ceiling_calculator/js/script.js');
?>
