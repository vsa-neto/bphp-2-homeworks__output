<?php

declare(strict_types=1);

if (isset($_GET['text'])) {
    $text = $_GET['text'];

    $filename = "document.txt";

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename= "' . $filename . '"');
    echo $text;
    exit;
} else {
    echo "Текст не передан.";
}
