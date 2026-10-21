<?php
$opts = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n"
    ]
];
$context = stream_context_create($opts);
$url = 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Adobe_Illustrator_CC_icon.svg';
$c = file_get_contents($url, false, $context);
if ($c) {
    file_put_contents('public/images/logos/illustrator.svg', $c);
    echo "Saved illustrator.svg (" . strlen($c) . " bytes)\n";
} else {
    echo "Failed to fetch\n";
}
