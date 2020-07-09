<?php
$route = 'index';
$len = 6;
include 'partials/header.php';

$startups = file_get_contents('public/json/startups.json', true);
$startups = json_decode($startups, true);

$programs = file_get_contents('public/json/programs.json', true);
$programs = json_decode($programs, true);

$incubation = file_get_contents('public/json/incubation.json', true);
$incubation = json_decode($incubation, true);

$events = file_get_contents('public/json/events.json', true);
$events = json_decode($events, true);
?>


<body>
    <!-- 1. Hero Div and Navbar -->
    <?php include 'partials/navbar.php' ?>
    <header class="container-fluid hero-image pt-4">
        <div class="container hero-text text-left text-sm-center">
            <h1 class="display-4 w-50 w-sm-100">Believe. Design. Leap.</h1>
            <p class="d-block my-3 w-75 w-sm-100">MaDeIT is a Design Driven Technology Business Incubator to help startups</p>
            <a href="#story" class="btn btn-mountain-meadow text-white" data-toggle="modal" data-target="#exampleModal">Watch Our Story</a>
        </div>
        <div class="social position-absolute mr-5 hero-social">
            <a href="https://twitter.com/MaDeITInnovati1" target="_blank" class="text-white d-block mb-4"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="https://www.facebook.com/madeit.iiitdm.kancheepuram/" target="_blank" class="text-white d-block my-4"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="https://in.linkedin.com/in/madeit-innovation-foundation-066b74193" target="_blank" class="text-white d-block mb-4"><i class="fab fa-linkedin-in fa-lg"></i></a>
        </div>
    </header>


    <!-- 2. Statistics -->
    <section class="container-fluid stats bg-sea-buckthorn text-white text-center py-5" id="story">
        <div class="container-lg my-5">
            <p class="w-100 w-md-75 w-lg-50 mx-auto p-4">Developing excellent concepts that are manufacturable and meet your business
                requirements.</p>
            <div class="row mx-0">
                <div class="col-12 col-md-4">
                    <h1 class="display-3">25</h1>
                    <p class="font-weight-bold">STARTUPS</p>
                </div>
                <div class="col-12 col-md-4">
                    <h1 class="display-3">&#8377 2 Cr</h1>
                    <p class="font-weight-bold">FUNDS RAISED</p>
                </div>
                <div class="col-12 col-md-4">
                    <h1 class="display-3">11</h1>
                    <p class="font-weight-bold">LOREM IPSUM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. About -->
    <section class="container-fluid position-relative py-5 px-0" id="about">
        <div class="container text-center mt-5 py-5">
            <h5 class="text-sea-buckthorn">OUR STORY</h5>
            <h2>About MaDeIT</h2>
            <p class="my-4">MaDeIT Innovation Foundation is a non-profit Section 8 company under the Companies Act, 2013. It is a
                design-driven Technology Business Incubator promoted by the Indian Institute of Information Technology
                Design and Manufacturing Kancheepuram, an institution of national importance fully funded by the Ministry of
                Human Resource Development, Govt. of India. MaDeIT Innovation Foundation is supported by a grant from the
                Department of Science and Technology (NSTEDB Division), Govt. of India. MaDeIT intends build on IIITDM's
                core capability (IT enabled Design and Manufacturing) to encourage design-driven startups, largely in the
                manufacturing, healthcare and transportation sectors. It will support startups from IIITDM's students,
                faculty and the wider ecosystem
            </p>
            <a href="people" class="btn btn-sea-buckthorn text-white">Know More</a>
        </div>
        <div class="container-fluid px-0 my-5 py-5">
            <div class="row m-0">
                <?php include 'partials/carousel.php' ?>
            </div>
        </div>
    </section>

    <!-- 4. What we have built -->
    <section class="container-fluid bg-wild-sand text-center py-5" id="portfolio">
        <header class="mt-5 pt-5">
            <h2>What we have built</h2>
            <p class="w-100 w-md-75 w-lg-50 mx-auto">Developing excellent concepts that are manufacturable and meet your business
                requirements.</p>
            <ul class="nav nav-pills justify-content-center my-5" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="btn btn-outline-mountain-meadow active px-sm-4 py-sm-2 mr-3" id="ongoing" data-toggle="pill" href="#ongoing-tab" role="tab">Ongoing</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 ml-3" id="graduated" data-toggle="pill" href="#graduated-tab" role="tab">Graduated</a>
                </li>
            </ul>
        </header>
        <div class="container text-center mb-5 pb-5">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="ongoing-tab" role="tabpanel">
                    <?php $status = 'ongoing';
                    include 'partials/startup-card.php'; ?>
                </div>
                <div class="tab-pane fade" id="graduated-tab" role="tabpanel">
                    <?php $status = 'graduated';
                    include 'partials/startup-card.php'; ?>
                </div>
            </div>
            <a href="portfolio" class="btn btn-outline-emperor px-4 pb-2 mt-5">View more</a>
        </div>
    </section>

    <!-- 5. The Magic -->
    <section class="container-fluid px-0 py-5 px-0">
        <div class="row align-items-center pt-5 mt-5 mr-0">
            <div class="col-md-6 col-lg-5 col-xl-6 px-5 pl-md-0">
                <img src="public/images/carousel/1.jpg" class="img-fluid w-100">
            </div>
            <div class="col-md-6 col-lg-7 col-xl-5 px-5 mt-5 mt-md-0">
                <h4 class="text-sea-buckthorn">THE MAGIC</h4>
                <h2>What MaDeIT is sample text</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-3 pl-0">Developing Excellent concepts that are manufacturable and meet your business requirements.
                    </li>
                    <li class="list-group-item py-3 pl-0">Availability of Design-Oriented Engineering interns (products of IIITDM's unique curriculum).
                    </li>
                    <li class="list-group-item py-3 pl-0">Access to Design studio with Rapid prototyping, Manufacturing and Measurement tools.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 6. Incubation Process -->
    <section class="container mt-5 py-5">
        <div class="container-fluid pb-5 mb-5">
            <h4 class="text-sea-buckthorn">INCUBATION PROCESS</h4>
            <h2>How does it happen?</h2>
            <p class="w-100 w-md-50">Developing excellent concepts that are manufacturable and meet your business</p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                <?php include 'partials/incubation-card.php' ?>
            </div>
        </div>
    </section>

    <!-- 7. Programmes -->
    <section class="container-fluid bg-wild-sand mb-5 py-5" id="programmes">
        <div class="container py-5 my-5">
            <div class="text-center">
                <h2>Programmes</h2>
                <p>Developing excellent concepts that are manufacturable and meet your business</p>
            </div>
            <div class="position-relative mt-5">
                <?php include 'partials/program-cards.php' ?>
                <i class="fa fa-chevron-circle-left rounded-circle position-absolute text-mountain-meadow bg-white fa-3x"></i>
                <i class="fa fa-chevron-circle-right rounded-circle position-absolute text-mountain-meadow bg-white fa-3x"></i>
            </div>
        </div>
    </section>

    <!-- 8. News and Events -->
    <section class="container-fluid text-center mx-auto py-5 my-5" id="news">
        <h2 class="my-4">News and Events</h2>
        <p class="w-50 mx-auto">Developing excellent concepts that are manufacturable and meet your business</p>
        <div class="container mb-4">
            <?php include 'partials/news-card.php' ?>
            <a href="news" class="btn btn-outline-emperor text-center px-4 py-2">View more</a>
        </div>
    </section>

    <!-- 9. Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" data-backdrop="static" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row justify-content-center mx-0">
                        <div class="embed-responsive embed-responsive-16by9 col-12 m-3">
                            <iframe id="ytstory" src="https://www.youtube.com/embed/AXh3f6fjxY0?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0" allowscriptaccess="always" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 10. Footer -->
    <?php include 'partials/footer.php' ?>
</body>

</html>