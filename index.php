<!DOCTYPE html>
<html>
    <head>
        <title>CineMood</title>
        <!-- window logo -->
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <!-- css links -->
        <link rel="stylesheet" href="/projet_web/style/style.css">
        <link rel="stylesheet" href="/projet_web/style/index.css">
        <!-- font awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" />
        <!-- fonts -->
        <link href="https://db.onlinewebfonts.com/c/105007d99d9df64c50cc24d696d79555?family=Graphik+Web+Regular+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/02fb003368979ba04752e4f3b4c4cebd?family=Graphik+Web+Semibold+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/171d30888ae4dbce3d0224490887fb87?family=TiemposHeadline-Bold" rel="stylesheet">
        <!-- scroll animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body>

        <!-- header + forms  -->
        <?php include 'header_forms.php'; ?>

        <main>
            <!-- hero section with bg img, title, subtext and button -->
            <section class="hero-section" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out" > 
                <div class="hero-text">
                    <h1 class="title">Find the perfect mood for your movie</h1>
                    <p class="subtext">Let your emotions guide you. Whether you're looking for comfort, inspiration, or excitement, CineMood helps you discover the perfect film tailored to your feelings.</p>
                    <button class="hero-button"><a href="movies.php">Start exploring</a></button>
                </div>
            </section>

            <!-- some movies with poster, name views and favorite section -->
            <h3 class="news-title">Popular movies</h3>
            <hr>
            <section class="movie-section">
                <div class="movie-card" data-aos="fade-in" data-aos-duration="300" data-aos-easing="ease-in-out">
                    <div class="movie-title">Oppenheimer (2023)</div>
                    <img src="images/Oppenheimer_(film).jpg" alt="poster" class="movie-poster">
                    <div class="movie-overview">
                        <div class="icon">
                            <i class="fa-solid fa-eye"></i>
                            <span>3.7M</span>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-heart"></i>
                            <span>1.4M</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="movie-card" data-aos="fade-in" data-aos-duration="300" data-aos-easing="ease-in-out">
                    <div class="movie-title">A Normal Family(2023)</div>
                    <img src="images/normalfamily2023.jpg" alt="poster" class="movie-poster">
                    <div class="movie-overview">
                        <div class="icon">
                            <i class="fa-solid fa-eye"></i>
                            <span>2.6K</span>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-heart"></i>
                            <span>540</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="movie-card" data-aos="fade-in" data-aos-duration="300" data-aos-easing="ease-in-out">
                    <div class="movie-title">I'm Still Here (2024)</div>
                    <img src="images/stillhere2024.jpg" alt="poster" class="movie-poster">
                    <div class="movie-overview">
                        <div class="icon">
                            <i class="fa-solid fa-eye"></i>
                            <span>588K</span>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-heart"></i>
                            <span>329K</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="movie-card" data-aos="fade-in" data-aos-duration="300" data-aos-easing="ease-in-out">
                    <div class="movie-title">Deadpool & Wolverine (2024)</div>
                    <img src="images/deadpool&wolverine2024.jpg" alt="poster" class="movie-poster">
                    <div class="movie-overview">
                        <div class="icon">
                            <i class="fa-solid fa-eye"></i>
                            <span>2.2M</span>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-heart"></i>
                            <span>718K</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="movie-card" data-aos="fade-in" data-aos-duration="300" data-aos-easing="ease-in-out">
                    <div class="movie-title">Companion (2025)</div>
                    <img src="images/Companion_film_poster.jpg" alt="poster" class="movie-poster">
                    <div class="movie-overview">
                        <div class="icon">
                            <i class="fa-solid fa-eye"></i>
                            <span>665K</span>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-heart"></i>
                            <span>214K</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="movie-card" data-aos="fade-in" data-aos-duration="300" data-aos-easing="ease-in-out">
                    <div class="movie-title">Black Bag (2025)</div>
                    <img src="images/blackbag2025.jpg" alt="poster" class="movie-poster">
                    <div class="movie-overview">
                        <div class="icon">
                            <i class="fa-solid fa-eye"></i>
                            <span>124k</span>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-heart"></i>
                            <span>40k</span>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            
            <!-- lets you section -->
            <h3 class="features-title">CineMood lets you ...</h3>
            <hr>
            <section class="features" data-aos="fade-up" data-aos-duration="1000">
                <div >
                    <img src="images/mood.svg" alt="mood" class="features-img">
                    <p>Select your current emotion, and CineMood will recommend films that match your feelings.</p>
                </div>
                <div >
                    <img src="images/list.svg" alt="list" class="features-img">
                    <p> Make custom film lists based on moods or themes and keep a watchlist of movies you want to see.</p>
                </div>
                <div>
                    <img src="images/eye.svg" alt="view" class="features-img" >
                    <p>Log every film you watch from the day you join and track your movie-watching journey.</p>
                </div>
                
                <div>
                    <img src="images/star.svg" alt="star" class="features-img">
                    <p>Give each film a rating on a five-star scale to track and share your reactions.</p>
                </div>
                
                <div>
                    <img src="images/heart.svg" alt="heart" class="features-img" >
                    <p>Like your favorite films, mood-based lists, and recommendations to personalize your experience.</p>
                </div>

                <div>
                    <img src="images/comment.svg" alt="review" class="features-img">
                    <p>Write and share reviews, follow friends, and see what others think about different movies.</p>
                </div>
            </section>

            <!-- recent news section contains oscar, cannes, james bond -->
            <h3 class="news-title">Recent News <span>more</span></h3>
            <hr>
            <section class="news">
                <div class="news-container">
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <a href="https://abc.com/news/8d96bb37-bd59-4c28-a470-46f244f63b3b/category/3590742" target="_blank"><img src="images/oscar.webp" alt="oscar" class="news-img"></a>
                        <div class="news-text">
                            <a href="https://abc.com/news/8d96bb37-bd59-4c28-a470-46f244f63b3b/category/3590742" target="_blank">Oscar 2025 Awards & Winners</a>
                            <p>Discover the full list of the 97th Academy Awards Winners!</p>
                        </div>
                    </div>
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <a href="https://www.ioncinema.com/news/film-festivals/2025-cannes-film-festival-competition" target="_blank"><img src="images/cannes2025-1.jpg" alt="cannes" class="news-img"></a>
                        <div class="news-text">
                            <a href="https://www.ioncinema.com/news/film-festivals/2025-cannes-film-festival-competition" target="_blank">Cannes Film Festival 2025</a>
                            <p>Explore our picks for the top films to watch at Cannes 2025!</p>
                        </div>
                    </div>
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <a href="https://www.empireonline.com/movies/news/james-bond-losing-barbara-broccoli-michael-g-wilson-amazon-mgm-creative-control/" target="_blank"><img src="images/bond.webp" alt="bond" class="news-img"></a>
                        <div class="news-text">
                            <a href="https://www.empireonline.com/movies/news/james-bond-losing-barbara-broccoli-michael-g-wilson-amazon-mgm-creative-control/" target="_blank">James Bond's Future</a>
                            <p>James Bond loses producers Barbara Broccoli and Michael G. Wilson, as Amazon MGM takes creative control.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- upcoming movies section -->
            <h3 class="news-title">Upcoming movies <span class="news-span">more</span></h3>
            <hr>
            <section class="news">
                <div class="news-container">
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <iframe width="400" height="250" src="https://www.youtube.com/embed/cbC1CQsJp94?si=jcTuDulIQ9hWbUQL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="news-text">
                            <a href="#">Warfare</a>
                            <p>A platoon of Navy SEALs embark on a dangerous mission in Ramadi, Iraq, with the chaos and brotherhood of war retold through their memories of the event.</p>
                        </div>
                    </div>
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <iframe width="400" height="250" src="https://www.youtube.com/embed/v-94Snw-H4o?si=uIvREY_WlctJTKIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="news-text">
                            <a href="#">Thunderbolts*</a>
                            <p>After finding themselves ensnared in a death trap, an unconventional team of antiheroes must embark on a dangerous mission that will force them to confront the darkest corners of their pasts.</p>
                        </div>
                    </div>
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <iframe width="400" height="250" src="https://www.youtube.com/embed/KqU2U_vV3Ak?si=2W-OOYKG0Rl4Q_MF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="news-text">
                            <a href="#">M3GAN 2.0</a>
                            <p>Two years after M3GAN's rampage, her creator, Gemma, resorts to resurrecting her infamous creation in order to take down Amelia, the military-grade weapon who was built by a defense contractor who stole M3GAN's underlying tech.</p>
                        </div>
                    </div>
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <iframe width="400" height="250" src="https://www.youtube.com/embed/8B1EtVPBSMw?si=5XUklWe7XABXuOJB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="news-text">
                            <a href="#">A Minecraft Movie</a>
                            <p>Four misfits are suddenly pulled through a mysterious portal into a bizarre, cubic wonderland that thrives on imagination. To get back home, they'll have to master this world while embarking on a quest with an unexpected, expert crafter.</p>
                        </div>
                    </div>
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <iframe width="400" height="250" src="https://www.youtube.com/embed/n7YJj6iO2QY?si=00kL1v4bcOWabZaT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="news-text">
                            <a href="#">Freakier Friday</a>
                            <p>Years after Tess and Anna endured an identity crisis, Anna now has a daughter and a soon-to-be stepdaughter. As they navigate the challenges that come when two families merge, Tess and Anna discover that lightning might strike twice.</p>
                        </div>
                    </div>
                    <div class="news-card" data-aos="flip-left" data-aos-duration="1000">
                        <iframe width="400" height="250" src="https://www.youtube.com/embed/3wRCOqyDI6E?si=nBofApHPuMfaPIIv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="news-text">
                            <a href="#">The Accountant 2</a>
                            <p>Christian Wolff applies his brilliant mind and illegal methods to reconstruct the unsolved puzzle of a Treasury chief's murder.</p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php include 'footer.php'; ?>

        <!-- aos animations -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

    </body>
</html>
