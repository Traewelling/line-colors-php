<?php declare(strict_types=1);

namespace Traewelling\LineColor;

use http\Exception\InvalidArgumentException;
use Traewelling\LineColor\Dto\Layout;

class LineColor {

    private static ?array $parsedCsv = null;

    private static function getCsv(): array {
        if(!self::$parsedCsv) {
            $path = dirname(__DIR__) . '/vendor/traewelling/line-colors/line-colors.csv';
            $csv  = array_map('str_getcsv', file($path));
            $keys = array_shift($csv);
            foreach($csv as $i => $row) {
                $csv[$i] = array_combine($keys, $row);
            }
            self::$parsedCsv = $csv;
        }
        return self::$parsedCsv;
    }

    public static function getLayout(string $operatorCode, string $lineId): ?Layout {
        foreach(self::getCsv() as $row) {
            if(isset($row['hafasOperatorCode'], $row['hafasLineId'], $row['shape']) && $row['hafasOperatorCode'] === $operatorCode && $row['hafasLineId'] === $lineId) {
                return new Layout($row['backgroundColor'], $row['textColor'], $row['shape']);
            }
        }
        return null;
    }

    public static function getSvg(string $operatorCode, string $lineId, string $text): string {
        $layout = self::getLayout($operatorCode, $lineId);
        if(!$layout) {
            throw new InvalidArgumentException('No layout found for operator code ' . $operatorCode . ' and line id ' . $lineId);
        }
        $shape = $layout->getShape();
        if($shape === 'rectangle') {
            return Svg\Rectangle::create($layout, $text);
        }
        if($shape === 'rectangle-rounded-corner') {
            return Svg\RectangleRoundedCorner::create($layout, $text);
        }
        if($shape === 'pill') {
            return Svg\Pill::create($layout, $text);
        }
        throw new InvalidArgumentException('Unknown shape ' . $shape);
    }
}
