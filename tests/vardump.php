<?php

require('../functions.php');

$db = new PDO('mysql:host=db; dbname=project2-paintings', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `paintingName`, `authorFirstName`, `authorSecondName`, `paintingCreationYear`, `paintingCreationYearIsEstimate`, `paintingMedium`, `paintingImageLink`, `paintingHeight`, `paintingWidth`, `isHidden` FROM `PaintingsTest`;");
$query->execute();

$paintings = $query->fetchAll();

$output = drawContentElement($paintings);


var_dump($paintings);

echo '<br /><br /><br /><br />' . $output;

?>