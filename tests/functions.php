<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class FunctionTests extends TestCase
{
    public function testDrawContentElementSuccess()
    {
        $input = array(
            array(
                "paintingName" => "Still life with Peaches",
                "authorFirstName" => "Auguste",
                "authorSecondName" => "Renoir",
                "paintingCreationYear" => "1881",
                "paintingCreationYearIsEstimate" => "0",
                "paintingMedium" => "Oil on Canvas",
                "paintingImageLink" => "assets/renoir-peaches.jpg",
                "paintingHeight" => "21",
                "paintingWidth" => "25.5",
                "isHidden" => "0"
            ),
            array(
                "paintingName"=> "A Farm in Brittany",
                "authorFirstName" => "Paul",
                "authorSecondName" => "Gauguin",
                "paintingCreationYear" => "1894",
                "paintingCreationYearIsEstimate" => "1",
                "paintingMedium" => "Oil on Canvas",
                "paintingImageLink" => "assets/gauguin-farm.jpg",
                "paintingHeight" => "28.5",
                "paintingWidth" => "35.63",
                "isHidden" => "0"
            )
         );

        $expected = "<div class=\"contentElement\"><div class=\"contentElementPicture\"><img src=\"assets/renoir-peaches.jpg\" /></div><div class=\"contentElementText\"><div class=\"textTitle\"><span class=\"category\">Still life with Peaches</span>, by <span class=\"author\">Auguste Renoir</span></div><ul><li><span class=\"category\">Date: </span>1881</li><li><span class=\"category\">Medium: </span>Oil on Canvas</li><li><span class=\"category\">Dimensions: </span>21 x 25.5 in.</li></ul></div></div><div class=\"contentElement\"><div class=\"contentElementPicture\"><img src=\"assets/gauguin-farm.jpg\" /></div><div class=\"contentElementText\"><div class=\"textTitle\"><span class=\"category\">A Farm in Brittany</span>, by <span class=\"author\">Paul Gauguin</span></div><ul><li><span class=\"category\">Date: </span> ca. 1894</li><li><span class=\"category\">Medium: </span>Oil on Canvas</li><li><span class=\"category\">Dimensions: </span>28.5 x 35.63 in.</li></ul></div></div>";

        $case = drawContentElement($input);

        $this->assertEquals($expected, $case);

    }

    public function testDrawContentElementMalformed()
    {
        $input = "hello";

        $expected = "TypeError: Argument 1 passed to drawContentElement() must be of the type array, string given, called in /sites/academyServer/html/week5/project-collection/tests/functions.php on line 52";

        $case = drawContentElement($input);

        $this->assertEquals($expected, $case);

    }

    public function testDrawContentElementFailure()
    {
        $input = array(
            array(
                "paintingName" => "Still life with Peaches",
                "authorFirstName" => "Auguste",
                "authorSecondName" => "Renoir",
                "paintingCreationYear" => "-3",
                "paintingCreationYearIsEstimate" => "0",
                "paintingMedium" => "Oil on Canvas",
                "paintingImageLink" => "assets/renoir-peaches.jpg",
                "paintingHeight" => "21",
                "paintingWidth" => "25.5",
                "isHidden" => "0"
            ),
            array(
                "paintingName"=> "A Farm in Brittany",
                "authorFirstName" => "Paul",
                "authorSecondName" => "Gauguin",
                "paintingCreationYear" => "1894",
                "paintingCreationYearIsEstimate" => "1",
                "paintingMedium" => "Oil on Canvas",
                "paintingImageLink" => "assets/gauguin-farm.jpg",
                "paintingHeight" => "28.5",
                "paintingWidth" => "35.63",
                "isHidden" => "0"
            )
        );

        $expected = 'PAINTING YEAR MUST BE GREATER THAN ZERO!';

        $case = drawContentElement($input);

        $this->assertEquals($expected, $case);

    }
}

?>