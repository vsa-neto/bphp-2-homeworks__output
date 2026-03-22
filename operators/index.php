<?php

$firstName = mb_ucfirst(mb_strtolower(readline("Введите Имя: ")));
$lastName = mb_ucfirst(mb_strtolower(readline("Введите Фамилия: ")));
$patronymic = mb_ucfirst(mb_strtolower(readline("Введите Отчество: ")));

$fullName = "Полное имя: '$lastName $firstName $patronymic'";
$fio = "Фамилия и инициалы: '". $lastName." ". mb_substr($firstName, 0, 1) .".". mb_substr($patronymic, 0, 1). ".'";
$surnameAndInitials =  "Аббревиатура: ". mb_substr($lastName, 0, 1) . mb_substr($firstName, 0, 1) . mb_substr($patronymic, 0, 1). "'";
   
echo PHP_EOL; 
echo $fullName.PHP_EOL;
echo $fio.PHP_EOL;
echo $surnameAndInitials.PHP_EOL;