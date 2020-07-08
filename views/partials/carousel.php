<!-- Please use images with aspect ratio 3:2 ONLY (width:height = 3:2) -->
<?php for ($i = 0; $i < 3; $i++) { ?>
    <?php $last = ($i === 2) ?>
    <div class="<?php if ($i === 0) { ?>col-sm-6 col-lg-4<?php } ?>
                <?php if ($i === 1) { ?>col-sm-6 col-lg-4 d-none d-sm-block<?php } ?>
                <?php if ($i === 2) { ?>col-4 d-none d-lg-block<?php } ?> border border-white px-0">
        <div id="carousel<?php echo $i+1 ?>" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item <?php if ($i === 0) { ?>active<?php } ?>">
                    <img src="public/images/carousel/1.jpg" class="img-fluid d-block w-100">
                </div>
                <div class="carousel-item <?php if ($i === 1) { ?> active<?php } ?>">
                    <img src="public/images/carousel/2.jpg" class="img-fluid d-block w-100">
                </div>
                <div class="carousel-item <?php if ($i === 2) { ?>active<?php } ?>">
                    <img src="public/images/carousel/3.png" class="img-fluid d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/334/223?random=1" class="img-fluid d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/3000/2000?random=2" class="img-fluid d-block w-100">
                </div>
            </div>
        </div>
    </div>
<?php } ?>