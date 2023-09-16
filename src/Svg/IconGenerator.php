<?php

namespace Traewelling\LineColor\Svg;

use Traewelling\LineColor\Dto\Layout;

interface IconGenerator {

    public static function create(Layout $layout, string $text): string;
}