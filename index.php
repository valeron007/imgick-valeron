<?php
require_once __DIR__.'/vendor/autoload.php';


try {
    $coomandLine = new app\CommandLine(array_slice($argv, 1));
    $coomandLine->validate();
    $image = new \Imagick('./images/2.jpeg');
    $filter_apply = new \app\FilterApply($image);
    $filter_apply->applyFilter($coomandLine->getParameters());
    $filter_apply->saveImage();

} catch (Exception $e) {
    print($e->getMessage());
}

/*


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
