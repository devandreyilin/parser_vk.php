<?php
$url = $_POST['url'];

$opts = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
            "Cookie: remixmdevice=1920/1080/1/!!-!!!!;\r\n"
    )
);
$context = stream_context_create($opts);

// Открываем файл с помощью установленных выше HTTP-заголовков
$file = file_get_contents($url, false, $context);

echo json_encode($file, JSON_UNESCAPED_UNICODE);