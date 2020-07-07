<div class="row row-cols-1 row-cols-md-3 my-5">
    <?php for ($j = 0; $j < min(count($events), $len); $j++) { ?>
        <div class="col mb-4">
            <div class="card border-mountain-meadow text-left h-100">
                <div class="card-body">
                    <a href="<?php echo $events[$j]['href'] ?>">
                        <h5 class="card-title text-dark"><?php echo $events[$j]['title'] ?>
                            <?php if ($events[$j]['isNew']) echo '<span class="badge bg-mountain-meadow text-white float-right">New</span>' ?>
                        </h5>
                    </a>
                    <p class="card-text"><?php echo $events[$j]['description'] ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>