
//    <!----date---->

var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();

// preloader

var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
    loader.style.display = "none";
})
// preloader end


// services owl carousel

$(".carousel").owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 3,
            nav: false
        }
    }
})

// end services owl carousel


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// Handle Bootstrap carousel slide event
$('.carousel').carousel({
    autoplay: true,
    interval: 3000
});

$('.main-carousel').flickity({
    // options
    autoplay: true,
    setInterval: 2000,
    cellAlign: 'left',
    wrapAround: true,
    freeScroll: true,
});


