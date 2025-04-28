<!DOCTYPE html>
<html>

    <head>
        <title>CineMood-Contact</title>
        <!-- window logo-->
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <!-- css links -->
        <link rel="stylesheet" href="/projet_web/style/style.css"> <!--global-->
        <link rel="stylesheet" href="/projet_web/style/contact.css"> 
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
            <div class="contact-container">
                <img src="images/contact.jpg" alt="poster" class="contact-poster">
                <div class="contact-text">
                    <h2>Contact CineMood</h2>
                    <p>We’d love to hear from you about any aspect of Cinemood! Whether you have questions, suggestions, or feedback, feel free to reach out. You can contact us via email using the links below or through our social media channels. We welcome your messages of excitement, recommendations, or even constructive criticism—your input helps us improve and create a better movie discovery experience for you!</p>
                    <div class="contact-form" >
                        <form id="contactForm" method="POST">
                            <label for="name">Name </label>
                            <input type="text" id="name" name="name" required>
                            <label for="email">Email </label>
                            <input type="email" id="email" name="email" required>
                            <label for="message">Write your message here</label>
                            <textarea id="message" name="message" required></textarea>
                            <button type="submit" class="contact-btn">Send</button>
                        </form>
                        <div class="other-contact">
                            <h4>Alternative Contact Information</h4>
                            <div class="contact-info">
                                <a href="mailto:support@cinemood.com"><img src="images/mail.svg" alt="mail"></a>
                                <p><a href="mailto:support@cinemood.com">support@cinemood.com</a></p>
                            </div>
                            <div class="contact-info">
                                <a href="tel:+1234567890"><img src="images/call.svg" alt="phone"></a>
                                <p><a href="tel:+1234567890">+1 234 567 890</a></p>
                            </div>
                            <div class="contact-info">
                                <a href="#"><img src="images/facebook.svg" alt="facebook"></a>
                                <p><a href="#">CineMood Facebook</a></p>
                            </div>
                            <div class="contact-info">
                                <a href="#" ><img src="images/instagram.svg" alt="instagram"></a>
                                <p><a href="#" >@Cinemood</a></p>
                            </div>
                            <div class="contact-info">
                                <a href="#" ><img src="images/twitter-alt.svg" alt="x"></a>
                                <p><a href="#" >@CinemoodX</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- footer -->
        <?php include 'footer.php'; ?>

    </body>
</html>