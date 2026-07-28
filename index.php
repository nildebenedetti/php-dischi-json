<?php

// get jsondata with file_get_contents
$albumJsonData = file_get_contents('./data/albums.json');
// Decodes JSON string into an associative array (true = array, false = object)
$albums = json_decode($albumJsonData, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melancholia.fm</title>

    <!-- Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./style/index.css">
</head>
<body class="bg-mf-dark text-mf-main">

    <header class="text-center py-5">
        <h1 class="font-display text-mf-lavender text-glow-lavender fw-bold display-4">Melancholia.fm</h1>
        <h5 class="font-lcd text-mf-cyan text-glow-cyan mt-2">Your favorite music player for nostalgic moments</h5>
    </header>
    <div class="container my-4">
        <div class="lcd-display p-3 d-flex justify-content-between align-items-center"> 
            <span class="font-lcd">> SYSTEM STATUS: READY</span>
            <span class="font-lcd">[ TOTAL ALBUMS: <?= count($albums) ?> ]</span>
        </div>
    </div>
    <!-- card container -->
    <div class="container d-flex flex-column justify-content-center">
        <ul class="row list-unstyled g-3 justify-content-center">
            <?php foreach( $albums as $album) : ?>
                    <li class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card bg-mf-surface border-0 glow-hover text-mf-main h-100 p-3">
                            <div class="card-body">
                                <img src="<?= $album['coverUrl'] ?>" 
                                    class="card-img-top cover-square mb-3" 
                                    alt="<?= $album['title'] ?>">
                                <h5 class="card-title font-display text-mf-lavender fw-bold mb-1"><?= $album['title']?></h5>
                                <h6 class="card-subtitle text-mf-muted mb-3 fs-6"><?= $album['artist'] ?></h6>
                                <span class="card-text text-mf-muted mb-3 fs-6">Year:<?= $album['releaseYear']?></span>
                                <p class="card-text text-mf-muted mb-3 fs-6">Genre: <?= $album['genre']?></p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
        </ul>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

<div class="lcd-display p-3 d-flex justify-content-between align-items-center m-5"> 
            <span class="font-lcd">> INSERT INFORMATION: </span>
            <form action="server.php" method="post">
            <!-- blocco con 
            NOME - ARTISTA - RELEASE YEAR
            ANNO PUBBLICAZIONE - IMGURL -->
                <div class="container">
                    <div class="row">
                        <!-- title -->
                        <div class="col-4 py-3">
                            <input type="text" id="title" name="title" placeholder="Album Title...">
                            <label for="title">Album Title</label>
                        </div>
                        <!-- artist -->
                        <div class="col-4 py-3">
                            <input type="text" id="artist" name="artist" placeholder="Artist Title...">
                            <label for="artist">Title</label>
                        </div>
                        <!-- release year -->
                        <div class="col-4 py-3">
                            <input type="text" id="year" name=year" placeholder="Release Year...">
                            <label for="year">Year</label>
                        </div>
                        <!-- genre -->
                        <div class="col-6 py-3">
                            <input type="text" id="genre" name="genre" placeholder="Music genre...">
                            <label for="genre">Genre</label>
                        </div>
                        <!-- imgURL -->
                        <div class="col-6 py-3">
                            <input type="text" id="imgURL" name="imgURL" placeholder="Add Image URL...">
                            <label for="imgURL">Image URL</label>
                        </div>
                    </div>
                        <button class="btn-submit">
                        Add Tears    
                        </button>
                </div>

            </form>
        </div>