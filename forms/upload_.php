<?php
declare(strict_types=1);

// $name = $_POST["name"];
// $img = $_POST["email"];

// $img = $_FILES["image_uploads"];
// echo '<br>---';
// print_r ($name);
// echo '<br>---';

if(!empty($_POST['name'])){
$name = $_POST["name"];

$uploaddir ='./img/';

switch($_FILES['filename']['type']){
    case 'image/jpeg': $ext = '.jpg'; break;
    case 'image/png': $ext = '.png'; break;
    case 'image/gif': $ext = '.gif'; break;
    default: $ext = ''; break;
}
  if($ext){
// $target_file = $uploaddir . basename($_FILES['filename']['name']);
// $target_file = $uploaddir . $name .".jpg";
$target_file = $uploaddir . $name . $ext;

    $size = $_FILES['filename']['size'];
    $fullPath = realpath($target_file);
    // $sizeInBytes = filesize($target_file);

    move_uploaded_file($_FILES['filename']['tmp_name'], $target_file);
    echo "Файл успешно загружен.";
    echo '<br>---';
    echo ($target_file);
    echo '<br>---';
    echo $fullPath;
    echo '<br>---';
    echo $size;
    // var_dump($size);
    } else {
            echo 'формат изображения не подходит для загрузки';
    }
}else {
    header('Location: ./index.php');
}




// if (move_uploaded_file($_FILES['filename']['tmp_name'], $target_file)) {
//     echo "Файл успешно загружен.";
// } else {
//     echo "Произошла ошибка при загрузке.";
// }


// echo '<pre>';
// print_r ($_POST);
// print_r ($_FILES);
// echo '</pre>';