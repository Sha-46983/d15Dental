jQuery (document).ready(function() {
    // Function to check if element is in viewport

    jQuery(".floating-contact-button").on('click', function () {
        $(".floating-contact-wrapper").toggleClass("active-floating-contact")
    })
    jQuery(".close-floating-contact").on('click', function () {
        $(".floating-contact-wrapper").removeClass("active-floating-contact")
    })
});
