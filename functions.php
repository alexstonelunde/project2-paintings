<?php

/**
 * Draws elements sequentially in formatted HTML.
 *
 * @param array $paintings --> an array of elements.
 *
 * @return string --> the HTML to be interpreted by the browser.
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

/**
 * Gets POST data from form, performs validation and outputs an array.
 * @param array $paintingInput
 * @return array with form field data
 */
function grabAndValidate(array $paintingInput): array {
    $paintingInput['paintingName'] = $_POST['paintingName'];
    $paintingInput['authorFirstName'] = $_POST['authorFirst'];
    $paintingInput['authorSecondName'] = $_POST['authorSecond'];
    $paintingInput['medium'] = $_POST['medium'];
    $paintingInput['height'] = $_POST['height'];
    $paintingInput['width'] = $_POST['width'];
    $paintingInput['date'] = $_POST['date'];
    $paintingInput['path'] = $_POST['path'];

    foreach($paintingInput as $painting)
    {
        if (key($paintingInput) == 'paintingName' || key($paintingInput) == 'authorFirstName' || key($paintingInput) == 'medium' || key($paintingInput) == 'authorSecondName')
        {
            validateStringInput($painting);
        }
        if (key($paintingInput) == 'height' || key($paintingInput) == 'width' || key($paintingInput) == 'date') {
            validateNumInput($painting);
        }

        if (key($paintingInput) == 'path') {
            validatePath($painting);
        }
    }

    return $paintingInput;
}


/**
 * validates string input
 * @param string $input
 * @return string (sanitised and validated)
 */
function validateStringInput(string $input): string {
    if(strlen($input) >= 0 && strlen($input) <= 25) {

        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);

        return $input;
    } else {
        return 'ERROR!!';
    }
}

/**
 * validates numerical input
 * @param $input
 * @return string as number, validated and sanitised
 */
function validateNumInput($input) {
    if(strlen($input) >= 0 && strlen($input) <= 4) {

        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);

        $isValid = ('.');

        if (!ctype_digit(str_replace($isValid, '', $input))) {
            return 'ERROR!!';
        }
        else return $input;
    } else {
        return 'ERROR!!';
    }
}

/**
 * validates path field from form input
 * @param $input
 * @return string, validated and sanitised
 */
function validatePath(string $input): string {
    if(strlen($input) >= 0 && strlen($input) <= 30) {

        $input = trim($input);
        $input = htmlspecialchars($input);

        $isValid = '.';
        $isValid2 = "/";

        if (!ctype_alnum(str_replace($isValid, '', $input)) && !ctype_alnum(str_replace($isValid2, '', $input))) {
            return 'ERROR!!';
        }
        else return $input;
    } else {
        return 'ERROR!!';
    }
}

/**
 * writes data from array create from form input to a database object
 * @param array $newPainting
 * @param PDO $db
 */
function writeToDB(array $newPainting, PDO $db)
{
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = $db->prepare("INSERT INTO `paintings`(`paintingName`, `authorFirstName`, `authorSecondName`, `paintingCreationYear`, `paintingMedium`, `paintingImageLink`, `paintingHeight`, `paintingWidth`) VALUES (:pname, :firstName, :secondName, :pyear, :pmedium, :pimage, :pheight, :pwidth);");

    $query->bindParam(':pname', $newPainting['paintingName']);
    $query->bindParam(':firstName', $newPainting['authorFirstName']);
    $query->bindParam(':secondName', $newPainting['authorSecondName']);
    $query->bindParam(':pyear', $newPainting['date']);
    $query->bindParam(':pmedium', $newPainting['medium']);
    $query->bindParam(':pimage', $newPainting['path']);
    $query->bindParam(':pheight', $newPainting['height']);
    $query->bindParam(':pwidth', $newPainting['width']);

    $query->execute();
}

?>