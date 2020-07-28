<?php
$count = 0;
$length = count($startups['companies']);
if (isset($max)) $max = min($max, $length);
?>

<?php if (isset($param1) && isset($param2) && isset($value1) && isset($value2)) { ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center text-left">
        <?php for ($j = 0; $j < $length; $j++) { ?>
            <?php if ($startups['companies'][$j][$param1] === $value1 && $startups['companies'][$j][$param2] === $value2) { ?>
                <div class="col p-0 mb-5 mb-sm-0 p-sm-4">
                    <div class="card shadow border-0 p-3 h-100">
                        <div>
                            <span class="badge bg-mountain-meadow text-white position-absolute p-2 m-3" style="top: 10px; right:10px"><?php echo $startups['companies'][$j]['tag'] ?></span>
                        </div>
                        <img loading="lazy" src="<?php echo "public/images/startups/" . $startups['companies'][$j]['status'] . "/" . $startups['companies'][$j]['fileName'] ?>" class="card-img-top" alt="<?php echo $startups['companies'][$j]['name'] ?>" height="200px">
                        <div class="card-body">
                            <h5 class="card-title text-mountain-meadow mb-0"><?php echo $startups['companies'][$j]['name'] ?></h5>
                            <p class="text-left text-emperor font-weight-bolder"><?php echo "Status: " . ucfirst($startups['companies'][$j]['status']) ?></p>
                            <p class="card-text"><?php echo $startups['companies'][$j]['description'] ?></p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <?php if ($startups['companies'][$j]['website'] !== "") { ?>
                                <a rel="noreferrer" class="btn btn-sm btn-mountain-meadow text-white globe" href="<?php echo $startups['companies'][$j]['website'] ?>" target="_blank">Visit Website</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
<?php } else if (isset($status)) { ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center text-left">
        <?php for ($j = 0; $j < $length; $j++) { ?>
            <?php if ($startups['companies'][$j]['status'] === $status) { ?>
                <div class="col p-0 mb-5 mb-sm-0 p-sm-4">
                    <div class="card shadow border-0 p-3 h-100">
                        <div>
                            <span class="badge bg-mountain-meadow text-white position-absolute p-2 m-3" style="top: 10px; right:10px"><?php echo $startups['companies'][$j]['tag'] ?></span>
                        </div>
                        <img loading="lazy" src="<?php echo "public/images/startups/" . $startups['companies'][$j]['status'] . "/" . $startups['companies'][$j]['fileName'] ?>" class="card-img-top" alt="<?php echo $startups['companies'][$j]['name'] ?>" height="200px">
                        <div class="card-body">
                            <h5 class="card-title text-mountain-meadow mb-0"><?php echo $startups['companies'][$j]['name'] ?></h5>
                            <p class="text-left text-emperor font-weight-bolder"><?php echo "Status: " . ucfirst($startups['companies'][$j]['status']) ?></p>
                            <p class="card-text"><?php echo $startups['companies'][$j]['description'] ?></p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <?php if ($startups['companies'][$j]['website'] !== "") { ?>
                                <a rel="noreferrer" class="btn btn-sm btn-mountain-meadow text-white globe" href="<?php echo $startups['companies'][$j]['website'] ?>" target="_blank">Visit Website</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php $count++;
                if ($count === 6 && isset($max)) break; ?>
            <?php } ?>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center text-left">
        <?php for ($j = 0; $j < $length; $j++) { ?>
            <div class="col p-0 mb-5 mb-sm-0 p-sm-4">
                <div class="card shadow border-0 p-3 h-100">
                    <div>
                        <span class="badge bg-mountain-meadow text-white position-absolute p-2 m-3" style="top: 10px; right:10px"><?php echo $startups['companies'][$j]['tag'] ?></span>
                    </div>
                    <img loading="lazy" src="<?php echo "public/images/startups/" . $startups['companies'][$j]['status'] . "/" . $startups['companies'][$j]['fileName'] ?>" class="card-img-top" alt="<?php echo $startups['companies'][$j]['name'] ?>" height="200px">
                    <div class="card-body">
                        <h5 class="card-title text-mountain-meadow mb-0"><?php echo $startups['companies'][$j]['name'] ?></h5>
                        <p class="text-left text-emperor font-weight-bolder"><?php echo "Status: " . ucfirst($startups['companies'][$j]['status']) ?></p>
                        <p class="card-text"><?php echo $startups['companies'][$j]['description'] ?></p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <?php if ($startups['companies'][$j]['website'] !== "") { ?>
                            <a rel="noreferrer" class="btn btn-sm btn-mountain-meadow text-white globe" href="<?php echo $startups['companies'][$j]['website'] ?>" target="_blank">Visit Website</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>