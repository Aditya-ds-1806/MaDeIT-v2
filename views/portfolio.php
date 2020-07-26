<?php
include 'partials/header.php';
$startups = file_get_contents('public/json/startups.json', true);
$startups = json_decode($startups, true);

function companyExists($param1, $value1, $param2, $value2, $startups)
{
    for ($j = 0; $j < count($startups['companies']); $j++) {
        $company = $startups['companies'][$j];
        if ($company[$param1] === $value1 && $company[$param2] === $value2) return true;
    }
    return false;
}
?>

<style>
    a.btn-outline-mountain-meadow.active {
        color: #FFF;
        background-color: rgb(20, 167, 157);
    }

    .dropdown-item:hover {
        background-color: rgb(20, 167, 157, 0.4);
    }

    .dropdown-item.active,
    .dropdown-item:active {
        background-color: rgb(20, 167, 157);
    }

    button[data-toggle="dropdown"] {
        box-shadow: 0 .5rem 1rem rgb(20, 167, 157, 0.3) !important;
    }

    header {
        z-index: 1 !important;
    }

    .transparent {
        opacity: 0;
    }
</style>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <section class="container-fluid bg-wild-sand py-5 px-0 text-sm-center mt-5">
        <h1 class="text-center">Portfolio</h1>
        <ul class="nav nav-pills justify-content-center my-5" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="btn btn-outline-mountain-meadow active px-sm-4 py-sm-2 m-1 m-sm-2" id="ongoing" data-toggle="pill" href="#ongoing-tab" role="tab">Ongoing</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 m-1 m-sm-2" id="graduated" data-toggle="pill" href="#graduated-tab" role="tab">Graduated</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 m-1 m-sm-2" id="seed" data-toggle="pill" href="#seed-tab" role="tab">Seed Support</a>
            </li>
        </ul>

        <div class="container text-center mb-5 pb-5">
            <hr class="border-0" style="height: 2px; background-image: linear-gradient(to right, rgba(108, 117, 125, 0), rgba(108, 117, 125, 0.75), rgba(108, 117, 125, 0));">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="ongoing-tab" role="tabpanel">
                    <?php
                    $param1 = 'tag';
                    $param2 = 'status';
                    $value2 = 'ongoing';
                    $suffix = 'ongoing-tab';
                    ?>
                    <div class="tab-content">
                        <?php include('partials/tab.php') ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="graduated-tab" role="tabpanel">
                    <?php
                    $param1 = 'tag';
                    $param2 = 'status';
                    $value2 = 'graduated';
                    $suffix = 'graduated-tab'
                    ?>
                    <div class="tab-content">
                        <?php include('partials/tab.php') ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="seed-tab" role="tabpanel">
                    <?php
                    $param1 = 'tag';
                    $param2 = 'seedSupport';
                    $value2 = true;
                    $suffix = 'seed-tab';
                    ?>
                    <div class="tab-content">
                        <?php include('partials/tab.php') ?>
                    </div>
                </div>
                <a href="portfolio" class="btn btn-outline-emperor px-4 pb-2 mt-5">View more</a>
            </div>
    </section>

    <?php include 'partials/footer.php' ?>
    <script>
        $('a[data-toggle="tab"]').on('shown.bs.tab', function() {
            this.classList.remove('active');
        });
        $('a[data-toggle="tab"]').on('click', function() {
            $('button[data-toggle="dropdown"]').html($.trim(this.text) + '<span class="fas filter pl-3"></span>');
        });
    </script>
</body>

</html>