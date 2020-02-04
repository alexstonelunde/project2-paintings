<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class FunctionTests extends TestCase
{
    public function testDrawContentElementSuccess()
    {
        $expected = '<div class="contentElement"><div class="contentElementPicture2"><img src="assets/manet-fishing.jpg" /></div><div class="contentElementText"><div class="textTitle"><span class="category">Fishing</span>, by <span class="author">Edouard Manet</span></div><ul><li><span class="category">Date: </span> ca. 1862</li><li><span class="category">Medium: </span>Oil on Canvas</li><li><span class="category">Dimensions: </span>30.25 x 48.5 in.</li></ul></div></div>';

        $paintingName = 'Fishing';
        $authorFirstName = 'Edouard';
        $authorSecondName = 'Manet';
        $paintingCreationYear = 1862;
        $paintingMedium = 'Oil on Canvas';
        $paintingImageLink = 'assets/manet-fishing.jpg';
        $paintingHeight = 30.25;
        $paintingWidth = 48.5;


    }
}
?>