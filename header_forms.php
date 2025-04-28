<!-- nav bar -->
<header>
    <nav class="navbar">
        <div class="navbar-container">
            <img src="images/logo.png" alt="logo" class="icon">
            <h1 class="navbar-icon">CineMood</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="choice.php">Mood Selection</a></li>
                <li><a href="favorite.php">Favorites</a></li>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="#" id="signInBtn">Sign In</a></li> 
                <li><a href="#" class="navbar-button" id="getStartedBtn">Get Started</a></li>  
            </ul>
        </div>  
    </nav>
</header>

<!-- Sign Up Form -->
<div id="signup" class="popup" style="display: none;">
    <div class="popup-content">
        <span>
            <h2>Join CineMood</h2>    
            <img src="images/close.svg" alt="close" class="close" data-popup="signup">
        </span>
        <form id="signupForm" method="POST" action="auth.php">
            <input type="hidden" name="action" value="signup">  
            <!-- Form contents -->
            <div>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" >
                <div id="emailError" class="error-message"></div> 
            </div>
            
            <div>
                <label for="signup-username">Username</label>
                <input type="text" id="signup-username" name="username" >
                <div id="name-error" class="error-message"></div>
            </div>

            <div>
                <label for="signup-password">Password</label>
                <input type="password" id="signup-password" name="password" >
                <div id="passwordError" class="error-message"></div>
            </div>

            <div>
                <label for="confirm">Confirm Password</label>
                <input type="password" id="confirm" name="confirm">
                <div id="confirmPasswordError" class="error-message"></div>
            </div>

            <button type="submit" class="signup-btn" id="signup-btn">Sign Up</button>
            <div id="signup-error" class="error-message"></div>
            <div id="signup-message" class="success-message"></div>
        </form>
    </div>
</div>

<!-- Sign In Form -->
<div id="signin" class="popup" style="display: none;">
    <div class="popup-content">
        <span>
            <h2>Your Account</h2>
            <img src="images/close.svg" alt="close" class="close" data-popup="signin">
        </span>
        <form id="signinForm" method="POST" action="auth.php">
            <input type="hidden" name="action" value="signin">
            <!-- Form contents -->
            <label for="signin-username">Username</label>
            <input type="text" id="signin-username" name="username" required>

            <label for="signin-password">Password</label>
            <input type="password" id="signin-password" name="password" required>
            
            <button type="submit" class="signup-btn" id="signin-btn">Sign In</button>
            <div id="signin-error" class="error-message"></div>
            <div id="signin-message" class="success-message"></div>
        </form>
    </div>
</div>
<script src="js/main.js"></script>
