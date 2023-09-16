<?php declare(strict_types=1);

namespace Traewelling\LineColor\Dto;

class Layout {

    private readonly ?string $backgroundColor;
    private readonly ?string $textColor;
    private readonly ?string $shape;

    public function __construct(?string $backgroundColor, ?string $textColor, ?string $shape) {
        $this->backgroundColor = $backgroundColor;
        $this->textColor       = $textColor;
        $this->shape           = $shape;
    }

    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
    }

    public function getTextColor(): ?string {
        return $this->textColor;
    }

    public function getShape(): ?string {
        return $this->shape;
    }
}