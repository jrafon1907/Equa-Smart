<?php
$domain = $_SERVER['HTTP_HOST'];
$manifest = [
    "name" => "eQuaSmart",
    "short_name" => "eQuaSmart",
    "start_url" => "https://{$domain}/index.php",
    "display" => "standalone",
    "description" => "A description of your application",
    "theme_color" => "#000000",
    "background_color" => "#000000",
    "icons" => [
        [
            "src" => "https://www.pwabuilder.com/assets/icons/icon_512.png",
            "sizes" => "512x512",
            "type" => "image/png",
            "purpose" => "maskable"
        ],
        [
            "src" => "https://www.pwabuilder.com/assets/icons/icon_192.png",
            "sizes" => "192x192",
            "type" => "image/png",
            "purpose" => "any"
        ]
    ]
];

header('Content-Type: application/json');
echo json_encode($manifest);
?>
