<?php

// get jsondata with file_get_contents
$albumJsonData = file_get_contents('./data/albums.json');
// Decodes JSON string into an associative array (true = array, false = object)
$albums = json_decode($albumJsonData, true);

?>