const wrapper = document.querySelectorAll('div.scrolling-wrapper');
var prevScrollY = 0;
var nav = document.querySelector('nav');
var navStyles = nav.currentStyle || window.getComputedStyle(nav);
var yOffset = Number(navStyles.marginTop.slice(0, -2)) + Number(navStyles.paddingTop.slice(0, -2));
var hero = document.querySelector('header.hero-image');
var card = document.querySelectorAll('div.scrolling-wrapper div.card')[2];
var prevCard = document.querySelectorAll('div.scrolling-wrapper div.card')[1];
var left = document.querySelector('span.fa-chevron-circle-left');
var right = document.querySelector('span.fa-chevron-circle-right');
var carousel = document.querySelector("#about > div.container-fluid.px-0.my-5.py-5 > div");

navbarPosControl();
navbarWidthControl();
bgImageResize();
bgPosAdjust();

window.addEventListener('load', function (e) {
    e.preventDefault();
    var scrollAmount = card.clientWidth + Number(window.getComputedStyle(card).marginLeft.substring(0, 2));
    var delay = 5000;
    wrapper.forEach(slider => {
        right.addEventListener('click', function (e) {
            slider.scrollLeft = slider.scrollLeft + scrollAmount;
        });

        left.addEventListener('click', function (e) {
            slider.scrollLeft = slider.scrollLeft - scrollAmount;
        });

        setInterval(function () {
            slider.scrollLeft = slider.scrollLeft + scrollAmount;
            if (Math.abs(Math.floor(slider.scrollLeft) - Math.floor(slider.scrollWidth - slider.clientWidth)) <= 10) {
                slider.scrollLeft = 0;
            }
        }, delay);
    });
});

window.addEventListener('load', function (e) {
    e.preventDefault();
    var options = {
        interval: 5000,
        keyboard: false,
        pause: false,
        touch: true
    };
    for (let i = 0; i < 3; i++) {
        $('#carousel' + (i + 1)).carousel(options);
        $('#carousel' + (i + 1)).carousel('cycle');
    }
});

window.addEventListener('resize', function (e) {
    e.preventDefault();
    navbarWidthControl();
    navbarPosControl();
    bgImageResize();
    bgPosAdjust();
});

window.addEventListener('scroll', function (e) {
    e.preventDefault();
    navbarWidthControl();
    navbarPosControl();
    if (window.scrollY > window.innerHeight) {
        navAnimation();
    }
});

carousel.addEventListener('mouseover', function (e) {
    e.preventDefault();
    for (let i = 0; i < 3; i++)
        $('#carousel' + (i + 1)).carousel('pause');
});

carousel.addEventListener('mouseleave', function (e) {
    e.preventDefault();
    for (let i = 0; i < 3; i++)
        $('#carousel' + (i + 1)).carousel('cycle');
});

function navbarWidthControl() {
    if (window.scrollY > yOffset) {
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

function navAnimation() {
    if (window.scrollY > prevScrollY) {
        $('nav').fadeOut();
    } else {
        $('nav').fadeIn();
    }
    prevScrollY = window.scrollY;
}

function bgImageResize() {
    var bottomBgSize = (Math.pow(window.innerWidth, -0.859) * 32155).toString() + '%';
    var rightBgSize = (Math.pow(window.innerWidth, -0.829) * 5367.88).toString() + '%, ';
    var topBgSize = (Math.pow(window.innerWidth, -0.615) * 4051.19).toString() + '%, ';
    hero.style.backgroundSize = topBgSize + rightBgSize + bottomBgSize;
}

function bgPosAdjust() {
    var bottomBgPosY = 100 + 0.1 * (Math.pow(window.innerWidth, -0.859) * 32155);
    if (window.innerHeight < 675) {
        hero.style.backgroundPositionY = 'top, center, ' + bottomBgPosY.toString() + '%';

    } else {
        hero.style.backgroundPositionY = 'top, center, bottom';
    }
}