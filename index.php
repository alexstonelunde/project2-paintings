<?php

require('dbconnect.php');
require('functions.php');

$db = dbConnection();

$paintings = queryDB($db);

$contents = drawContentElement($paintings);

?>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Collections project
    </title>

    <link rel = "stylesheet" type = "text/css" href = "css/normalize.css" />
    <link rel = "stylesheet" type = "text/css" href = "css/styles.css" />

</head>

<body>

<nav>
    <div class="navContainer">

        <div class="navElementTitle">
            <div class="navElementItem">
                A selection of paintings from the New York Met
            </div>
        </div>

        <div class="navElement">
            <div class="navElementItem">
                VIEW COLLECTION
            </div>
        </div>

        <div class="navElement2">
            <div class="navElementItem">
                <a href="add.php"> ADD TO DATABASE </a>
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