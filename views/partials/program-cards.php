<div class="scrolling-wrapper">
    <?php for ($i = 0; $i < count($programs); $i++) { ?>
        <div class="card bg-white text-white w-100 w-sm-50 w-lg-25 border-0 <?php if ($i === 0) { ?>mr-4<?php } elseif ($i === count($programs) - 1) { ?>ml-4<?php } else { ?>mx-4<?php } ?>">
            <img src="<?php echo $programs[$i]['image'] ?>" class="card-img-top border-0 m-0" alt="<?php echo $programs[$i]['program'] ?>">
            <div class="card-body rounded text-dark">
                <h5 class="card-title"><?php echo $programs[$i]['program'] ?></h5>
                <p class="card-text"><?php echo $programs[$i]['description'] ?></p>
            </div>
        </div>
    <?php } ?>
</div>