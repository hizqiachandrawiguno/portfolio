<?php

$urls = [
    'photoshop' => [
        'https://www.vectorlogo.zone/logos/adobe_photoshop/adobe_photoshop-icon.svg',
        'https://upload.wikimedia.org/wikipedia/commons/a/af/Adobe_Photoshop_CC_icon.svg'
    ],
    'illustrator' => [
        'https://www.vectorlogo.zone/logos/adobe_illustrator/adobe_illustrator-icon.svg',
        'https://upload.wikimedia.org/wikipedia/commons/f/fb/Adobe_Illustrator_CC_icon.svg'
    ],
    'figma' => [
        'https://www.vectorlogo.zone/logos/figma/figma-icon.svg'
    ],
    'premiere' => [
        'https://www.vectorlogo.zone/logos/adobe_premiere/adobe_premiere-icon.svg',
        'https://upload.wikimedia.org/wikipedia/commons/4/40/Adobe_Premiere_Pro_CC_icon.svg'
    ],
    'aftereffects' => [
        'https://www.vectorlogo.zone/logos/adobe_aftereffects/adobe_aftereffects-icon.svg',
        'https://upload.wikimedia.org/wikipedia/commons/c/cb/Adobe_After_Effects_CC_icon.svg'
    ],
    'canva' => [
        'https://www.vectorlogo.zone/logos/canva/canva-icon.svg',
        'https://upload.wikimedia.org/wikipedia/commons/0/08/Canva_icon_2021.svg'
    ]
];

$opts = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n"
    ]
];
$context = stream_context_create($opts);

$dir = __DIR__ . '/../public/images/logos/';
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}

foreach ($urls as $name => $list) {
    $found = false;
    foreach ($list as $url) {
        $data = @file_get_contents($url, false, $context);
        if ($data && strpos($data, '<svg') !== false) {
            file_put_contents($dir . $name . '.svg', $data);
            echo "Success: $name from $url (" . strlen($data) . " bytes)\n";
            $found = true;
            break;
        }
    }
    if (!$found) {
        echo "FAILED: $name\n";
    }
}
