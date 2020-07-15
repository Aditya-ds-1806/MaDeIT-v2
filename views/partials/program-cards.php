<div class="card-group scrolling-wrapper">
    <?php for ($i = 0; $i < count($programs); $i++) { ?>
        <div class="card shadow-sm bg-white text-white w-100 w-sm-50 w-lg-33 border-0 <?php if ($i === 0) { ?>mr-4<?php } elseif ($i === count($programs) - 1) { ?>ml-4<?php } else { ?>mx-4<?php } ?>">
            <img loading="lazy" src="<?php echo $programs[$i]['image'] ?>" class="card-img-top border-0 m-0" alt="<?php echo $programs[$i]['program'] ?>">
            <div class="card-body rounded text-dark">
                <h5 class="card-title"><?php echo $programs[$i]['program'] ?></h5>
                <p class="card-text"><?php echo $programs[$i]['description'] ?></p>
            </div>
            <div class="card-footer bg-white border-0">
                <a href="<?php echo $programs[$i]['url'] ?>" class="btn btn-sm text-white btn-mountain-meadow">Know more</a>
            </div>
        </div>
    <?php } ?>
</div>