<?php

// echo "введите первое число ";
// $num1 = (int)trim(fgets(STDIN));
// echo "--- $num1 \n";

// echo "введите второе число  ";
// $num2 = (int)trim(fgets(STDIN));
// echo "--- $num2 \n";

// function Input($arg) {
//     if($arg === 0){
// fwrite(STDERR, "Делить на 0 нельзя. \n");
// } elseif (!is_int($arg)){
// fwrite(STDERR, "Введите, пожалуйста, число. \n");
// } else {

// }
// }

// if (is_int($num1) && is_int($num2)) {
//     if ($num1 !== 0 && $num2 !== 0 ) {
//         // echo $num1;
//         // echo $num2;
//         echo round($num1/$num2, 2);
//     } else {
//         fwrite(STDERR, "Делить на 0 нельзя. \n");
//     }
    
// } else {
//     fwrite(STDERR, "Введите, пожалуйста, число. \n");
// }

// $values = [];



$lines = file('php://stdin');

// 2. Использование foreach для перебора
for($i=0; $i < 2; $i++){
if ($lines) {
    foreach ($lines as $line) {
        echo "Строка: " . trim($line) . PHP_EOL;
    }
}
}

