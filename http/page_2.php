<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];

    $filename = "document.txt";

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename= "' . $filename . '"');
    // header('Content-Length: ' . strlen($text));
    echo $text;
    exit;
} else {
    echo "Текст не передан.";
}
