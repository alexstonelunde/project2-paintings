<?php

require('dbconnect.php');
require('functions.php');

$db = dbConnection($dbName, $dbUser, $dbPass);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `paintingName`, `authorFirstName`, `authorSecondName`, `paintingCreationYear`, `paintingCreationYearIsEstimate`, `paintingMedium`, `paintingImageLink`, `paintingHeight`, `paintingWidth`, `isHidden` FROM `paintings`;");
$query->execute();

$paintings = $query->fetchAll();

$contents = drawContentElement($paintings);

?>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        A collection of impressionist paintings from the Met that I like.
    </title>

    <link rel = "stylesheet" type = "text/css" href = "css/normalize.css" />
    <link rel = "stylesheet" type = "text/css" href = "css/styles.css" />

</head>

<body>

<nav>
    <div class="navContainer">

        <div class="navElementTitle">
            <div class="navElementItem">
                A selection of impressionist paintings from the NY Met
            </div>
        </div>

        <div class="navElement">
            <div class="navElementItem">
                <a href=""> VIEW COLLECTION </a>
            </div>
        </div>

        <div class="navElement2">
            <div class="navElementItem">
                ADD ITEM TO GALLERY
            </div>
        </div>

    </div>
</nav>

<section class="main">

    <div class="contentContainer">

        <?php
        echo $contents;
        ?>

    </div>

</section>

</body>

</html>