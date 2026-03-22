<?php

declare(strict_types=1);


function workingDaysInMonth(int $year, int $monthNum): void
{
    $months = [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
        4 => 'Апрель',
        5 => 'Май',
        6 => 'Июнь',
        7 => 'Июль',
        8 => 'Август',
        9 => 'Сентябрь',
        10 => 'Октябрь',
        11 => 'Ноябрь',
        12 => 'Декабрь'
    ];

   $daysCount = cal_days_in_month(CAL_GREGORIAN, $monthNum, $year);

    $month = date("M", mktime(0, 0, 0, $monthNum, 10));

    $date = DateTime::createFromFormat("j-M-Y", "1-$month-$year");

    echo $months[$monthNum] . " / $year" . PHP_EOL;

    $dateFormat = function (object $date, bool $workDay) : void {
        $dateFormat = date_format($date, 'd');
        if ($workDay === true) {
            echo "\033[32m{$dateFormat}\033[0m ";
        } else {
            echo $dateFormat . " ";
        }
    };

    for ($day = 1; $day <= $daysCount; $day += 3) {

        $date = DateTime::createFromFormat("j-M-Y", "$day-$month-$year");
        $dayName = (int) $date->format('N');

        if ($day === 1) {
            echo str_repeat("   ", ($dayName - 1));
        }
        if ($dayName === 6) {
            $day -= 1;
            $dateFormat($date, false);
            date_modify($date, "+1 day");
            $dateFormat($date, false);
        } else if ($dayName === 7) {
            $day -= 2;
            $dateFormat($date, false);
        } else {
            $dateFormat($date, true);
            date_modify($date, "+1 day");
            $dateFormat($date, false);
            date_modify($date, "+1 day");
            $dateFormat($date, false);
        }

        if ($dayName >= 5) {
            echo PHP_EOL;
        }
    }
}

workingDaysInMonth(2025, 4);
