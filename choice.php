<!DOCTYPE html>
<html>
    <head>
        <title>CineMood-Choose your mood</title>
        <!-- window logo-->
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <!-- css links -->
        <link rel="stylesheet" href="/projet_web/style/style.css"> <!--global-->
        <link rel="stylesheet" href="/projet_web/style/choice.css">
        <!-- fonts -->
        <link href="https://db.onlinewebfonts.com/c/105007d99d9df64c50cc24d696d79555?family=Graphik+Web+Regular+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/02fb003368979ba04752e4f3b4c4cebd?family=Graphik+Web+Semibold+Regular" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/171d30888ae4dbce3d0224490887fb87?family=TiemposHeadline-Bold" rel="stylesheet">
        <link href="https://db.onlinewebfonts.com/c/3b645163096951379a333c390a3d3756?family=Nunito-Bold" rel="stylesheet">
    </head>

    <body>

        <!-- header + forms  -->
        <?php include 'header_forms.php'; ?>

         <main class="content">
            <h1 class="content-title">How would you like to choose your movie?</h1>
            
            <!-- section of first selection with 3 radio buttons current and desired and reset-->
            <input type="radio" id="mood" name="choice" class="choose">
            <input type="radio" id="effect" name="choice" class="choose">
            <input type="radio" id="reset" name="choice" class="choose">

            <section class="selection">
                <div class="selection-container">
                    <label for="mood" class="button">Choose by Current Mood</label>
                    <label for="effect" class="button">Choose by Desired Effect</label>
                </div>
            </section>
            
            <!-- selection for current -->
            <section class="options" id="mood-options" >
                <h2 class="options-title">Select Your Mood</h2>
                <div class="options-container">
                    <button class="mood" onclick="location.href='mood.php?mood=happy'">
                        <img src="images/happy.png" alt="happy">
                        <span>Happy</span>
                    </button>
                    <button class="mood" onclick="location.href='mood.php?mood=excited'">
                        <img src="images/excited.png" alt="excited">
                        <span>Excited</span>
                    </button>
                    <button class="mood" onclick="location.href='mood.php?mood=romantic'">
                        <img src="images/romantic.png" alt="romantic">
                        <span>Romantic</span>
                    </button>
                    <button class="mood" onclick="location.href='mood.php?mood=nostalgic'">
                        <img src="images/nostalgic.png" alt="nostalgic" >
                        <span>Nostalgic</span>
                    </button>
                    <button class="mood" onclick="location.href='mood.php?mood=geek'">
                        <img src="images/geek.png" alt="geek" >
                        <span>Geek</span>
                    </button>
                    <button class="mood" onclick="location.href='mood.php?mood=sad'">
                        <img src="images/sad.png" alt="sad">
                        <span>Sad</span>
                    </button>
                    <button class="mood" onclick="location.href='mood.php?mood=angry'">
                        <img src="images/angry.png" alt="angry">
                        <span>Angry</span>
                    </button>
                    <button class="mood" onclick="location.href='mood.php?mood=reflective'">
                        <img src="images/random.png" alt="random">
                        <span>Reflective</span>
                    </button>
                    <label for="reset" class="mood">
                        <img src="images/mood.png" alt="reset">
                        <span>Change option</span>
                    </label>
                </div>
            </section>

            <!-- selection for desired -->
            <section class="options" id="effect-options">
                <h2 class="options-title">Select Your Desired Effect</h2>
                <div class="options-container">

                    <button class="mood" onclick="location.href='movies.php'">Funny</button>
                    <button class="mood" onclick="location.href='movies.php'">Romantic</button>
                    <button class="mood" onclick="location.href='movies.php'">Heart-warming & Uplifting</button>
                    <button class="mood" onclick="location.href='movies.php'">Inspiring & Thought-provoking</button>
                    <button class="mood" onclick="location.href='movies.php'">Instructive</button>

                    <button class="mood" onclick="location.href='movies.php'">Thrilling</button>
                    <button class="mood" onclick="location.href='movies.php'">Mind-blowing</button>
                    <button class="mood" onclick="location.href='movies.php'">Dark & Intense</button>

                    <button class="mood" onclick="location.href='movies.php'">Weird &  Unconventional</button>
                    <button class="mood" onclick="location.href='movies.php'">Abstract & Experimental</button>

                    <button class="mood" onclick="location.href='movies.php'">Slow & Deep</button>
                    <button class="mood" onclick="location.href='movies.php'">Light & Easygoing</button>
                    <button class="mood" onclick="location.href='movies.php'">Clever & Witty</button>
                    <label for="reset" class="mood">
                        <img src="images/mood.png" alt="reset">
                        <span>Change option</span>
                    </label>
                </div>
            </section>

         </main>

        <!-- footer -->
        <?php include 'footer.php'; ?>

    </body>
</html>