<?php

const OPERATION_EXIT = 0;
const OPERATION_ADD = 1;
const OPERATION_DELETE = 2;
const OPERATION_PRINT = 3;

$operations = [
    OPERATION_EXIT => OPERATION_EXIT . '. Завершить программу.',
    OPERATION_ADD => OPERATION_ADD . '. Добавить товар в список покупок.',
    OPERATION_DELETE => OPERATION_DELETE . '. Удалить товар из списка покупок.',
    OPERATION_PRINT => OPERATION_PRINT . '. Отобразить список покупок.',
];

$items = [];


$viewItems = function ($items) {
    echo 'Ваш список покупок: ' . PHP_EOL;
    print_r(implode("\n", $items) . "\n");
};

$viewItemsCount = function ($items) {
    echo 'Всего ' . count($items) . ' позиций ' . PHP_EOL;
    echo 'Нажмите enter для продолжения';
    fgets(STDIN);
};

$func = function ($items, $viewItems, $operations) {
    // do {
        if (count($items)) {
            $viewItems($items);
        } else {
            echo 'Ваш список покупок пуст.' . PHP_EOL;
        }
        echo 'Выберите операцию для выполнения: ' . PHP_EOL;

        echo implode(PHP_EOL, $operations) . PHP_EOL . '> ';
        $Number = trim(fgets(STDIN));

        if (!array_key_exists($Number, $operations)) {
            echo '!!! Неизвестный номер операции, повторите попытку.' . PHP_EOL;
        } else {
            return $Number;
        }
    // } while (!array_key_exists($Number, $operations));
};



$inputItem = function ($pieceOfText) {
    echo "Введение название товара для $pieceOfText : \n> ";
    $input = trim(fgets(STDIN));
    return $input;
};


$getKey = function ($items, $inputItem) {
    $itemName = $inputItem('удаления из списка');
    if (in_array($itemName, $items, true) !== false) {
        return array_search($itemName, $items, true);
    }
};

do {
    $operationNumber = $func($items, $viewItems, $operations);

    echo 'Выбрана операция: '  . $operations[$operationNumber] . PHP_EOL;

    switch ($operationNumber) {
        case OPERATION_ADD:
            $itemName = $inputItem('добавления в список');
            $items[] = $itemName;
            break;

        case OPERATION_DELETE:
            $viewItems($items);
            $key = $getKey($items, $inputItem);
            unset($items[$key]);
            break;

        case OPERATION_PRINT:
            $viewItems($items);
            $viewItemsCount($items);
            break;
    }

    echo "\n ----- \n";
} while ($operationNumber > 0);

echo 'Программа завершена' . PHP_EOL;
