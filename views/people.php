<?php
include 'partials/header.php';
$people = file_get_contents('public/json/people.json', true);
$people = json_decode($people, true);
?>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <section class="container-fluid position-relative py-5 px-0 bg-wild-sand" id="about">
        <div class="container text-center mt-5">
            <h5 class="text-sea-buckthorn">OUR STORY</h5>
            <h1>About MaDeIT</h1>
            <p class="my-4 lh-30px">MaDeIT Innovation Foundation is a non-profit Section 8 company under the Companies Act, 2013. It is a
                design-driven Technology Business Incubator promoted by the Indian Institute of Information Technology
                Design and Manufacturing Kancheepuram, an institution of national importance fully funded by the Ministry of
                Human Resource Development, Govt. of India. MaDeIT Innovation Foundation is supported by a grant from the
                Department of Science and Technology (NSTEDB Division), Govt. of India. MaDeIT intends build on IIITDM's
                core capability (IT enabled Design and Manufacturing) to encourage design-driven startups, largely in the
                manufacturing, healthcare and transportation sectors. It will support startups from IIITDM's students,
                faculty and the wider ecosystem.
            </p>
        </div>
    </section>
    <section class="container-fluid bg-wild-sand">
        <div class="container text-center mb-5 pb-5">
            <header class="container-fluid d-inline-block text-center">
                <div>
                    <h5 class="text-sea-buckthorn">BEHIND THE SCENES</h5>
                    <h1>The People</h1>
                </div>
            </header>
            <div class="row row-cols-1 row-cols-lg-2 my-5 pb-5">
                <?php for ($i = 0; $i < count($people['directors']); $i++) { ?>
                    <div class="col mb-5 my-lg-0">
                        <div class="card border-0 px-1 py-3 p-sm-5 mx-2 ml-lg-3 ml-xl-5 shadow h-100">
                            <img loading="lazy" alt="<?php echo $people['directors'][$i]['name'] ?>" src="<?php echo "public/images/people/" . $people['directors'][$i]['fileName'] ?>" class="card-img-top rounded-circle img-fluid w-50 mx-auto" alt="<?php echo $people['directors'][$i]['name'] ?>">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $people['directors'][$i]['name'] ?></h6>
                                <p class="card-text text-justify"><?php echo $people['directors'][$i]['description'] ?></p>
                            </div>
                            <div class="card-footer text-left bg-white border-0">
                                <a href="#" rel="noreferrer" target="_blank" class="linkedin text-sea-buckthorn fa-lg pr-3 border-right"></a>
                                <a href="#" rel="noreferrer" target="_blank" class="facebook text-sea-buckthorn text-left fa-lg border-left px-3"></a>
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
    </section>
    <?php include 'partials/footer.php'; ?>
</body>

</html>