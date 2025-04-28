<!DOCTYPE html>
<html>
    
    <head>
        <title>CineMood-Favorites</title>
        <!-- window logo-->
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <!-- css links -->
        <link rel="stylesheet" href="/projet_web/style/style.css"> <!--global-->
        <link rel="stylesheet" href="/projet_web/style/favorite.css">
        <!-- font awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" />
        <!-- fonts -->
        <link href="https://db.onlinewebfonts.com/c/105007d99d9df64c50cc24d696d79555?family=Graphik+Web+Regular+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/02fb003368979ba04752e4f3b4c4cebd?family=Graphik+Web+Semibold+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/171d30888ae4dbce3d0224490887fb87?family=TiemposHeadline-Bold" rel="stylesheet">
    </head>

    <body>
        <!-- header + forms  -->
       <?php include 'header_forms.php'; ?>

        <main>
            <div class="hero">
                <h1 class="hero-title">Discover Your Favorite Movies</h1>
                <p class="hero-text">Welcome to your Favorites page! Here, you’ll find all the movies you’ve marked as your favorites, making it easy to revisit the films that captured your heart. Whether it’s a feel-good comedy, a thrilling action movie, or a heartwarming romance, your personal collection is just a click away. Keep adding to your list and create your own personalized movie library with CineMood!</p>
            </div>

             <!-- fav  section -->
            <h1 class="phrase">No favorites yet! Discover amazing movies and add them here to create your ultimate watchlist.</h1>
        </main>

        <!-- footer -->
        <?php include 'footer.php'; ?>

    </body>
</html>