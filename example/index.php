<?php

use pooyae\atropat\Translator;
use pooyae\atropat\packages\EN;

require __DIR__ . "/../vendor/autoload.php";

$names = json_decode(file_get_contents(__DIR__ . "/names.json"), true);
$t = new Translator(new En);
$output = "";

foreach (array_slice($names, 0, 3000) as $name => $_) {
    $output .= "<div class='w'><span>$name</span><span>". $t->translate($name) ."</span></div>";
}

echo "<link href='style.css' rel='stylesheet' type='text/css'>$output";