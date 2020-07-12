resolveStickyFooter();

window.addEventListener('resize', function (e) {
    e.preventDefault();
    resolveStickyFooter();
});

function resolveStickyFooter() {
    var footerHeight = getFooterHeight();
    if (footerHeight < window.innerHeight) {
        document.querySelector('footer').classList.add('fixed-bottom');
        document.body.style.marginBottom = `${footerHeight}px`;
    } else {
        document.querySelector('footer').classList.remove('fixed-bottom');
    document.body.style.marginBottom = 0;
    }
}

function getFooterHeight() {
    return document.querySelector('footer').offsetHeight;
}