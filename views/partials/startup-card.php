<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center text-left">
    <?php if (isset($tag)) { ?>
        <?php for ($i = 0; $i < count($startups['ongoing']); $i++) { ?>
            <?php if ($tag === $startups['ongoing'][$i]['tag']) { ?>
                <div class="col p-0 mb-5 mb-sm-0 p-sm-4">
                    <div class="card shadow border-0 p-3 h-100">
                        <div>
                            <span class="badge bg-mountain-meadow text-white position-absolute p-2 m-3" style="top: 10px; right:10px"><?php echo $startups['ongoing'][$i]['tag'] ?></span>
                        </div>
                        <a href="<?php echo $startups['ongoing'][$i]['website'] ?>"><img src="<?php echo $startups['ongoing'][$i]['logo'] ?>" class="card-img-top" alt="<?php echo $startups['ongoing'][$i]['name'] ?>" height="200px"></a>
                        <div class="card-body">
                            <h5 class="card-title text-mountain-meadow mb-0"><?php echo $startups['ongoing'][$i]['name'] ?></h5>
                            <p class="card-text"><?php echo $startups['ongoing'][$i]['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>

        <?php for ($i = 0; $i < count($startups['graduated']); $i++) { ?>
            <?php if ($tag === $startups['graduated'][$i]['tag']) { ?>
                <div class="col p-0 mb-5 mb-sm-0 p-sm-4">
                    <div class="card shadow border-0 p-3 h-100">
                        <div>
                            <span class="badge bg-mountain-meadow text-white position-absolute p-2 m-3" style="top: 10px; right:10px"><?php echo $startups['graduated'][$i]['tag'] ?></span>
                        </div>
                        <a href="<?php echo $startups['graduated'][$i]['website'] ?>"><img src="<?php echo $startups['graduated'][$i]['logo'] ?>" class="card-img-top" alt="<?php echo $startups['graduated'][$i]['name'] ?>" height="200px"></a>
                        <div class="card-body">
                            <h5 class="card-title text-mountain-meadow mb-0"><?php echo $startups['graduated'][$i]['name'] ?></h5>
                            <p class="card-text"><?php echo $startups['graduated'][$i]['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } else { ?>
        <?php
        if ($len === 'full') $l = count($startups[$status]) - 1;
        else $l = min(count($startups[$status]), $len) - 1
        ?>
        <?php for ($i = 0; $i <= $l; $i++) { ?>
            <div class="col p-0 mb-5 mb-sm-0 p-sm-4">
                <div class="card shadow border-0 p-3 h-100">
                    <div>
                        <span class="badge bg-mountain-meadow text-white position-absolute p-2 m-3" style="top: 10px; right:10px"><?php echo $startups[$status][$i]['tag'] ?></span>
                    </div>
                    <a href="<?php echo $startups[$status][$i]['website'] ?>"><img src="<?php echo $startups[$status][$i]['logo'] ?>" class="card-img-top" alt="<?php echo $startups[$status][$i]['name'] ?>" height="200px"></a>
                    <div class="card-body">
                        <h5 class="card-title text-mountain-meadow mb-0"><?php echo $startups[$status][$i]['name'] ?></h5>
                        <p class="card-text"><?php echo $startups[$status][$i]['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>