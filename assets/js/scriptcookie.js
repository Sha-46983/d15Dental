// Check if the user has already accepted cookies
if (!localStorage.getItem("d15cookieConsent")) {

    // Show the cookie consent banner if not accepted yet
    document.getElementById("cookieConsent").style.display = "block";
}
else{
    document.getElementById("cookieConsent").style.display = "none";
}

// Handle the accept button click
document.getElementById("acceptCookieBtn").addEventListener("click", function() {
    // Store consent in localStorage so it won't ask again
    localStorage.setItem("d15cookieConsent", "accepted");
    
    // Hide the cookie consent banner
    document.getElementById("cookieConsent").style.display = "none";
});
