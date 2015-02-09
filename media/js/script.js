
/**
 * Калькулятор для потолков
 */
jQuery(document).ready(function() {
    $calc = jQuery("table.calc");
    if ($calc.length)
    {
        // Посчитать цену
        calculate = function ()
        {
            console.log(jQuery('.calc input+select').serialize());
            var dopsumm   = 0,
                summ      = 0,
                costTypes = Array(
                    [ 0,  0,  0],
                    [ 4,  5,  6],
                    [ 6,  7,  8],
                    [ 7,  8,  9],
                    [ 8,  9, 10],
                    [18, 23, 28],
                    [38, 55, 70]),

            // Получение данных из input элементов

            S     = $calc.find("input[name='area']"  ).val().replace(/,/g, "."); // Площадь
            T     = $calc.find("select[name='type']" ).val(); cost = costTypes[T]; // Цена за метр2
            C     = $calc.find("input[name='corner']").val(); /* Углы        */
            L     = $calc.find("input[name='light']" ).val(); /* Светильники */ L *= 8;
            H     = $calc.find("input[name='hole']"  ).val(); /* Отверстия   */ H *= 5;
            P     = $calc.find("input[name='pipe']"  ).val(); /* Трубы       */ P *= 5;
            A     = $calc.find("input[name='air']"   ).val(); /* Вентиляция  */ A *= 8;
            per   = $calc.find("input[name='per']"   ).val(); /* Периметр    */
            color = $calc.find("select[name='color']").val(); /* Вставка     */ color = color==2;

            // Цена за полотно, суммарная
            if      (S< 6) {S=6};
            if      (S<10) {SS=S*cost[2]}
            else if (S<15) {SS=S*cost[1]}
            else           {SS=S*cost[0]};

            // Что-то связанное с углами
            if (C>4)
                CC=(C-4)*4
            else
                CC=0;

            // Дополнительная сумма за счет периметра и плинтусов
            if(per)
                dopsum = per * (color ? 6 : 5);
            else
                dopsum = 0;

            // Суммирование и вывод
            sum = SS + CC + L + H + P + A + dopsum;
            console.log(sum);
            $calc.find("td#calcResult").text(sum + " $");
        };

        // Сбить таблицу на начальные значения
        reset = function()
        {
            $calc = jQuery("table.calc");
            $calc.find("input[name='area']"  ).val(6); // Площадь
            $calc.find("select[name='type']" ).val(1); // Цена за метр2
            $calc.find("input[name='corner']").val(4); /* Углы        */
            $calc.find("input[name='light']" ).val(0); /* Светильники */
            $calc.find("input[name='hole']"  ).val(0); /* Отверстия   */
            $calc.find("input[name='pipe']"  ).val(0); /* Трубы       */
            $calc.find("input[name='air']"   ).val(0); /* Вентиляция  */
            $calc.find("input[name='per']"   ).val(0); /* Периметр    */
            $calc.find("select[name='color']").val(1); /* Вставка     */
        };

        //jQuery("table.calc input[type!='button']").on("click", function(){jQuery(this).val('');} );
        jQuery("table.calc").on("keypress", calculate);
        reset(); calculate();

    }
});


