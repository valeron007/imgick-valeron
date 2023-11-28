<?php

namespace app;

/**
 *
 */
class FilterApply
{
    /**
     * @var \Imagick
     */
    private \Imagick $image;

    /**
     * @param \Imagick $image
     */
    public function __construct(\Imagick $image){
        $this->image = $image;
    }

    /**
     * @param array $filters
     * @return void
     * @throws \ImagickException
     */
    public function applyFilter(array $filters): void
    {
        foreach ($filters as $filter) {
            $operation = array_key_first($filter);
            if ($operation === 'scale') {
                print_r($filter[$operation]);
                print($filter[$operation]['cols']);
                $scale = new ScaleTransform($filter[$operation]['cols'], $filter[$operation]['rows']);
                $scale->apply($this->image);
            } elseif ($operation === 'rotate') {
                $rotate = new RotateTransform($filter[$operation]['background'], $filter[$operation]['degree']);
                $rotate->apply($this->image);
            }
        }
    }

    /**
     * @return void
     * @throws \ImagickException
     */
    public function saveImage(){
        $this->image->writeImages('./images/2_copy.jpeg', true);
    }
    /*
    public function __destruct(){
        print("call destruct");
        unset($this->image);
    }
    */
}