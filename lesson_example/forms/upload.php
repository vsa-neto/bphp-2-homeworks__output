<?php
declare(strict_types=1);

// $name = $_POST["name"];
// $img = $_POST["email"];

$name = $_POST["name"];
// $img = $_FILES["image_uploads"];
echo '<br>---';
print_r ($name);
echo '<br>---';

$uploaddir ='./img/';
// $target_file = $uploaddir . basename($_FILES['filename']['name']);
$target_file = $uploaddir . $name .".jpg";


if (move_uploaded_file($_FILES['filename']['tmp_name'], $target_file)) {
    echo "Файл успешно загружен.";
} else {
    echo "Произошла ошибка при загрузке.";
}


echo '<pre>';
print_r ($_POST);
print_r ($_FILES);
echo '</pre>';