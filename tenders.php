<?php
$route = 'people';
include 'partials/header.php';
$tender = file_get_contents('json/tender.json', true);
$tender = json_decode($tender, true);
?>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <section class="container">
        <header class="container-fluid d-inline-block text-center mt-5">
            <h1 class="pt-5">Tenders</h1>
        </header>
        <div class="container-fluid mb-5 pb-5 text-center">
            <?php include 'partials/tender.php' ?>
        </div>
    </section>


    <?php include 'partials/footer.php' ?>
</body>

</html>