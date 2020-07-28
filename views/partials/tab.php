<?php
$tagsArray = [];
?>

<?php if (isset($all) && $all) { ?>
    <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
        <?php include 'startup-card.php' ?>
    </div>
<?php } else { ?>
    <ul class="nav nav-pills justify-content-center my-5" role="tablist">
        <li class="nav-item">
            <a class="btn btn-outline-mountain-meadow active px-sm-4 py-sm-2 m-1 m-sm-2" id="all" href="<?php echo "#all-$suffix" ?>" data-toggle="pill" role="tab">All</a>
        </li>
        <?php for ($i = 0; $i < count($startups['tags']); $i++) { ?>
            <?php if (companyExists($param1, $startups['tags'][$i], $param2, $value2, $startups)) { ?>
                <?php
                $tag = str_replace([' ', '/'], '-', $startups['tags'][$i]);
                array_push($tagsArray, $startups['tags'][$i]);
                ?>
                <li class="nav-item">
                    <a class="btn btn-outline-mountain-meadow px-sm-4 py-sm-2 m-1 m-sm-2" id="<?php echo $tag; ?>" href="<?php echo "#$tag-$suffix" ?>" data-toggle="pill" role="tab">
                        <?php echo ucfirst($startups['tags'][$i]) ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>

    <?php for ($i = 0; $i < count($tagsArray); $i++) { ?>
        <?php $value1 = $tagsArray[$i];
        $tag = str_replace([' ', '/'], '-', $value1);
        ?>
        <div class="tab-pane fade" id="<?php echo "$tag-$suffix" ?>" role="tabpanel">
            <?php include 'startup-card.php' ?>
        </div>
    <?php } ?>

    <div class="tab-pane fade show active" id="<?php echo "all-$suffix" ?>" role="tabpanel">
        <?php
        $all = true;
        $status = explode("-", $suffix)[0];
        if ($status === 'seed') {
            $param1 = 'seedSupport';
            $value1 = true;
            $param2 = $param1;
            $value2 = $value1;
            unset($status);
        } else {
            unset($param1);
            unset($param2);
            unset($value1);
            unset($value2);
        }
        ?>
        <?php include 'startup-card.php' ?>
    </div>
<?php } ?>