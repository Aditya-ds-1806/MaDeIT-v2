<?php
if (isset($tag)) {
    $param = $tag;
    $length = count($startups['companies']);
    $var = 'tag';
    $count = -100;
} else {
    $param = $status;
    $length = count($startups['companies']);
    $var = 'status';
    $count = 0;
}
?>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center text-left">
    <?php for ($i = 0; $i < $length; $i++) { ?>
        <?php if ($param === $startups['companies'][$i][$var] && $count < 6) { ?>
            <div class="col p-0 mb-5 mb-sm-0 p-sm-4">
                <div class="card shadow border-0 p-3 h-100">
                    <div>
                        <span class="badge bg-mountain-meadow text-white position-absolute p-2 m-3" style="top: 10px; right:10px"><?php echo $startups['companies'][$i]['tag'] ?></span>
                    </div>
                    <a href="<?php echo $startups['companies'][$i]['website'] ?>"><img src="<?php echo $startups['companies'][$i]['logo'] ?>" class="card-img-top" alt="<?php echo $startups['companies'][$i]['name'] ?>" height="200px"></a>
                    <div class="card-body">
                        <h5 class="card-title text-mountain-meadow mb-0"><?php echo $startups['companies'][$i]['name'] ?></h5>
                        <p class="card-text"><?php echo $startups['companies'][$i]['description'] ?></p>
                    </div>
                </div>
            </div>

        <?php $count++;
        } ?>
    <?php } ?>
</div>