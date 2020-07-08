<footer>
    <?php include 'contact.php' ?>
    <!-- navbar position control -->
    <script src="public/scripts/navbar.js"></script>
    <?php
    if ($route === 'index') echo '<script src="public/scripts/hero-bg.js"></script>';
    ?>
    <!-- jquery v3.4.1 -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- bootstrap js v4.3.1 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
    if ($route === 'index') {
        echo '<script src="public/scripts/navanimation.js"></script>';
        echo '<script src="public/scripts/slider.js"></script>';
        echo '<script src="public/scripts/carousel.js"></script>';
    }
    ?>
    <script src="public/scripts/progress-tracker.js"></script>
    <script src="public/scripts/post.js"></script>
</footer>