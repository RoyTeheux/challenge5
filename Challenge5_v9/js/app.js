// Next/previous controls
function plusSlides(n) {
    if(runslideshow != null) {
        stopslideshow();
    }
    showSlides(slideIndex += n);
    startslideshow();
}

  // Thumbnail image controls
function currentSlide(n) {
    if(runslideshow != null) {
        stopslideshow();
    }
    showSlides(slideIndex = n);
    startslideshow();
}

function showSlides(n) { //this function shows the slides
    var i;
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

function autoshowSlides() { //this function autoplays the slides
    var i;
    if (slides[slideIndex-1] != undefined) {
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
            /*sets the  clicked on dot or the ones the slideshow is on in active style 
            so the user can tell wich one the slideshow is on*/
        }
        dots[slideIndex-1].className += " active";
    }
    startslideshow();
}

function startslideshow() { // sets a timer for the autoplay function 
    runslideshow = setTimeout(autoshowSlides, myTimer*1000);
}

function stopslideshow() {// stops the slideshow
    clearTimeout(runslideshow);
    runslideshow = null;
}

function valrunslideshow() { //sends to console if the slide runs or not
    if(runslideshow == null) {
        console.log('slideshow is NOT running');
    } else {
        console.log('slideshow is running');
    }
}

//SETTINGS
var myTimer = 4;  // Change image every (...) seconds
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
var slideIndex = slides.length;
var runslideshow = null;
window.onload = autoshowSlides();