<?php
$route = 'people';
include 'partials/header.php';
$events = file_get_contents('public/json/events.json', true);
$events = json_decode($events, true);
?>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <section class="container pt-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <div class="pt-5">
                <h1>News and Events</h1>
                <p class="w-100 w-md-75 w-lg-50 mx-auto mt-4">Developing Excellent concepts that are manufacturable and meet your business requirements.</p>
            </div>
        </header>
        <div class="container-fluid my-5 pb-5 text-center">
            <ul class="list-group list-group-flush text-left py-5">
                <?php for ($i = 0; $i < count($events); $i++) { ?>
                    <?php if ($events[$i]['isNew']) { ?>
                        <li class="list-group-item bg-wild-sand pl-0 pt-4">
                            <h5 class="text-sea-buckthorn"><?php echo $events[$i]['title'] ?><span class="badge bg-sea-buckthorn text-white float-right">New</span></h5>
                            <p><?php echo $events[$i]['description'] ?></p>
                        </li>
                    <?php } else { ?>
                        <li class="list-group-item bg-wild-sand pl-0 pt-4">
                            <h5 class="text-sea-buckthorn"><?php echo $events[$i]['title'] ?></h5>
                            <p><?php echo $events[$i]['description'] ?></p>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </section>
    <?php include 'partials/footer.php' ?>
</body>

</html>