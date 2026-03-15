<?php

const OPERATION_EXIT = 0;
const OPERATION_ADD = 1;
const OPERATION_DELETE = 2;
const OPERATION_PRINT = 3;
const OPERATION_RENAME = 4;

$operations = [
    OPERATION_EXIT => OPERATION_EXIT . '. Завершить программу.',
    OPERATION_ADD => OPERATION_ADD . '. Добавить товар в список покупок.',
    OPERATION_DELETE => OPERATION_DELETE . '. Удалить товар из списка покупок.',
    OPERATION_PRINT => OPERATION_PRINT . '. Отобразить список покупок.',
    OPERATION_RENAME => OPERATION_RENAME . '. Изменить название товара из списка.',
];

$items = [];

$viewItems = function ($items) {
    echo 'Ваш список покупок: ' . PHP_EOL;
    foreach ($items as $key => $value) {
    echo "$key: $value \n";
}
};

$viewItemsCount = function ($items) {
    echo 'Всего ' . count($items) . ' позиций ' . PHP_EOL;
    echo 'Нажмите enter для продолжения';
    fgets(STDIN);
};


$func = function ($items, $viewItems, $operations) {
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
};


$inputItemKey = function ($text) {
    echo "Введение название товара для $text : \n> ";
   return trim(fgets(STDIN));
};

$inputItemValue = function () {
    echo "Введение количество: \n> ";
    return trim(fgets(STDIN));
};

$rename = function() {
        echo "Введите название товара, которое хотите заменить: \n> ";
        $oldName = trim(fgets(STDIN));
        echo "Введение новое имя товара: \n> ";
        $newName = trim(fgets(STDIN));
        return [$oldName, $newName];
};

$getKey = function ($items, $inputItemKey) {
    $itemName = $inputItemKey('удаления из списка');
    if (array_key_exists($itemName, $items)) {
    return $itemName;
}
};

do {
    $operationNumber = $func($items, $viewItems, $operations);

    echo 'Выбрана операция: '  . $operations[$operationNumber] . PHP_EOL;

    switch ($operationNumber) {
        case OPERATION_ADD:
            $itemKey = $inputItemKey('добавления в список');
            $itemValue = $inputItemValue('добавления в список');
            $items[$itemKey] = $itemValue;
            $viewItems($items);
            break;

        case OPERATION_DELETE:
            $viewItems($items);
            $key = $getKey($items, $inputItemKey);
            unset($items[$key]);
            break;

        case OPERATION_RENAME:
            $viewItems($items);
            $rename = $rename();
            $items[$rename[1]] = $items[$rename[0]];
            unset($items[$rename[0]]);
            break;

        case OPERATION_PRINT:
            $viewItems($items);
            $viewItemsCount($items);
            break;
    }

    echo "\n ----- \n";
} while ($operationNumber > 0);

echo 'Программа завершена' . PHP_EOL;
