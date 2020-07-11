<?php
include 'partials/header.php';
$startups = file_get_contents('public/json/startups.json', true);
$startups = json_decode($startups, true);
?>

<style>
    a.btn-outline-mountain-meadow.active {
        color: #FFF;
        background-color: rgb(20, 167, 157);
    }

    .dropdown-item:hover {
        background-color: rgb(247, 152, 39, 0.4);
    }

    .dropdown-item.active,
    .dropdown-item:active {
        background-color: rgb(247, 152, 39);
    }

    header {
        z-index: 100 !important;
    }
</style>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <section class="container-fluid bg-wild-sand text-center">
        <header class="container-fluid d-inline-block text-center mt-5 sticky-top">
            <h1>Startups</h1>
            <div class="py-5">
                <div class="dropdown container text-right">
                    <button class="btn btn-sea-buckthorn text-white dropdown-toggle text-right shadow rounded-pill" type="button" id="dropdownMenuButton" data-toggle="dropdown">IOT<i class="fas fa-filter pl-3"></i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php for ($i = 0; $i < count($startups['tags']); $i++) { ?>
                            <?php $tag = str_replace([' ', '/'], '-', $startups['tags'][$i]) ?>
                            <?php $id = $startups["tags"][$i] ?>
                            <a class="dropdown-item" id="<?php echo $tag; ?>" href="<?php echo "#$tag-tab" ?>" data-toggle="tab" role="tab">
                                <?php echo ucfirst($startups['tags'][$i]) ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </header>
        <div class="container text-left">
            <div class="tab-content" id="pills-tabContent">
                <?php for ($j = 0; $j < count($startups['tags']); $j++) { ?>
                    <?php $tag = $startups['tags'][$j]; ?>
                    <div class="tab-pane fade<?php if ($j === 0) echo ' show active' ?>" id="<?php echo str_replace([' ', '/'], '-', $startups['tags'][$j]) . "-tab" ?>" role="tabpanel">
                        <?php if ($j > 6) {
                            unset($tag);
                            $status = $startups['tags'][$j];
                        } ?>
                        <?php include 'partials/startup-card.php' ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-wild-sand text-center pb-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <div class="pt-5">
                <h1>Seed Support</h1>
            </div>
        </header>
        <div class="container text-left pb-5">
            <?php $tag = 'seed'; ?>
            <?php include 'partials/startup-card.php' ?>
        </div>
    </section>
    <?php include 'partials/footer.php' ?>
    <script>
        $('a[data-toggle="tab"]').on('shown.bs.tab', function() {
            this.classList.remove('active');
        });
        $('a[data-toggle="tab"]').on('click', function() {
            $('button[data-toggle="dropdown"]').html($.trim(this.text) + '<i class="fas fa-filter pl-3"></i>');
        });
    </script>
</body>

</html>