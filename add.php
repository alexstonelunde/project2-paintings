<?php

require('functions.php');

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

    <div class="formContainer">

        <div class="formElement">

            <div class="formElementMain">

                <form name="paintingAdd" method="post" action="process.php">

                    <div class="inputTitle">
                        <div class="inputTitleText">
                            ENTER A NEW PAINTING
                        </div>
                    </div>

                    <div class="inputRow">
                        <span>Painting Name:</span>
                        <input type="text" name="paintingName" size="15" />
                    </div>

                    <div class="inputRow">
                        <span>Author First Name:</span>
                        <input type="text" name="authorFirst" size="15" />
                    </div>

                    <div class="inputRow">
                        <span>Author Second Name:</span>
                        <input type="text" name="authorSecond" size="15" />
                    </div>

                    <div class="inputRow">
                        <span>Medium:</span>
                        <input type="text" name="medium" size="15" />
                    </div>

                    <div class="inputRow">
                        <span>Painting Height (in):</span>
                        <input type="text" name="height" size="4" />
                    </div>

                    <div class="inputRow">
                        <span>Painting Width (in):</span>
                        <input type="text" name="width" size="4" />
                    </div>

                    <div class="inputRow">
                        <span>Date painted:</span>
                        <input type="text" name="date" size="4" />
                    </div>

                    <div class="inputRow">
                        <span>Is the date an estimate?</span>
                        <input type="checkbox" name="isEstimate" />
                    </div>

                    <div class="submitRow">
                        <input type="submit" value="Submit" name="submit" />
                    </div>

                </form>

            </div>

        </div>


    </div>

</section>

</body>

</html>