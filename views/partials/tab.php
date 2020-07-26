<?php
$count = 0;
$tagsArray = [];
?>
<ul class="nav nav-pills justify-content-center my-5" role="tablist">
    <?php for ($i = 0; $i < count($startups['tags']); $i++) { ?>
        <?php if (companyExists($param1, $startups['tags'][$i], $param2, $value2, $startups)) { ?>
            <?php
            $count++;
            $tag = str_replace([' ', '/'], '-', $startups['tags'][$i]);
            array_push($tagsArray, $startups['tags'][$i]);
            ?>
            <li class="nav-item">
                <a class="btn btn-outline-mountain-meadow <?php if ($count === 1) echo 'active' ?> px-sm-4 py-sm-2 m-1 m-sm-2" id="<?php echo $tag; ?>" href="<?php echo "#$tag-$suffix" ?>" data-toggle="pill" role="tab">
                    <?php echo ucfirst($startups['tags'][$i]) ?>
                </a>
            </li>
        <?php } ?>
    <?php } ?>
</ul>

<?php $count = 0; ?>
<?php for ($i = 0; $i < count($tagsArray); $i++) { ?>
    <?php $value1 = $tagsArray[$i];
    $tag = str_replace([' ', '/'], '-', $value1);
    ?>
    <div class="tab-pane fade <?php if ($i === 0) echo 'show active' ?>" id="<?php echo "$tag-$suffix" ?>" role="tabpanel">
        <?php include 'startup-card.php' ?>
    </div>
<?php } ?>