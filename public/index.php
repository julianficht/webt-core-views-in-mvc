<?php
$data = [
    [
        "name" => "Bellagio Las Vegas",
        "description" => "Ein luxuriöses Resort, bekannt für seine beeindruckenden tanzenden Wasserfontänen und elegante Architektur."
    ],
    [
        "name" => "The Venetian Resort",
        "description" => "Ein Themenhotel, das Venedig nachempfunden ist, mit nachgebildeten Kanälen und Gondelfahrten."
    ],
    [
        "name" => "MGM Grand",
        "description" => "Eines der größten Hotels der Welt mit über 5.000 Zimmern, bekannt für sein lebhaftes Kasino und die Grand Garden Arena."
    ],
    [
        "name" => "Wynn Las Vegas",
        "description" => "Ein elegantes Resort mit gehobenen Restaurants, Designer-Boutiquen und einem renommierten Golfplatz."
    ],
    [
        "name" => "Caesars Palace",
        "description" => "Ein ikonisches Hotel mit römischem Thema, bekannt für sein opulentes Design und das berühmte Colosseum-Theater."
    ],
    [
        "name" => "Mandalay Bay",
        "description" => "Ein tropisch inspiriertes Resort mit einem 4,5 Hektar großen Poolbereich und dem Shark Reef Aquarium."
    ],
    [
        "name" => "Luxor Hotel and Casino",
        "description" => "Ein Hotel im ägyptischen Stil, das durch seine pyramidenförmige Struktur und den markanten Lichtstrahl auffällt."
    ]
];

$template = <<<HTML
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotels</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
                background: #fff;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            .hotel {
                background: #fff;
                padding: 15px;
                margin: 10px 0;
                border-left: 5px solid #ff5733;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
            }
            .hotel strong {
                font-size: 18px;
                color: #ff5733;
            }
            .hotel p {
                margin: 5px 0;
                color: #666;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Hotels</h1>
            {{hotels}}
        </div>
    </body>
</html>
HTML;

function render($template, $data){
    $hotelsHtml = "";

    foreach ($data as $entry) {
        $hotelsHtml .= "<div class='hotel'>";
        $hotelsHtml .= "<strong>{$entry["name"]}</strong>";
        $hotelsHtml .= "<p>{$entry["description"]}</p>";
        $hotelsHtml .= "</div>\n";
    }

    return str_replace("{{hotels}}", $hotelsHtml, $template);
}

echo render($template, $data);