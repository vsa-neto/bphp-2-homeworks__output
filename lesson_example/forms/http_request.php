<?php

declare(strict_types=1);

// Создаём поток
$opts = [
    'http' => [
        'method' => 'POST',
        'header' => "Content-Type: text/xml\r\n" .
            'Authorization: Basic ' . base64_encode("$user: $password") . "\r\n",
        'content' => $body,
        'timeout' => 60
    ]
];
// Создаём контекст
$context = stream_context_create($opts);
// Открываем url с помощью установленных выше HTTP- заголовков

$result = file_get_contents('https://' . $url, false, $context);
