<?php
require_once __DIR__.'/vendor/autoload.php';


try {
    $coomandLine = new app\CommandLine($argv);
    $coomandLine->validate();
    printf("Count arg:%d\n", count($argv));

} catch (Exception $e) {
    print($e->getMessage());
}

/*
$image = new \Imagick('./images/2.jpeg');

print($image->getImageSize() . PHP_EOL);

$image->scaleImage(300, 400);
$background = '#00000000';

$image->rotateImage(new ImagickPixel($background), 180);

try {
    $image->writeImages('./images/2_copy.jpeg', true);
} catch (ImagickException $e) {
    print $e->getMessage();
}

$image_copy = new \Imagick('./images/2_copy.jpeg');

printf($image_copy->getImageSize() . PHP_EOL);
*/
