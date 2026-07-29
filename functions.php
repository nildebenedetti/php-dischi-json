<?php

// 1. FUNCTION FOR COLLECTING AND PARSING ALBUM DATA 
// => get jsondata with file_get_contents
// =>Decodes JSON string into an associative array 
// (true = array, false = object)
function getAlbums() {

    $albumJsonData = file_get_contents('./data/albums.json');
    return json_decode($albumJsonData, true) ?? [];

}

?>