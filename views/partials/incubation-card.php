<?php for ($j = 0; $j < count($incubation); $j++) { ?>
    <div class="col mb-4">
        <div class="card border-sea-buckthorn h-100">
            <div class="row align-items-center m-0">
                <div class="col-3 text-center">
                    <h1 class="display-4 mb-0"><?php echo $j + 1 ?></h1>
                </div>
                <div class="card-body col-9 float-right pl-0">
                    <h5 class="card-title"><?php echo $incubation[$j]['stage'] ?></h5>
                    <p class="card-text"><?php echo $incubation[$j]['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>