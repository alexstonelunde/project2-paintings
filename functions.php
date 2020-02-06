<?php

/**
 * Draws elements sequentially in formatted HTML.
 *
 * @param array $paintings --> an array of elements from our MySQL DB.
 *
 * @return string --> a string with the HTML to be interpreted by the browser.
 */
function drawContentElement(array $paintings): string
{
    $displayCode = '';
    foreach ($paintings as $painting)
    {
        if (!(isset($painting['paintingName']) || !(isset($painting['authorFirstName'])) || !(isset($painting['authorSecondName'])) || !(isset($painting['paintingCreationYear'])) || !(isset($painting['paintingMedium'])) || !(isset($painting['paintingHeight'])) || !(isset($painting['paintingWidth'])) || !(isset($painting['paintingImageLink']))))
        {
            var_dump($painting);
            return 'ALL FIELDS MUST HAVE VALUES SET!';
        }

        if (!(array_key_exists('paintingName', $painting)) || !(array_key_exists('authorFirstName', $painting)) || !(array_key_exists('authorSecondName', $painting)) || !(array_key_exists('paintingCreationYear', $painting)) || !(array_key_exists('paintingMedium', $painting)) || !(array_key_exists('paintingHeight', $painting)) || !(array_key_exists('paintingWidth', $painting)) || !(array_key_exists('paintingImageLink', $painting)))
        {
            var_dump($painting);
            return 'MISSING ONE OR MORE FIELDS!';
        }

        if ($painting['paintingCreationYear'] <= 0) {
            return 'PAINTING YEAR MUST BE GREATER THAN ZERO!';
        }

        if ($painting['paintingHeight'] <= 0) {
            return 'PAINTING HEIGHT MUST BE GREATER THAN ZERO!';
        }

        if ($painting['paintingWidth'] <= 0) {
            return 'PAINTING WIDTH MUST BE GREATER THAN ZERO!';
        }

        if ($painting['isHidden'] == 0)
        {
            $estDate = $painting['paintingCreationYearIsEstimate'] == 1 ? ' ca. ' : '';

            $displayCode .= '<div class="contentElement">'
                . '<div class="contentElementPicture">'
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
    }
    return $displayCode;
}



/**
 * Takes a db connection object and applies an SQL statement to it.
 * @param PDO $db
 * @return array -> an array with the data returned from the db
 */
function queryDB(PDO $db): array {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("SELECT `paintingName`, `authorFirstName`, `authorSecondName`, `paintingCreationYear`, `paintingCreationYearIsEstimate`, `paintingMedium`, `paintingImageLink`, `paintingHeight`, `paintingWidth`, `isHidden` FROM `paintings`;");
    $query->execute();

    return $query->fetchAll();
}

?>