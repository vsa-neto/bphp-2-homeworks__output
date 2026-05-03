<?php

declare(strict_types=1);
echo '<link rel="stylesheet" href="./style.css">';

try {
    if (!isset($_POST['name']) || empty(trim($_POST['name']))) {
        throw new Exception('Не было введено название файла');
    }
    if ($_FILES['filename']['error'] == UPLOAD_ERR_NO_FILE) {
        throw new Exception('Файл не был выбран');
    }

    $name = $_POST["name"];
    $uploaddir = './upload/';

    switch ($_FILES['filename']['type']) {
        case 'image/jpeg':
            $ext = '.jpg';
            break;
        case 'image/png':
            $ext = '.png';
            break;
        case 'image/gif':
            $ext = '.gif';
            break;
        default:
            $ext = '';
            break;
    }
    if ($ext) {

        $target_file = $uploaddir . $name . $ext;

        $size = $_FILES['filename']['size'];
        $fullPath = realpath($target_file);

        move_uploaded_file($_FILES['filename']['tmp_name'], $target_file);
        echo "<div class='message'> Файл <span> $name$ext </span> успешно загружен.";
        echo '<br>';
        echo "Полный путь к сохранённому файлу: <span>" . $fullPath . "</span>";
        echo '<br>';
        echo "Размер файла: <span>" . round(($size / 1024), 0) . " kb </span> </div>";
    } else {
        header("Refresh: 2; url=./index.php");
        echo "<div class='message'> формат изображения не подходит для загрузки </div>";
    }
} catch (Exception $e) {
    header("Refresh: 2; url=./index.php");
    echo "<div class='message'>" . $e->getMessage() . "</div>";
}
