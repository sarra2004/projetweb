<!DOCTYPE html>
<html>
    
    <head>
        <title>CineMood-Suggestions</title>
        <!-- window logo-->
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <!-- css links -->
        <link rel="stylesheet" href="/projet_web/style/style.css"> <!--global-->
        <link rel="stylesheet" href="/projet_web/style/movies.css">
        <!-- font awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" />
        <!-- fonts -->
        <link href="https://db.onlinewebfonts.com/c/105007d99d9df64c50cc24d696d79555?family=Graphik+Web+Regular+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/02fb003368979ba04752e4f3b4c4cebd?family=Graphik+Web+Semibold+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/171d30888ae4dbce3d0224490887fb87?family=TiemposHeadline-Bold" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/3b645163096951379a333c390a3d3756?family=Nunito-Bold" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/1b3f9cb78376a36884f3908f37a42c91?family=Tiempos+Text+Regular" rel="stylesheet">
    </head>

    
    <body>

        <!-- header + forms  -->
        <?php include 'header_forms.php'; ?>

        <main>
            <!-- hero section with title & paragraph -->
            <div class="hero">
                <h1 class="hero-title">Your Mood, Your Movie: Let’s Find the Perfect Match</h1>
                <p class="hero-text">Not sure what to watch? Let your feelings decide! Whether you're in the mood for a heartwarming story, an adrenaline-pumping thriller, or a laugh-out-loud comedy, we’ve curated the best movies to match your emotions.</p>
                <button class="hero-btn">
                    <img src="images/mood.png" alt="icon" class="mood-icon">
                    <a href="choice.php">Choose Your Mood</a>
                </button>
            </div>

            <!-- movies suggestion section  -->
            <section class="movies-section">

                <!-- heartwaarming & uplifting -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Heart-warming & Uplifting</h2>
                        <p class="feelings-text">Need a boost of joy? These heartwarming movies and shows are filled with kindness, resilience, and feel-good moments to lift your spirits. Sit back, smile, and enjoy!</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/amelie.webp" alt="amelie">
                                <h4 class="movie-title">Amélie (2001)</h4>
                                <p class="movie-score">8.3</p>
                                <div class="overlay">
                                    <p class="movie-description">A whimsical and life-affirming journey, Amélie radiates warmth and joy as it celebrates love, imagination, and the quiet magic hidden in everyday moments.</p>
                                    <a href="https://youtu.be/HUECWi5pX7o?si=YmVRciMNMfRMCyNk" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/otto1.jpg" alt="otto">
                                <h4 class="movie-title">A Man Called Otto (2022)</h4>
                                <p class="movie-score">7.5</p>
                                <div class="overlay">
                                    <p class="movie-description">A deeply moving and bittersweet tale, A Man Called Otto celebrates second chances, human connection, and the quiet power of kindness to heal even the deepest wounds.</p>
                                    <a href="https://youtu.be/eFYUX9l-m5I?si=F0MLUw-qyBeuUtrN" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/wonder.png" alt="wonder">
                                <h4 class="movie-title">Wonder (2017)</h4>
                                <p class="movie-score">7.2</p>
                                <div class="overlay">
                                    <p class="movie-description">Heartfelt and uplifting, Wonder is a beautiful reminder that true beauty lies in courage, empathy, and the way we treat others.</p>
                                    <a href="https://youtu.be/Ob7fPOzbmzE?si=DL4JQJ4dIZe7KM_4" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- funny -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Funny</h2>
                        <p class="feelings-text">Get ready to lose track of time and laugh until your cheeks hurt. These side-splitting movies are packed with humor that will have you grinning from start to finish.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/hangover.jpg" alt="hangover">
                                <h4 class="movie-title">The Hangover (2009)</h4>
                                <p class="movie-score">7.7</p>
                                <div class="overlay">
                                    <p class="movie-description">A wild ride, The Hangover follows a group of friends piecing together a bachelor party gone off the rails, delivering nonstop laughs and outrageous moments.</p>
                                    <a href="https://youtu.be/tcdUhdOlz9M?si=64qmVK5cOWCV0izr" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/step-brothers.avif" alt="step brothers">
                                <h4 class="movie-title">Step Brothers (2008)</h4>
                                <p class="movie-score">6.9</p>
                                <div class="overlay">
                                    <p class="movie-description">In this hilarious comedy, Step Brothers follows two grown men forced to live together as siblings, sparking endless absurdity and laugh-out-loud moments.</p>
                                    <a href="https://youtu.be/CewglxElBK0?si=r7Q82JKvIhm_z4we" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/harris.jpg" alt="paris">
                                <h4 class="movie-title">Mrs. Harris Goes to Paris (2022)</h4>
                                <p class="movie-score">7.1</p>
                                <div class="overlay">
                                    <p class="movie-description">A comedic adventure, Mrs. Harris Goes to Paris follows a lovable woman chasing high fashion, filled with laughs and feel-good moments.</p>
                                    <a href="https://youtu.be/_Io2tiPw5T8?si=miSQWiXz82pAmB2q" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- romance -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Romantic</h2>
                        <p class="feelings-text">Feeling the sparks fly? Streaming platforms are filled with romantic tales that will make your heart flutter. From passionate dramas to whimsical love stories, here are the best romance movies to stream right now.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/notebook.jpg" alt="notebook">
                                <h4 class="movie-title">The Notebook (2004)</h4>
                                <p class="movie-score">7.8</p>
                                <div class="overlay">
                                    <p class="movie-description">A timeless love story, The Notebook follows the passionate romance between two people from different worlds, delivering unforgettable moments of love, heartbreak, and devotion.</p>
                                    <a href="https://youtu.be/BjJcYdEOI0k?si=5vaTAGtgr6Kt-b_-" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/whisper.jpg" alt="">
                                <h4 class="movie-title">Whisper of the Heart (1995)</h4>
                                <p class="movie-score">7.8</p>
                                <div class="overlay">
                                    <p class="movie-description">In this charming romance, Whisper of the Heart explores the blossoming love between two young hearts, set against a backdrop of dreams, ambition, and the magic of possibility.</p>
                                    <a href="https://youtu.be/0pVkiod6V0U?si=mshXzLHz3uTVeSb5" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/rain.webp" alt="rain">
                                <h4 class="movie-title"> Singin' in the Rain (1952)</h4>
                                <p class="movie-score">8.3</p>
                                <div class="overlay">
                                    <p class="movie-description">In this iconic romance, Singin' in the Rain follows a charming love story set against the backdrop of Hollywood's transition to talkies, with plenty of heart, humor, and timeless music.</p>
                                    <a href="https://youtu.be/D-NJHUasYVA?si=JgC0KPpnucvB2x01" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- inspiring & thought provoking -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Inspiring & Thought provoking</h2>
                        <p class="feelings-text">Some movies and shows do more than entertain—they challenge and inspire us to reflect on life, purpose, and the world around us. If you're looking for stories that spark deep thoughts and inspire change, here are the best inspiring and thought-provoking titles to stream now.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/requiem.jpg" alt="notebook">
                                <h4 class="movie-title">Requiem for a Dream(2000)</h4>
                                <p class="movie-score">8.3</p>
                                <div class="overlay">
                                    <p class="movie-description">A haunting and thought-provoking journey, Requiem for a Dream explores the devastating consequences of addiction, offering a powerful and unflinching look at the human condition.</p>
                                    <a href="https://youtu.be/0nU7dC9bIDg?si=4H8jX7bY4Uiyhh_e" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/sunshine.webp" alt="">
                                <h4 class="movie-title">Eternal Sunshine of the Spotless Mind (2004)</h4>
                                <p class="movie-score">8.3</p>
                                <div class="overlay">
                                    <p class="movie-description">A deeply inspiring and thought-provoking film, Eternal Sunshine of the Spotless Mind delves into the power of memory and the heartbreaking desire to erase the past.</p>
                                    <a href="https://youtu.be/GBEke6JixyE?si=VlglfiGLKADWS_kd" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/truman.jpg" alt="">
                                <h4 class="movie-title"> The Truman Show (1998)</h4>
                                <p class="movie-score">8.2</p>
                                <div class="overlay">
                                    <p class="movie-description">A deeply thought-provoking journey, The Truman Show challenges the boundaries of reality and personal freedom, urging viewers to question the world around them.</p>
                                    <a href="https://youtu.be/ezAsS01cDIs?si=CxSwywC4X1GA76Wb" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- thrilling -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Thrilling</h2>
                        <p class="feelings-text">For unforgettable viewing, nothing beats the thrill that keeps you on the edge of your seat. Whether you're craving suspenseful mysteries or heart-pounding dramas, here are the most thrilling movies and shows to stream now.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/lambs.jpg" alt="">
                                <h4 class="movie-title">The Silence of the Lambs (1991)</h4>
                                <p class="movie-score">8.6</p>
                                <div class="overlay">
                                    <p class="movie-description">Tense and chilling, The Silence of the Lambs weaves a suspenseful cat-and-mouse game between a rookie agent and a manipulative genius, keeping viewers on edge.</p>
                                    <a href="https://youtu.be/6iB21hsprAQ?si=HWqY3bcRKWQkKMUl" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/parasite.jpg" alt="">
                                <h4 class="movie-title">Parasite (2019)</h4>
                                <p class="movie-score">8.5</p>
                                <div class="overlay">
                                    <p class="movie-description">Gripping and suspenseful, Parasite keeps you on edge as class tensions erupt into a shocking and masterfully crafted descent into chaos.</p>
                                    <a href="https://youtu.be/SEUXfv87Wpk?si=dJO3FPZ5yoh6fwWg" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/companion.webp" alt="">
                                <h4 class="movie-title"> Companion (2025)</h4>
                                <p class="movie-score">7.0</p>
                                <div class="overlay">
                                    <p class="movie-description">A suspenseful narrative unfolds in Companion, where the line between human and machine blurs, leading to shocking revelations and thrilling confrontations among friends. </p>
                                    <a href="https://youtu.be/PhcLjiVtgco?si=DeKG_bESPm5ehu0M" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- mind blowing -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Mind-blowing</h2>
                        <p class="feelings-text">Some movies don’t just entertain—they shatter expectations and reshape the way we see the world. If you're ready for jaw-dropping twists, mind-bending storytelling, and unforgettable revelations, here are the most mind-blowing movies to stream now.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/memento.png" alt="">
                                <h4 class="movie-title">Memento (2000)</h4>
                                <p class="movie-score">8.4</p>
                                <div class="overlay">
                                    <p class="movie-description">A masterfully crafted puzzle, Memento turns memory into a mystery, unraveling its story in reverse to deliver a mind-bending cinematic experience.</p>
                                    <a href="https://youtu.be/HDWylEQSwFo?si=lDHgqQkc-YYdJwQx" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Donnie Darko.avif" alt="">
                                <h4 class="movie-title">Donnie Darko (2001)</h4>
                                <p class="movie-score">8.0</p>
                                <div class="overlay">
                                    <p class="movie-description">With its cryptic symbolism and reality-warping twists, Donnie Darko is a mind-bending cult classic that lingers long after the credits roll.</p>
                                    <a href="https://youtu.be/bzLn8sYeM9o?si=aFWBlTwzhRL0AyyB" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/monster.jpg" alt="">
                                <h4 class="movie-title"> Monster (2023)</h4>
                                <p class="movie-score">7.8</p>
                                <div class="overlay">
                                    <p class="movie-description">In Monster, Kore-eda crafts a gripping tale that delves into the ambiguity of truth, leaving audiences questioning their own judgments and biases. </p>
                                    <a href="https://youtu.be/cOpWDxxiwoE?si=d82NFOwyUsPH2mra" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- clever & witty -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Clever & Witty</h2>
                        <p class="feelings-text">Great movies don’t just entertain—they dazzle with sharp dialogue, intelligent storytelling, and quick-witted humor. If you love films that keep you thinking and laughing in equal measure, here are the best clever and witty movies to stream now.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/royal.webp" alt="">
                                <h4 class="movie-title">The Royal Tenenbaums (2001)</h4>
                                <p class="movie-score">7.6</p>
                                <div class="overlay">
                                    <p class="movie-description">Wes Anderson’s signature blend of dry wit and offbeat charm makes The Royal Tenenbaums a clever and delightful journey into the eccentricities of family life.</p>
                                    <a href="https://youtu.be/pLFr1psL4C4?si=KanYlQqKsFNDATuo" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Shoplifters.avif" alt="">
                                <h4 class="movie-title">Shoplifters (2018)</h4>
                                <p class="movie-score">7.9</p>
                                <div class="overlay">
                                    <p class="movie-description">A brilliantly crafted drama, Shoplifters combines sharp, understated humor with an emotionally resonant narrative, delivering a clever take on societal values and human connection.</p>
                                    <a href="https://youtu.be/9382rwoMiRc?si=ri9l-GBZP8ke4b0C" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Women Talking.jpg" alt="">
                                <h4 class="movie-title">Women Talking (2022)</h4>
                                <p class="movie-score">6.9</p>
                                <div class="overlay">
                                    <p class="movie-description">A smart and provocative exploration of power, choice, and justice, Women Talking delivers sharp dialogue and insightful reflections on the complexities of female solidarity. </p>
                                    <a href="https://youtu.be/pD0mFhMqDCE?si=GEnGRsRWxfawnjz0" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- slow & deep -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Slow & Deep</h2>
                        <p class="feelings-text">Some of the most captivating films and shows unfold slowly, allowing you to fully immerse in every moment and feel the weight of each scene. If you're in the mood for films that explore the depths of emotion and meaning at a steady pace, here are the best slow and deep movies to stream now.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Oxhide.webp" alt="">
                                <h4 class="movie-title">Oxhide (2005)</h4>
                                <p class="movie-score">7.0</p>
                                <div class="overlay">
                                    <p class="movie-description">A poignant, slow-burn narrative, Oxhide invites you to linger in its stillness, revealing profound emotional depth through every subtle detail.</p>
                                    <a href="https://youtu.be/aJfPj9fQHoo?si=cKoyxjG8xOunkDKp" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Eureka.jpg" alt="">
                                <h4 class="movie-title">Eureka (2000)</h4>
                                <p class="movie-score">7.0</p>
                                <div class="overlay">
                                    <p class="movie-description">With a contemplative rhythm, Eureka patiently unravels the layers of grief and redemption, offering a deep and resonant exploration of the human condition.</p>
                                    <a href="https://youtu.be/_o0CONMqKOc?si=TswVY8vOfn4gwM4s" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Beyond the Hills.jpg" alt="">
                                <h4 class="movie-title">Beyond the Hills (2012)</h4>
                                <p class="movie-score">7.5</p>
                                <div class="overlay">
                                    <p class="movie-description">A hauntingly slow exploration of faith and friendship, Beyond the Hills uses its measured rhythm to unravel the profound, unsettling choices faced by its characters. </p>
                                    <a href="https://youtu.be/R0X6wxxDAEs?si=bdnNhyBaCpYk5fLE" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- weird & unconventtional -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Weird & Unconventtional</h2>
                        <p class="feelings-text">For those who thrive on the bizarre and embrace the unorthodox, the world of weird and unconventional films offers a thrilling escape. If you’re into the avant-garde, surreal, and downright unusual, here are the best weird movies to stream now.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/The Lobster (2015).webp" alt="">
                                <h4 class="movie-title">The Lobster (2015)</h4>
                                <p class="movie-score">7.1</p>
                                <div class="overlay">
                                    <p class="movie-description">In a bizarre dystopian world where love is mandated, The Lobster blends absurdity with dark humor, creating an unconventional exploration of relationships and conformity.</p>
                                    <a href="https://youtu.be/vU29VfayDMw?si=0urSztw10_GisJ56" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/12 Monkeys.webp" alt="">
                                <h4 class="movie-title">12 Monkeys (1995)</h4>
                                <p class="movie-score">8.0</p>
                                <div class="overlay">
                                    <p class="movie-description">With its time-bending plot and surreal atmosphere, 12 Monkeys offers an unconventional, visually arresting dive into paranoia and the fragility of time.</p>
                                    <a href="https://youtu.be/15s4Y9ffW_o?si=ttJ9R0OpwyQZNbun" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Beetlejuice.jpg" alt="">
                                <h4 class="movie-title">Beetlejuice (1988)</h4>
                                <p class="movie-score">7.5</p>
                                <div class="overlay">
                                    <p class="movie-description">A wild and bizarre ride through the afterlife, Beetlejuice blends dark humor with eccentric characters in an unconventional comedy that defies the ordinary.</p>
                                    <a href="https://youtu.be/ickbVzajrk0?si=lv2vEKLJUVfnyR7w" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- dark & intense -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Dark & Intense</h2>
                        <p class="feelings-text">If you're in the mood to dive into stories that grip your emotions and keep you on the edge of your seat, look no further. From pitch-black comedies to gripping crime thrillers and psychological dramas, these dark and intense movies and shows will leave you spellbound.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Memories of Murder.webp" alt="">
                                <h4 class="movie-title">Memories of Murder (2003)</h4>
                                <p class="movie-score">8.1</p>
                                <div class="overlay">
                                    <p class="movie-description">With its relentless pacing and unsettling atmosphere, Memories of Murder is a dark and intense exploration of crime, justice, and the human psyche.</p>
                                    <a href="https://youtu.be/ux6VHo5jQVw?si=7HPYN9RsECoHePnu" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Mother! 2017.jpg" alt="">
                                <h4 class="movie-title">Mother! (2017)</h4>
                                <p class="movie-score">6.6</p>
                                <div class="overlay">
                                    <p class="movie-description">A disturbing and intense experience, Mother! forces you to confront the madness of its twisted narrative, blending horror, drama, and dark symbolism in a shocking, emotional journey.</p>
                                    <a href="https://youtu.be/XpICoc65uh0?si=QIuOlVnhEB4Si5S7" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Silenced (2011).jpg" alt="">
                                <h4 class="movie-title">Silenced (2011)</h4>
                                <p class="movie-score">8.0</p>
                                <div class="overlay">
                                    <p class="movie-description">A painfully intense exploration of systemic abuse, Silenced dives into the depths of societal corruption, creating a dark, emotionally charged film that demands attention.</p>
                                    <a href="https://youtu.be/k3BUIreDAeY?si=p1R41Tjo4_FgLRCB" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- light & easygoing -->
                <div class="movies-container">
                    <div class="feelings">
                        <h2 class="feelings-title">Light & Easygoing</h2>
                        <p class="feelings-text">When life feels heavy, sometimes you just need a bit of lightness to lift your spirits. Thankfully, there are plenty of movies that offer an easygoing escape, full of charm, warmth, and laughter. Here are the best light and easygoing movies to stream now.</p>
                        <button class="feelings-btn">See all</button>
                    </div>
                    <div class="movies-suggest">
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/IF (2024).avif" alt="">
                                <h4 class="movie-title">IF (2024)</h4>
                                <p class="movie-score">6.4</p>
                                <div class="overlay">
                                    <p class="movie-description">Full of charm and delightful moments, IF offers a refreshing escape with its playful storyline and easygoing adventure in a world where anything is possible.</p>
                                    <a href="https://youtu.be/mb2187ZQtBE?si=QMAHCWNuakbdOMho" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/ariel2023.webp" alt="">
                                <h4 class="movie-title">The Little Mermaid (2023)</h4>
                                <p class="movie-score">7.2</p>
                                <div class="overlay">
                                    <p class="movie-description">With its playful underwater world and endearing characters, The Little Mermaid offers a light and easygoing escape into a fantastical realm full of magic and wonder.</p>
                                    <a href="https://youtu.be/kpGo2_d3oYE?si=mnDCoVxqVij9T4km" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <div class="movie-content">
                                <img src="images/Mixtape.jpg" alt="">
                                <h4 class="movie-title">Mixtape (2021)</h4>
                                <p class="movie-score">6.6</p>
                                <div class="overlay">
                                    <p class="movie-description">With its delightful mix of humor and emotion, Mixtape is a light and easygoing film that celebrates friendship, love, and the power of music to connect us all.</p>
                                    <a href="https://youtu.be/IAxDaDw7TfM?si=cpN3_v0q8StYuJXD" target="_blank" class="watch-btn">Watch Trailer</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

            </section>
        </main>

       <!-- footer -->
       <?php include 'footer.php'; ?>
    </body>
</html>