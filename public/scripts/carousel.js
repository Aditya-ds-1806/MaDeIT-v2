var carousel = document.querySelector("#about > div.container-fluid.px-0.my-5.py-5 > div");
window.addEventListener('load', function (e) {
    e.preventDefault();
    var options = {
        interval: 5000,
        keyboard: false,
        pause: false,
        touch: false
    };
    for (let i = 0; i < 3; i++) {
        $('#carousel' + (i + 1)).carousel(options);
        $('#carousel' + (i + 1)).carousel('cycle');
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