const wrapper = document.querySelectorAll('div.scrolling-wrapper');
var card = document.querySelectorAll('div.scrolling-wrapper div.card')[2];
var prevCard = document.querySelectorAll('div.scrolling-wrapper div.card')[1];
var left = document.querySelector('span.fa-chevron-circle-left');
var right = document.querySelector('span.fa-chevron-circle-right');

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