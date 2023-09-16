# Public transport line colors for PHP

This PHP library provides functions to use the colors of public transport lines
from [traewelling/line-colors](https://github.com/Traewelling/line-colors).

> [!WARNING]
> This library is still in development and not ready for production use.
> Don't use it now. :)

## Installation

```bash
composer require traewelling/line-colors-php
```

## Usage

```php
use Traewelling\LineColor\LineColor;

require_once __DIR__ . '/../vendor/autoload.php';

$layout = LineColor::getLayout('albtal-verkehrs-gesellschaft-mbh', '4-a6s4-4');
echo 'Background color: ' . $layout->getBackgroundColor() . '<br/>' . PHP_EOL;
echo 'Text color: ' . $layout->getTextColor() . '<br/>' . PHP_EOL;
echo 'Shape: ' . $layout->getShape() . '<br/>' . PHP_EOL;
echo '<br/>-------------------------<br/>' . PHP_EOL;

$svg = LineColor::getSvg('albtal-verkehrs-gesellschaft-mbh', '4-a6s4-4', 'S4');
echo $svg . PHP_EOL;
```