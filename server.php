<?php

require_once('./functions.php');

// validation
if ($_POST['title'] && $_POST['artist'] && $_POST['imgURL'] && $_POST['year'] && $_POST['genre'] && $_POST['memory']) {
// get data from post
$newAlbum = [
    "title" => $_POST['title'],
    "artist" => $_POST['artist'],
    "coverUrl" => $_POST['imgURL'],
    "releaseYear" => $_POST['year'],
    "genre" => $_POST['genre'],
    "memory" => $_POST['memory']
];

// import jsonData 
// cvonvert to php
// already done in functions.php
// add new album
$albums[] = $newAlbum;

// convert to json
$updatedAlbumsData = json_encode($albums);
// override with file_put_contents(WHERE, WHAT)
file_put_contents("./data/albums.json", $updatedAlbumsData);

}

// redirect home
header('Location: ./index.php');
exit;


?>