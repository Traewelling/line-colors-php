<?php

use Traewelling\LineColor\LineColor;

require_once __DIR__ . '/../vendor/autoload.php';

$layout = LineColor::getLayout('albtal-verkehrs-gesellschaft-mbh', '4-a6s4-4');
echo 'Background color: ' . $layout->getBackgroundColor() . '<br/>' . PHP_EOL;
echo 'Text color: ' . $layout->getTextColor() . '<br/>' . PHP_EOL;
echo 'Shape: ' . $layout->getShape() . '<br/>' . PHP_EOL;
echo '<br/>-------------------------<br/>' . PHP_EOL;

$svg = LineColor::getSvg('albtal-verkehrs-gesellschaft-mbh', '4-a6s4-4', 'S4');
echo $svg . PHP_EOL;
