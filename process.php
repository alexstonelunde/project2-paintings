<?php

require('functions.php');
require('dbconnect.php');

$db = dbConnection();

$newPainting = grabAndValidate($_POST);


writeToDB($newPainting, $db);

header('Location: index.php');

?>

