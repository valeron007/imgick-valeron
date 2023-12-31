<?php

namespace app;

use Imagick;

class ScaleTransform extends ImageTransform
{
    private int $cols = 100;
    private int $rows = 100;
    public function __construct(Int $cols, Int $rows)
    {
        $this->cols = $cols;
        $this->rows = $rows;
    }

    /**
     * @param Imagick $image
     * @return void
     * @throws \ImagickException
     */
    public function apply(Imagick $image): void
    {
        $image->scaleImage($this->cols, $this->rows);
    }
}