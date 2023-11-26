<?php


$image = new \Imagick('./images/2.jpeg');

print($image->getImageSize() . PHP_EOL);

$image->scaleImage(500, -400);

try {
    $image->writeImages('./images/2_copy.jpeg', true);
} catch (ImagickException $e) {
    print $e->getMessage();
}

$image_copy = new \Imagick('./images/2_copy.jpeg');

printf($image_copy->getImageSize() . PHP_EOL);

