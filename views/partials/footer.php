<footer class="fixed-bottom" style="z-index:-1">
    <?php include 'contact.php' ?>
    <!-- jquery v3.4.1 -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- bootstrap js v4.3.1 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- other scripts -->
    <?php if ($route === 'index') { ?>
        <script src="public/scripts/navbar.js"></script>
        <script src="public/scripts/hero-bg.js"></script>
        <script src="public/scripts/navanimation.js"></script>
        <script src="public/scripts/slider.js"></script>
        <script src="public/scripts/carousel.js"></script>
        <script>
            $('#exampleModal').on('hide.bs.modal', e => $('#ytstory')[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*'));
        </script>
    <?php } ?>
    <script src="public/scripts/footer.js"></script>
    <script src="public/scripts/progress-tracker.js"></script>
    <script src="public/scripts/post.js"></script>
</footer>