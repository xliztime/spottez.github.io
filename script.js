// JavaScript for revealing hidden section with password validation
const form = document.getElementById('passwordForm');
const passwordInput = document.getElementById('password');
const hiddenSection = document.getElementById('hiddenSection');

form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const password = passwordInput.value.trim();

    // Check if password is correct
    if (password === 'yourpassword') { // Replace 'yourpassword' with your actual password
        hiddenSection.classList.add('visible');
        form.style.display = 'none'; // Hide the form after correct password
    } else {
        alert('Incorrect password. Please try again.'); // Alert for incorrect password
    }
});
