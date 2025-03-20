<?php

require '../vendor/autoload.php';
use Julianfichtinger\WebtCoreViewsInMvc\Model\Entity\Hotel;
$data = [
    new Hotel("Hotel1", "DESC1"),
    new Hotel("Hotel2", "DESC2"),
    new Hotel("Hotel3", "DESC3"),
    new Hotel("Hotel4", "DESC4")
];



function render($data){
    $template = file_get_contents('../templates/template.html');
    $hotelsHtml = "";
    foreach ($data as $entry) {
        $hotelsHtml .= "<div class='hotel'>";
        $hotelsHtml .= "<strong>" . $entry->getName() . "</strong>";
        $hotelsHtml .= "<p>" . $entry->getDescription() . "</p>";
        $hotelsHtml .= "</div>\n";
    }

    echo str_replace("{{hotels}}", $hotelsHtml, $template);
}

render($data);

