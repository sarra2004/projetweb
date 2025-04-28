<!DOCTYPE html>
<html>
    <head>
        <title>CineMood - <?php echo ucfirst($mood); ?></title>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <!-- css links -->
        <link rel="stylesheet" href="/projet_web/style/style.css">
        <link rel="stylesheet" href="/projet_web/style/feel.css">
        <!-- font awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" />
        <!-- fonts -->
        <link href="https://db.onlinewebfonts.com/c/105007d99d9df64c50cc24d696d79555?family=Graphik+Web+Regular+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/02fb003368979ba04752e4f3b4c4cebd?family=Graphik+Web+Semibold+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/171d30888ae4dbce3d0224490887fb87?family=TiemposHeadline-Bold" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- header + forms -->
        <?php include 'header_forms.php'; ?>
        
        <!-- getting the details of the movie by mood-->
        <?php
            // Get mood from URL parameter
            $mood = isset($_GET['mood']) ? $_GET['mood'] : 'happy';
            $mood = in_array($mood, ['happy', 'sad', 'angry', 'excited', 'romantic', 'nostalgic', 'geek', 'reflective']) ? $mood : 'happy';
            
            // Load movies data
            $moviesData = json_decode(file_get_contents('moviesbymood.json'), true);
            $movies = $moviesData[$mood] ?? [];
            $currentMovie = $movies[0] ?? []; // Default to first movie
        ?>

        <main>
            <div class="movie-container">
                <div class="mood-header">
                    <div class="mood">
                        <span>Mood</span>
                        <img src="images/<?php echo $mood; ?>.png" alt="<?php echo $mood; ?>">
                        <span><?php echo ucfirst($mood); ?></span>
                    </div>
                    <div class="mood-btn">
                        <a href="choice.php">
                            <img src="images/mood.png" alt="mood"> 
                            Change mood
                        </a>
                    </div>   
                </div>

                <div class="trailer">
                    <?php if ($currentMovie['video_key']): ?>
                    <iframe src="https://www.youtube.com/embed/<?php echo $currentMovie['video_key']; ?>" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    <?php else: ?>
                    <div class="no-trailer">No trailer available</div>
                    <?php endif; ?>
                </div>

                <div class="movie-details">
                    <div class="title-container">
                        <h2><?php echo $currentMovie['title'] ?? 'No movie found'; ?></h2>
                        <div class="movie-btns">
                            <div class="dialog">
                                <img src="images/heart.svg" alt="favorite" class="heart">
                                <span class="dialog-text">Add to Favorites</span>
                            </div>
                        
                            <div class="dialog">
                                <img src="images/bookmark.svg" alt="watch" class="book">
                                <span class="dialog-text">Add to Watchlist</span>
                            </div>
                        </div>
                    </div>

                    <p class="movie-info">
                        <?php 
                            echo ($currentMovie['release_year'] ?? '') . ' · ' . 
                                ($currentMovie['runtime'] ?? '') . ' · ' . 
                                ($currentMovie['star_rating'] ?? '');
                        ?>
                    </p>
                    <div class="tags">
                        <?php 
                            foreach ($currentMovie['genres'] ?? [] as $genre) {
                                echo '<span class="tag">' . $genre . '</span>';
                        }
                        ?>
                    </div>

                    <p class="movie-description">
                        <?php echo $currentMovie['overview'] ?? ''; ?>
                    </p>

                    <div class="change" id="another-movie">
                        <a href="mood.php?mood=<?php echo $mood; ?>">
                            <img src="images/dice.png" alt=""> 
                            <span>Another movie</span>
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <!-- footer -->
        <?php include 'footer.php'; ?>

        <!-- Hidden data for JavaScript -->
        <script id="movies-data" type="application/json">
            <?php echo json_encode($movies); ?>
        </script>
        
        <script src="js/mood.js"></script>
    </body>
</html>