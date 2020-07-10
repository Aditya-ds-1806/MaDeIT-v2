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
</style>

<body class="bg-wild-sand">
    <?php include 'partials/navbar.php' ?>
    <section class="container-fluid bg-wild-sand text-center p-5">
        <header class="container-fluid d-inline-block text-center mt-5">
            <div class="pt-5">
                <h1>What we have built</h1>
                <p class="w-100 w-md-75 w-lg-50 mx-auto mt-4">Developing excellent concepts that are manufacturable and meet your business
                    requirements.</p>
                <ul class="nav nav-pills justify-content-center my-5" id="pills-tab" role="tablist">
                    <?php for ($i = 0; $i < count($startups['tags']); $i++) { ?>
                        <?php $tag = str_replace(' ', '-', $startups['tags'][$i]) ?>
                        <li class="nav-item">
                            <a class="btn btn-outline-mountain-meadow <?php if ($i === 0) echo 'active' ?> px-sm-4 py-sm-2 mx-4 my-2" id="<?php echo str_replace(' ', '-', $tag); ?>" data-toggle="pill" href="<?php echo "#$tag-tab" ?>" role="tab"><?php echo $startups["tags"][$i] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </header>
        <div class="container text-left pb-5">
            <div class="tab-content" id="pills-tabContent">
                <?php for ($j = 0; $j < count($startups['tags']); $j++) { ?>
                    <?php $tag = $startups['tags'][$j]; ?>
                    <div class="tab-pane fade<?php if ($j === 0) echo ' show active' ?>" id="<?php echo str_replace(' ', '-', $startups['tags'][$j]) . "-tab" ?>" role="tabpanel">
                        <?php include 'partials/startup-card.php' ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include 'partials/footer.php' ?>
</body>

</html>