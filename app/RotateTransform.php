<?php

namespace app;

use Imagick;
use ImagickPixel;

class RotateTransform extends ImageTransform
{
    private string $background = '#00000000';
    private int $degree = 0;
    public function __construct(String $background, int $degree)
    {
        $this->background = $background;
        $this->degree = $degree;
    }

    /**
     * @param Imagick $image
     * @return void
     * @throws \ImagickException
     */
    function apply(Imagick $image)
    {
        $image->rotateImage(new ImagickPixel($this->background), $this->degree);
    }

}