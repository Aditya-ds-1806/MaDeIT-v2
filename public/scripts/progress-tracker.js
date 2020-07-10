window.addEventListener('load', function () {
    setPageProgress();
    window.onscroll = setPageProgress;
});

function setPageProgress() {
    if (document.querySelector('footer').offsetHeight < window.innerHeight)
        var scrollYMax = document.body.scrollHeight - window.innerHeight + document.querySelector('footer').offsetHeight - 48;
    else var scrollYMax = document.body.scrollHeight - window.innerHeight;
    document.querySelector('div.progress-bar').setAttribute('style', 'width:' + (window.scrollY / scrollYMax) * 100 + "%");
}