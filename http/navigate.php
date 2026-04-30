<?php

declare(strict_types=1);

echo '<link rel="stylesheet" href="./style.css">';
$links = [
    'start' => '/index.php',
    'page 1' => '/page_1.php',
    'page 2' => '/page_2.php?text=текст для этого файла передан по ссылке',
    'page 3' => '/page_3.php',
    'page 4' => '/page_4.php',
];

echo '<ul class="navigate">';
foreach ($links as $title => $url) {
    echo '<li><a class="link" href="' . $url . '">' . $title . '</a></li>';
}
echo '</ul>';
