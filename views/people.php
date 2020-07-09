<?php
$route = 'people';
include 'partials/header.php';
$people = file_get_contents('public/json/people.json', true);
$people = json_decode($people, true);
?>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <div class="container text-center mb-5 py-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <div class="pt-5">
                <h3 class="text-sea-buckthorn">BEHIND THE SCENES</h3>
                <h1>The People</h1>
                <p class="w-100 w-md-75 w-lg-50 mx-auto">Developing excellent concepts that are manufacturable and meet your business requirements.
                </p>
            </div>
        </header>
        <div class="row row-cols-1 row-cols-lg-2 my-5 pb-5">
            <?php for ($i = 0; $i < count($people['directors']); $i++) { ?>
                <div class="col mb-5 my-lg-0">
                    <div class="card border-0 px-1 py-3 p-sm-5 mx-2 ml-lg-3 ml-xl-5 shadow h-100">
                        <img src="<?php echo $people['directors'][$i]['image'] ?>" class="card-img-top rounded-circle img-fluid w-50 mx-auto" alt="<?php echo $people['directors'][$i]['name'] ?>">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $people['directors'][$i]['name'] ?></h6>
                            <p class="card-text text-left"><?php echo $people['directors'][$i]['description'] ?></p>
                        </div>
                        <div class="card-footer social text-center bg-white border-0">
                            <a href="" target="_blank" class="text-sea-buckthorn fa-lg pr-3"><i class="fab fa-linkedin-in"></i></a>
                            <a href="" target="_blank" class="text-sea-buckthorn fa-lg border-left border-secondary px-3"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <section class="pt-5">
            <h1>Strategic Advsiory Board</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center my-5">
                <?php include 'partials/people-card.php'; ?>
            </div>
        </section>
    </div>

    <?php include 'partials/footer.php'; ?>
</body>

</html>