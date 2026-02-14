<?php

// TASK 2.1
echo  'название файла: ' . basename(__FILE__). ' | Строка: ' . __LINE__ . "\n";


// TASK 2.2
$user = [
    'name' => 'Иван',
    'email' => 'ivan@example.com'
];

$text = <<<T1
Привет, {$user['name']}!
Данные отправлены на вашу почту: {$user['email']} 
T1;
echo "$text \n";

// TASK 2.3
$var1 = 'глаза';
$var2 = 'руки';

echo "$var1 боятся, а $var2 делают \n";




// TASK 3.1

// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
$variable = true;
// $variable = null;
// $variable = [];

if (is_bool($variable)) {
        echo "bool \n";
    } elseif (is_float($variable)) {
        echo "float \n";
    } elseif (is_int($variable)){
        echo "int \n";
    } elseif (is_string($variable)){
        echo "string \n";
    } elseif (is_null($variable)){
        echo "is_null \n";
    }
 else {
    echo "other \n";
}

switch ($variable) {
    case (is_bool($variable)):
        echo "bool \n";
        break;
    case (is_float($variable)):
        echo "float \n";
        break;
    case (is_int($variable)):
        echo "int \n";
        break;
    case (is_string($variable)):
        echo "string \n";
        break;
    case (is_null($variable)):
        echo "is_null \n";
        break;
    default:
        echo "other \n";
        break;
}