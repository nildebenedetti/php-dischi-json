<?php

require_once('./functions.php');

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
<body class="bg-mf-dark text-mf-main d-flex flex-column min-vh-100">

    <header class="text-center py-5">
        <h1 class="font-display text-mf-lavender text-glow-lavender fw-bold display-4">Melancholia.fm</h1>
        <h5 class="font-lcd text-mf-cyan text-glow-cyan mt-2">Your favorite music player for nostalgic moments</h5>
    </header>
    <main class="container d-flex flex-column align-items-center justify-content-center flex-grow-1">
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
                    <li class="col-sm-12 col-md-6">
                        <div class="card bg-mf-surface border-0 glow-hover text-mf-main h-100 p-3">
                            <div class="card-body">
                                <img src="<?= $album['coverUrl'] ?>" 
                                    class="card-img-top cover-square mb-3" 
                                    alt="<?= $album['title'] ?>">
                                <h5 class="card-title font-display text-mf-lavender fw-bold mb-1"><?= $album['title']?></h5>
                                <h6 class="card-subtitle text-mf-muted mb-3 fs-6"><?= $album['artist'] ?></h6>
                                <span class="card-text text-mf-muted mb-3 fs-6">Year: <?= $album['releaseYear']?></span>
                                <p class="card-text text-mf-muted mb-3 fs-6">Genre: <?= $album['genre']?></p>
                                <p class="card-text text-mf-muted mb-3 fs-6 fst-italic">Lost Memory: <br> "<?= $album['memory']?>"</p>                                
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
        </ul>
    </div>

    <div class="lcd-display p-3 p-md-4 my-4"> 
    <!-- Titolo sopra il form -->
    <h5 class="font-lcd text-mf-cyan mb-3">> INSERT INFORMATION:</h5>

    <form action="server.php" method="post">
        <div class="row g-3">
            <form action="server.php" method="post">
                <!-- Title: 100% su Mobile, 1/3 su Desktop -->
                <div class="col-12 col-md-4">
                    <label for="title" class="form-label text-mf-muted fs-6">Album Title</label>
                    <input type="text" id="title" name="title" minlength="1" maxlength="60" class="form-control" placeholder="Album Title..." required>
                </div>

                <!-- Artist: 100% su Mobile, 1/3 su Desktop -->
                <div class="col-12 col-md-4">
                    <label for="artist" class="form-label text-mf-muted fs-6">Artist Name</label>
                    <input type="text" id="artist" name="artist" minlength="1" maxlength="60" class="form-control" placeholder="Artist Name..." required>
                </div>

                <!-- Release Year: 100% su Mobile, 1/3 su Desktop -->
                <div class="col-12 col-md-4">
                    <label for="year" class="form-label text-mf-muted fs-6">Release Year</label>
                    <input type="number" id="year" name="year" class="form-control" min="1900" max="2026" placeholder="Release Year..." required>
                </div>

                <!-- Genre: 100% su Mobile, 1/2 su Desktop -->
                <div class="col-12 col-md-6">
                    <label for="genre" class="form-label text-mf-muted fs-6">Genre</label>
                    <input type="text" id="genre" name="genre" minlength="1" maxlength="60" class="form-control" placeholder="Music genre..." required>
                </div>
                <!-- Image URL: 100% su Mobile, 1/2 su Desktop -->
                <div class="col-12 col-md-6">
                    <label for="imgURL" class="form-label text-mf-muted fs-6">Image URL</label>
                    <input type="text" id="imgURL" name="imgURL" class="form-control" placeholder="Add Image URL..." required>
                </div>
                <!-- Lost Memory: 100% su Mobile, 1/2 su Desktop -->
                <div class="col-12">
                    <label for="imgURL" class="form-label text-mf-muted fs-6">Lost Memory</label>
                    <input type="text" id="imgURL" name="imgURL" minlength="1" maxlength="100" class="form-control" placeholder="Unravel a memory lost within these tracks..." required>
                </div>
                <!-- Submit Button: Largo a tutto schermo da Mobile, a destra da Desktop -->
                <div class="col-12 mt-4 text-end">
                    <button type="submit" class="btn-submit w-100 w-md-auto">
                        + Add Tears    
                    </button>
                </div>
            </div>
        </form>
    </div>
    </main>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

