<?php

namespace Traewelling\LineColor\Svg;

use Traewelling\LineColor\Dto\Layout;

class Pill implements IconGenerator {

    /**
     * @param Layout $layout
     * @param string $text
     *
     * @return string
     */
    public static function create(Layout $layout, string $text): string {
        return <<<SVG
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100" width="150" height="100">
                <rect x="0" y="0" width="200" height="100" rx="70" fill="{$layout->getBackgroundColor()}" />
                <text x="100" y="50" text-anchor="middle" dominant-baseline="central" fill="{$layout->getTextColor()}" font-size="80" font-family="Helvetica">$text</text>
            </svg>
            SVG;
    }
}