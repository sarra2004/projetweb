// sign in form appear on click of sign in button
document.getElementById('signInBtn').addEventListener('click', function() {
    document.getElementById('signin').style.display = 'flex';
    document.getElementById('signup').style.display = 'none'; 
    return false; // Prevent default anchor behavior
});

// sign up form appear on click of get started now 
document.getElementById('getStartedBtn').addEventListener('click', function() {
    document.getElementById('signup').style.display = 'flex';
    document.getElementById('signin').style.display = 'none'; 
    return false; 
});

// Close button x
document.querySelectorAll('.close').forEach(btn => {
    btn.addEventListener('click', function() {
        const popupId = this.getAttribute('data-popup');
        document.getElementById(popupId).style.display = 'none';
    });
});

// Close when clicking outside
document.querySelectorAll('.popup').forEach(popup => {
    popup.addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });
});

// the forms logic 
document.addEventListener('DOMContentLoaded', function() {
    const signupForm = document.getElementById('signupForm');
    const signinForm = document.getElementById('signinForm');

    // Handle Sign Up
    signupForm.addEventListener('submit', async function(event) {
        event.preventDefault();

        const email = document.getElementById('email').value.trim();
        const username = document.getElementById('signup-username').value.trim();
        const password = document.getElementById('signup-password').value;
        const confirm = document.getElementById('confirm').value;

        // Clear previous error messages
        clearSignupErrors();

        let hasError = false;


        // validation
        if (!email || !username || !password || !confirm) {
            showMessage('signup-message', 'Please fill all fields.');
            return;
        }
        // email validation
        if (!email) {
            displayError('emailError', 'Email is required.');
            hasError = true;
        } else if (!validateEmail(email)) {
            displayError('emailError', 'Invalid email format.');
            hasError = true;
        }
        // username validation
        if (!username) {
            displayError('name-error', 'Username is required.');
            hasError = true;
        }
        // Password validation
        if (!password) {
            displayError('passwordError', 'Password is required.');
            hasError = true;
        } else {
            if (password.length < 8) {
                displayError('passwordError', 'Password must be at least 8 characters long.');
                hasError = true;
            } else if (!/[A-Z]/.test(password)) {
                displayError('passwordError', 'Password must contain at least one uppercase letter.');
                hasError = true;
            } else if (!/[a-z]/.test(password)) {
                displayError('passwordError', 'Password must contain at least one lowercase letter.');
                hasError = true;
            } else if (!/[0-9]/.test(password)) {
                displayError('passwordError', 'Password must contain at least one number.');
                hasError = true;
            } else if (!/[^a-zA-Z0-9]/.test(password)) {
                displayError('passwordError', 'Password must contain at least one special character.');
                hasError = true;
            }
        }
        // Confirm password validation
        if (!confirm) {
            displayError('confirmPasswordError', 'Please confirm your password.');
            hasError = true;
        } else if (password !== confirm) {
            displayError('confirmPasswordError', 'Passwords do not match.');
            hasError = true;
        }

        if (hasError) {
            return; // Stop form submission if there's an error
        }

        // Prepare form data
        const formData = new FormData();
        formData.append('action', 'signup');
        formData.append('email', email);
        formData.append('username', username);
        formData.append('password', password);
        formData.append('confirm', confirm);

        try {
            const response = await fetch('auth.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (data.success) {
                showMessage('signup-message', data.message, 'success');
                signinForm.reset();
                setTimeout(() => {
                    document.getElementById('signup').style.display = 'none';
                }, 500);
                window.location.reload();
            } else {
                showMessage('signup-message', data.message);
            }
        } catch (error) {
            console.error('Error during sign up:', error);
            alert('An error occurred. Please try again.');
        }
    });

    // Handle Sign In
    signinForm.addEventListener('submit', async function(event) {
        event.preventDefault();

        // Clear previous sign-in error
        signinError.textContent = '';

        const username = document.getElementById('signin-username').value.trim();
        const password = document.getElementById('signin-password').value;

        if (!username || !password) {
            showMessage('signup-message', 'Please fill all fields.');
            return;
        }

        const formData = new FormData();
        formData.append('action', 'signin');
        formData.append('username', username);
        formData.append('password', password);

        try {
            const response = await fetch('auth.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (data.success) {
                showMessage('signin-message', data.message, 'success');
                signinForm.reset();
                // Optional: auto-close the popup after success
                setTimeout(() => {
                    document.getElementById('signin').style.display = 'none';
                }, 500);
                window.location.reload();
            } else {
                showMessage('signin-message', data.message);
            }
        } catch (error) {
            console.error('Error during sign in:', error);
            signinError.textContent = 'An error occurred. Please try again.';
        }
    });

    // clear signup error messages
    function clearSignupErrors() {
        const errorElements = document.querySelectorAll('.error-message');
        errorElements.forEach(element => {
            element.textContent = ''; // Clear text content
            element.style.display = 'none'; // Hide error message
        });
    }
    // Helper function to display error messages
    function displayError(elementId, message) {
        const errorElement = document.querySelector(`#${elementId}`);
        errorElement.textContent = message;
        errorElement.style.display = 'block'; 
    }

    // Replace the showMessage function with this:
    function showMessage(elementId, message, type = 'error') {
        const element = document.getElementById(elementId);
        element.textContent = message;
        element.className = type + '-message';
        element.style.display = 'block';
        
        // Auto-hide success messages after 3 seconds
        if (type === 'success') {
            setTimeout(() => {
                element.style.display = 'none';
            }, 3000);
        }
    }

    // Helper function to validate email format
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
});


