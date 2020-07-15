<?php
$route = 'people';
include 'partials/header.php';
$events = file_get_contents('public/json/events.json', true);
$events = json_decode($events, true);
?>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <section class="container-fluid bg-wild-sand py-5 px-0">
        <section class="container mt-5">
            <header class="container-fluid d-inline-block text-center">
                <div>
                    <h1>News and Events</h1>
                </div>
            </header>
            <div class="container-fluid my-5 pb-5 text-center">
                <ul class="list-group list-group-flush text-left py-5">
                    <?php for ($i = 0; $i < count($events); $i++) { ?>
                        <li class="list-group-item bg-wild-sand pl-0 pt-4">
                            <a href="<?php echo $events[$i]['href'] ?>" class="href">
                                <h5 class="text-sea-buckthorn"><?php echo $events[$i]['title'] ?>
                                    <?php if ($events[$i]['isNew']) { ?>
                                        <span class="badge bg-sea-buckthorn text-white float-right">New</span>
                                    <?php } ?>
                                </h5>
                            </a>
                            <p><?php echo $events[$i]['description'] ?></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </section>
    <?php include 'partials/footer.php' ?>
</body>

</html>