<?php


$data = [
    ["name" => "Hotel1", "description" => "Description1"],
    ["name" => "Hotel2", "description" => "Description2"],
    ["name" => "Hotel3", "description" => "Description3"]
];
$template = <<<HTML
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Las Vegas Strip Hotels</title>
    </head>
    <body>
            <h1>Las Vegas Strip Hotels</h1>
            {{hotels}}
    </body>
</html>
HTML

public function render($template, $data)
{
}
echo render($template, $data);

?>