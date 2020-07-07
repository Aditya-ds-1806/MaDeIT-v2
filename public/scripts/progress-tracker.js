window.addEventListener('load', function () {
    setPageProgress();
    window.onscroll = function () {
        setPageProgress();
    }
});

function setPageProgress() {
    var scrollYMax = document.body.scrollHeight - window.innerHeight;
    document.querySelector('div.progress-bar').setAttribute('style', 'width:' + (window.scrollY / scrollYMax) * 100 + "%");
}