<?php

namespace app;

use Imagick;

abstract class ImageTransform
{
    abstract function apply(Imagick $image);
}