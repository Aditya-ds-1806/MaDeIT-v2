var slider = document.querySelector('div.scrolling-wrapper');
var card = document.querySelector('div.scrolling-wrapper div.card');
var cardMargin = window.getComputedStyle(card).marginRight;
var autoScrollLength = card.offsetWidth + Number(cardMargin.slice(0, -2)) * 2;

window.addEventListener('load', function () {
    var max = 0, cycles = 0;
    cardSlide('right');
    cardSlide('left');
    setInterval(function () {
        if (slider.scrollLeft - autoScrollLength !== max && cycles === 0) {
            max = slider.scrollLeft - autoScrollLength;
        } else {
            if (cycles === 0)
                cycles++;
            slider.scrollLeft = 0;
        }
        computeScrollPos('right');
    }, 5000);
});

function cardSlide(dir) {
    var dirBtn;
    if (dir === 'right') {
        dirBtn = document.querySelector('i.fa-chevron-circle-right');
    } else if (dir === 'left') {
        dirBtn = document.querySelector('i.fa-chevron-circle-left');
    }
    dirBtn.addEventListener('click', function (e) {
        e.preventDefault();
        computeScrollPos(dir);
    });
}

function computeScrollPos(dir) {
    if (dir === 'right') {
        slider.scrollLeft = slider.scrollLeft + autoScrollLength;
    } else if (dir === 'left') {
        slider.scrollLeft = slider.scrollLeft - autoScrollLength;
    }
}