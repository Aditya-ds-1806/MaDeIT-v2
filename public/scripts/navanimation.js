var prevScrollY = 0;
window.addEventListener('scroll', function (e) {
    e.preventDefault();
    if (window.scrollY > window.innerHeight) {
        navAnimation();
    }
});

function navAnimation() {
    if (window.scrollY > prevScrollY) {
        $('nav').fadeOut();
    } else {
        $('nav').fadeIn();
    }
    prevScrollY = window.scrollY;
}