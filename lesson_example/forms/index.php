<?php
declare(strict_types=1);

echo get_include_path(); // .;C:\php\pear
echo PHP_EOL;
// задает свой path:
// set_include_path('.' . PATH_SEPARATOR . '/usr/');
//альтернатива:
// $new_include_path = 'C:\OpenServer\domains\netology\neto_php\bphp-2-homeworks__output\lesson_example\forms\001';
// ini_set('include_path', $new_include_path);
require_once './001/vars.php';

echo "Одно $color $fruit";
echo PHP_EOL;
echo get_include_path();

// C:\OpenServer\domains\netology\neto_php\bphp-2-homeworks__output\lesson_example\forms
// lesson_example\forms\001

echo PHP_EOL;
echo '----------------';
echo PHP_EOL;
$f = file('test.txt');

// var_dump($f);

echo $f[0];
echo $f[1];
echo $f[2];

// $homepage = file_get_contents('https://www.google.com/?hl=en');
// // показывает ошибку:
// // https://www.google.com/search?q=%D0%BE%D1%88%D0%B8%D0%B1%D0%BA%D0%B0+Warning%3A+file_get_contents%28%29%3A+Unable+to+find+the+wrapper+%22https%22+-+did+you+forget+to+enable+it+when+you+configured+PHP%3F+in+C%3A%5COpenServer%5Cdomains%5Cnetology%5Cneto_php%5Cbphp-2-homeworks__output%5Clesson_example%5Cforms%5Cindex.php+on+line+31&sca_esv=f6913a6b03d5cca2&sxsrf=ANbL-n5DxNRKW9wWqrUaoLBPct9kso-Haw%3A1776590563227&udm=50&fbs=ADc_l-bs2zYa4_vOddERTHH0rF8C1Zll-wjjc79Zv8lgIIs5cUsFtrTUMWqMCFQxe2yfrGBBfBCuD1N1njXhY8yLZjojAtarDSfQd8hjFpH4yLCvi6FEG38EgWrO3HKJtiPLPVpcPNbcnGXRwPi7a1owJeQSh1nn47p_5J2o1mOKwEqSzmFgR1Yrk8UepwdeUSDG6fLkRzIIBzJWAKbYSypeoUDmvmIaSb9yXGhfjANaYbaD0W6_qstDGzOg9BgrJKAbtay39D6T8aqBoFs0xvRkPOm9-bHFUg&aep=1&ntc=1&sa=X&ved=2ahUKEwiWybrLy_mTAxUIFRAIHUdKBp4Q2J8OegQIDhAI&biw=2120&bih=1171&dpr=1.25&mstk=AUtExfDvD6vReB4-Llg5tVCxujSSJq4WpN7-8AfyN6JEIFLoyWgom0z9MugeV6LtI5dDYTDivlBbKPHlVw67myRN5wavTMdJvHo1IwvcV-pWtyegfBpzWS-zv-9yC9gnicARJ4VtKXOgVSaan46y1vmuOQjH8f4wtq8aTZoM09NG59O6YUP57zVWTgcAhW6Nc2itxG0j8jOZkFoqlbgFwkoSEsnz6SQ73t5VAzPwTx-H75W1KbZMl3NXfA_7ZckmoaEA1CZm8MxlSUALFzyggaF2V-Wst2L_avB4CwQ6baTKUi97RsRP_-qClnoRWThPdtQNsp4s-ujqC6DyuA&csuir=1&mtid=5p7kaajZAo_awPAPl6Xt-Q0

// echo $homepage;

