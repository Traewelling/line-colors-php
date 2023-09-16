<?php

namespace Traewelling\LineColor\Svg;

use Traewelling\LineColor\Dto\Layout;

class Rectangle implements IconGenerator {

    /**
     * Just a test! This SVG is not final ;)
     *
     * @param Layout $layout
     * @param string $text
     *
     * @return string
     * @todo height and width
     */
    public static function create(Layout $layout, string $text): string {
        return <<<SVG
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                <rect x="0" y="0" width="100" height="100" fill="{$layout->getBackgroundColor()}" />
                <text x="50" y="50" text-anchor="middle" dominant-baseline="central" fill="{$layout->getTextColor()}" font-size="50">$text</text>
            </svg>
            SVG;
    }
}