<?php

$var1 = mb_ucfirst(mb_strtolower(readline("Введите Имя: ")));
$var2 = mb_ucfirst(mb_strtolower(readline("Введите Фамилия: ")));
$var3 = mb_ucfirst(mb_strtolower(readline("Введите Отчество: ")));

$fullName = "Полное имя: '$var2 $var1 $var3'";
$fio = "Фамилия и инициалы: '". $var2." ". mb_substr($var1, 0, 1) .".". mb_substr($var3, 0, 1). ".'";
$surnameAndInitials =  "Аббревиатура: ". mb_substr($var2, 0, 1) . mb_substr($var1, 0, 1) . mb_substr($var3, 0, 1). "'";
   
echo PHP_EOL; 
echo $fullName.PHP_EOL;
echo $fio.PHP_EOL;
echo $surnameAndInitials.PHP_EOL;