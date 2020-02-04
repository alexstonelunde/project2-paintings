<?php

$db = new PDO('mysql:host=db; dbname=project2-paintings', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `paintingName`, `authorFirstName`, `authorSecondName`, `paintingCreationYear`, `paintingCreationYearIsEstimate`, `paintingMedium`, `paintingImageLink`, `paintingDescription`, `paintingHeight`, `paintingWidth` FROM `Paintings`;");
$query->execute();

$paintings = $query->fetchAll();


function drawContentElement(array $paintings): string
{
    $displayCode = '';
    foreach ($paintings as $painting) {
        $estDate = $painting['paintingCreationYearIsEstimate'] == 1?' ca. ':'';

        $displayCode .= '<div class="contentElement">'
            . '<div class="contentElementPicture2">'
            . '<img src="' . $painting['paintingImageLink'] . '" />'
            . '</div>'
            . '<div class="contentElementText">'
            . '<div class="textTitle">'
            . '<span class="category">' . $painting['paintingName'] . '</span>, by <span class="author">' . $painting['authorFirstName'] . ' ' . $painting['authorSecondName'] . '</span>'
            . '</div>'
            . '<ul>'
            . '<li><span class="category">Date: </span>'
            . $estDate
            . $painting['paintingCreationYear'] . '</li>' . '<li><span class="category">Medium: </span>' . $painting['paintingMedium'] . '</li>'
            . '<li><span class="category">Dimensions: </span>' . $painting['paintingHeight'] . ' x ' . $painting['paintingWidth'] . ' in.' . '</li>'
            . '</ul>'
            . '</div>'
            . '</div>';
    }
    return $displayCode;
}

?>