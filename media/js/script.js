
/**
 * Калькулятор для потолков
 */
jQuery(window).load(function()
{
    var $calc = jQuery("div.ceiling_calculator table");
    console.log ($calc);

    if ($calc.length)
    {
        $calc = jQuery.extend($calc,
        {
            // Посчитать цену
            calculate : function()
            {
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

                S     = this.find("input[name='area']"  ).val().replace(/,/g, "."); // Площадь
                T     = this.find("select[name='type']" ).val(); cost = costTypes[T]; // Цена за метр2
                C     = this.find("input[name='corner']").val(); /* Углы        */
                L     = this.find("input[name='light']" ).val(); /* Светильники */ L *= 8;
                H     = this.find("input[name='hole']"  ).val(); /* Отверстия   */ H *= 5;
                P     = this.find("input[name='pipe']"  ).val(); /* Трубы       */ P *= 5;
                A     = this.find("input[name='air']"   ).val(); /* Вентиляция  */ A *= 8;
                per   = this.find("input[name='per']"   ).val(); /* Периметр    */
                color = this.find("select[name='color']").val(); /* Вставка     */ color = color==2;

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
            },

            // Сбить таблицу на начальные значения
            reset : function()
            {
                this.find("input[name='area']"  ).val(6); // Площадь
                this.find("select[name='type']" ).val(1); // Цена за метр2
                this.find("input[name='corner']").val(4); /* Углы        */
                this.find("input[name='light']" ).val(0); /* Светильники */
                this.find("input[name='hole']"  ).val(0); /* Отверстия   */
                this.find("input[name='pipe']"  ).val(0); /* Трубы       */
                this.find("input[name='air']"   ).val(0); /* Вентиляция  */
                this.find("input[name='per']"   ).val(0); /* Периметр    */
                this.find("select[name='color']").val(1); /* Вставка     */
            }
        });

        $calc.keypress($calc.calculate());
        $calc.reset(); $calc.calculate();
    }
});






