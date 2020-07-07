var nav = document.querySelector('nav');
var navStyles = nav.currentStyle || window.getComputedStyle(nav);
var prevScrollY = 0;

navbarPosControl();
navbarWidthControl();

window.addEventListener('resize', function (e) {
    e.preventDefault();
    navbarPosControl();
});

window.addEventListener('scroll', function (e) {
    e.preventDefault();
    navbarWidthControl();
});

function navbarWidthControl() {
    if (window.scrollY > Number(navStyles.marginTop.slice(0, -2))) {
        nav.classList.remove('container');
        nav.classList.add('container-fluid');
    } else {
        nav.classList.add('container');
        nav.classList.remove('container-fluid');
    }
}

function navbarPosControl() {
    var body = document.body;
    var bodyStyles = body.currentStyle || window.getComputedStyle(body);
    var navWidth = Number(navStyles.width.slice(0, -2));
    var bodyWidth = Number(bodyStyles.width.slice(0, -2));
    var freeWidth = bodyWidth - navWidth;
    nav.style.left = (freeWidth / 2).toString() + 'px';
}